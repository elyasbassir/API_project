<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
protected $fillable=['name','phone','email'];
public $timestamps=false;
}
