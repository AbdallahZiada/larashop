<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('url','blog','content','description','title','created_at_ip','updated_at_ip');
}
