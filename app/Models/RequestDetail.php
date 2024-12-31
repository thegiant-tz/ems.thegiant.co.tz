<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function attachments() {
        return $this->morphMany(File::class, 'fileable', 'fileable_type', 'fileable_id');
    }

    function reason() {
        return $this->belongsTo(Reason::class, 'reason_id', 'id');
    }

    function department() {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function retirement() {
        return $this->hasOne(Retirement::class, 'request_detail_id', 'id');
    }

    function requestTrackers() {
        return $this->hasMany(RequestTracker::class, 'request_detail_id', 'id');
    }

    function getLatestStatusAttribute() {
        return $this->requestTrackers()->latest()->first()->status ?? '';
    }

    function getUpperRoleRequestTrackerAttribute() {
        return $this->requestTrackers()->whereHas('user.role', fn ($role) => $role->whereName(currentUpperRoleName()))->latest()->first();
    }

    function getIsMyUpperRoleResponseExistsAttribute() {
        return !is_null($this->requestTrackers()->whereHas('user.role', fn ($role) => $role->whereName(currentUpperRoleName()))->first());
    }

    function getIsMyResponseExistsAttribute() {
        return !is_null($this->requestTrackers()->whereUserId(authUserId())->latest()->first());
    }

    function getIsMyRejectionExistsAttribute() {
        return !is_null($this->requestTrackers()->whereStatus('Rejected')->whereUserId(authUserId())->latest()->first());
    }

    function getIsMyApprovalExistsAttribute() {
        return !is_null($this->requestTrackers()->whereStatus('Approved')->whereUserId(authUserId())->latest()->first());
    }

    function getIsApprovedAttribute() {
        return $this->latest_status == 'Approved';
    }

    function getIsRejectedAttribute() {
        return $this->latest_status == 'Rejected';
    }
}
