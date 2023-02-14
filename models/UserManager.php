<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Models;

use Model;
use Str;
use Mail;
use Event;
use Config;
use Backend;
use October\Rain\Auth\Models\User as UserBase;
use ValidationException;

/**
 * Model
 */
class UserManager extends UserBase
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'backend_users';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'email' => 'required|between:6,255|email|unique:backend_users',
        'login' => 'required|between:2,255|unique:backend_users',
        'password' => 'required:create|between:4,255|confirmed',
        'password_confirmation' => 'required_with:password|between:4,255'
    ];

    /**
     * belongsToMany relation
     */
    public $belongsToMany = [
        'groups' => [UserGroup::class, 'table' => 'backend_users_groups']
    ];

    public $belongsTo = [
        'role' => UserRole::class
    ];

    public $attachOne = [
        'avatar' => \System\Models\File::class
    ];

    /**
     * @var array fillable fields
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'login',
        'email',
        'password',
        'password_confirmation',
        'send_invite',
    ];

    /**
     * @var string loginAttribute
     */
    public static $loginAttribute = 'login';

    /**
     * getFullNameAttribute returns the user's full name
     */
    public function getFullNameAttribute(): string
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    /**
     * getPersistCode gets a code for when the user is persisted to a cookie or session
     * which identifies the user
     * @return string
     */
    public function getPersistCode()
    {
        if (!$this->persist_code || Config::get('backend.force_single_session', false)) {
            return parent::getPersistCode();
        }

        return $this->persist_code;
    }

    /**
     * getAvatarThumb returns the public image file path to this user's avatar
     */
    public function getAvatarThumb($size = 25, $options = null)
    {
        if (is_string($options)) {
            $options = ['default' => $options];
        }
        elseif (!is_array($options)) {
            $options = [];
        }

        // User has avatar defined
        if ($this->avatar) {
            return $this->avatar->getThumb($size, $size, $options);
        }

        // User has no avatar, look for default
        $defaultConfig = Config::get('backend.default_avatar', 'gravatar');

        // Default gravatar is "retro"
        if ($defaultConfig === 'gravatar') {
            $default = array_get($options, 'default', 'retro');

            return '//www.gravatar.com/avatar/' .
                md5(strtolower(trim($this->email))) .
                '?s='. $size .
                '&d='. urlencode($default);
        }

        // Default backend image
        if ($defaultConfig === 'local') {
            return Backend::skinAsset('assets/images/default-avatar.png');
        }

        // Custom URL
        return $defaultConfig;
    }

    /**
     * beforeValidate event
     */
    public function beforeValidate()
    {
        if ($this->validationForced) {
            return;
        }

        // Will pass if password attribute is dirty
        // if ($password = $this->getOriginalHashValue('password')) {
        //     $this->validatePasswordPolicy($password);
        // }
    }

    /**
     * getGroupsOptions returns available group options
     */
    public function getGroupsOptions()
    {
        $result = [];

        foreach (UserGroup::all() as $group) {
            $result[$group->id] = [$group->name, $group->description];
        }

        return $result;
    }

    /**
     * getRoleOptions returns available role options
     */
    public function getRoleOptions()
    {
        $result = [];

        foreach (UserRole::all() as $role) {
            $result[$role->id] = [$role->name, $role->description];
        }

        return $result;
    }

    /**
     * validatePasswordPolicy will check the password based on the backend policy
     */
    public function validatePasswordPolicy($password)
    {
        $policy = Config::get('backend.password_policy', []);

        if ($minLength = $policy['min_length'] ?? 4) {
            if (mb_strlen($password) < $minLength) {
                throw new ValidationException(['password' => __('Password must have a minimum of length of :min characters', ['min'=>$minLength])]);
            }
        }

        if ($policy['require_uppercase'] ?? false) {
            if (mb_strtolower($password) === $password) {
                throw new ValidationException(['password' => __('Password must contain at least one uppercase character.')]);
            }
        }

        if ($policy['require_lowercase'] ?? false) {
            if (mb_strtoupper($password) === $password) {
                throw new ValidationException(['password' => __('Password must contain at least one lowercase character.')]);
            }
        }

        if ($policy['require_number'] ?? false) {
            if (!array_filter(str_split($password), 'is_numeric')) {
                throw new ValidationException(['password' => __('Password must contain at least one number.')]);
            }
        }

        if ($policy['require_nonalpha'] ?? false) {
            if (!Str::contains($password, str_split("!@#$%^&*()_+-=[]{}|'"))) {
                throw new ValidationException(['password' => __('Password must contain at least one nonalphanumeric character.')]);
            }
        }

        /**
         * @event user.validatePasswordPolicy
         * Called when the user password is validated against the policy
         *
         * Example usage:
         *
         *     $model->bindEvent('user.validatePasswordPolicy', function (string $password) use ($model) {
         *         throw new ValidationException(['password' => 'Prevent anything from validating ever!']);
         *     });
         *
         */
        $this->fireEvent('user.validatePasswordPolicy', compact('password'));
    }
}
