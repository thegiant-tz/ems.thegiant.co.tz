<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContracts;

class JsonUser extends Authenticatable
{
    protected $fillable = [
        'id',
        'name',
        'username',
        'phone',
        'email',
        'role',
        'token',
        'status',
    ];
    public function  __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function getKeyName()
    {
        return 'id';
    }

    public function getKey()
    {
        return $this->id;
    }
}
