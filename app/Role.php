<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public const ADMIN = 'admin';
    public const STAFF = 'staff';
    public const CLIENT = 'client';

    protected $fillable = [
        'name',
        'guard_name',
    ];
}
