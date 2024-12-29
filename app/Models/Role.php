<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    function users() {
        return $this->hasMany(User::class, 'role_id', 'id');
    } 

    function managements() {
        return $this->hasMany(Management::class, 'role_id', 'id');
    } 

    function management() {
        return $this->hasOne(Management::class, 'role_id', 'id');
    }

    function lowerManagements() {
        return $this->hasMany(Management::class, 'lower_role_id', 'id');
    } 

    function lowerManagement() {
        return $this->hasOne(Management::class, 'lower_role_id', 'id');
    }

    function upperManagements() {
        return $this->hasMany(Management::class, 'upper_role_id', 'id');
    } 

    function upperManagement() {
        return $this->hasOne(Management::class, 'upper_role_id', 'id');
    }
}
