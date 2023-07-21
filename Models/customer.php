<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable=['name','phone','email','time'];
    public $timestamps=true;
}
