<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTracker extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function requestDetail() {
        return $this->belongsTo(RequestDetail::class, 'request_detail_id', 'id');
    }

    function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
