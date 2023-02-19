<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    use HasFactory;
    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'location',
    ];
}
