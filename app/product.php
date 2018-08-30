<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable=array('name','description','price','title','brand_id','category_id','created_at_ip','updated_at_ip');
}
