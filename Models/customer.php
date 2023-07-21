<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable=['name','phone','title','time'];
    public $timestamps=true;
}
