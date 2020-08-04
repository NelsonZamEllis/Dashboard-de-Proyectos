<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    
    protected $primaryKey = 'company_id';

    public $timestamps = false;
}
