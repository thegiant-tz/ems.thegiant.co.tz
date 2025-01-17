<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Retirement;
use App\Models\RequestDetail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Permission;
use App\Http\Resources\UserPermissionResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    function userPermissions() {
        return $this->hasMany(UserPermission::class, 'user_id', 'id');
    }

    function getPermissionsAttribute() {
        $permissionIds = $this->userPermissions()->pluck('permission_id');
        return Permission::whereIn('id', $permissionIds)->get();
    }

    function requestDetails() {
        return $this->hasMany(RequestDetail::class, 'user_id', 'id');
    }

    function retirements() {
        return $this->hasMany(Retirement::class, 'user_id', 'id');
    }

    function requestTrackers() {
        return $this->hasMany(RequestTracker::class, 'user_id', 'id');
    }

    function role() {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
