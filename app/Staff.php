<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // Table Name
    protected $table = "staff"; 

    public $primarykey = "id";
    public $name = "name";
}
