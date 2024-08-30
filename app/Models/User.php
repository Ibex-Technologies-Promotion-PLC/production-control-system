<?php

namespace App\Models;

use App\Models\Traits\HasQueries;
use App\Models\Traits\HasSettings;
use App\Models\Traits\ModelHelpers;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasSettings;
    use HasQueries;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use ModelHelpers;
    use LogsActivity;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // Implement the required method
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'email']) // Log only specified attributes
            ->logOnlyDirty() // Log changes only when they are dirty (changed)
            ->setDescriptionForEvent(fn(string $eventName) => "User has been {$eventName}"); // Custom description for events
    }
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_login_at '
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    public function logedinAt()
    {
        return $this->last_login_at ? Carbon::parse($this->last_login_at)  : Carbon::now();
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function delete()
    {
        if ($this->isSystemAdmin() || $this->isLastAdmin()) return;

        $this->roles()->detach();
        return parent::delete();
    }


    public function isAdmin()
    {
        return $this->hasRole(['admin', 'super admin']);
    }

    public function isSuperUser()
    {
        return $this->hasRole('super admin');
    }


    public function isLastAdmin()
    {
        return $this->isAdmin() && self::adminCount() === 1;
    }

    public function isSystemAdmin()
    {
        return $this->email === 'admin@admin.com';
    }


    public static function adminCount()
    {
        return self::whereHas('roles', function (Builder $query) {
            return $query->where('name', 'admin');
        })->count();
    }

    /**
     * Exclude the user with 'super admin' role
     */
    public static function allExceptSU()
    {
        return self::whereDoesntHave('roles', function (Builder $query) {
            return $query->where('name', 'super admin');
        })->get();
    }
}
