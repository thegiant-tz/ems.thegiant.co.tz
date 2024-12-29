<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class UserPermission extends Model
{
    use HasFactory;

    function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function permission() {
        return $this->belongsTo(Permission::class, 'permission_id', 'id');
    }
}
