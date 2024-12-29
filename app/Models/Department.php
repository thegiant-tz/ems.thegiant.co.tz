<?php

namespace App\Models;

use App\Models\RequestDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function requestDetails() {
        return $this->hasMany(RequestDetail::class, 'department_id', 'id');
    }
}
