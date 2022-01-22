<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "Clienties";

    protected $fillable = ['id', 'name', 'email', "image"];
}
