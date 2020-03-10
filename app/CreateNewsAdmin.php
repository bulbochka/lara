<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateNewsAdmin extends Model
{
    protected $table = 'news_admin_page';
    public $primaryKey =  'id';
    public $timestamps = true;
}
