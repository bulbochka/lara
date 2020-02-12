<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminRegister extends Model
{
    protected $table = 'register_for_admin';
    public $primaryKey =  'id';
    public $timestamps = true;
}
