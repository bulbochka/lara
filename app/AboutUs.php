<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'reviews';
    public $primaryKey =  'id';
    public $timestamps = true;
}
