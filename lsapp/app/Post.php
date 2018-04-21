<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model //additional changes to the model can be made here
{
    // Table Name
    protected $table = "posts";
    // Primary Key
    public $primaryKey = "id";
    // Timestamps
    public $timestamps = true;

}
