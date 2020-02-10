<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    protected $table = 'login_for_admin';
    public $primaryKey =  'id';
    public $timestamps = true;
}
