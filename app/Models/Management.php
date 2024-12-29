<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function role() {
        return $this->belongsTo(Role::class, 'current_role_id', 'id');
    }

    function lowerRole() {
        return $this->belongsTo(Role::class, 'lower_role_id', 'id');
    }

    function upperRole() {
        return $this->belongsTo(Role::class, 'upper_role_id', 'id');
    }
}
