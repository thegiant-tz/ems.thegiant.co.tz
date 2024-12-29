<?php

namespace App\Models;

use App\Models\File;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Retirement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function attachments() {
        return $this->morphMany(File::class, 'fileable', 'fileable_type', 'fileable_id');
    }

    function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function requestDetail() {
        return $this->belongsTo(RequestDetail::class, 'request_detail_id', 'id');
    }
}
