<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function requestDetails() {
        return $this->hasMany(RequestDetail::class, 'reason_id', 'id');
    }
}
