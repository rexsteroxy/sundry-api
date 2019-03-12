<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected $fillable = ['title', 'description', 'position', 'requirements', 'location',  'user_id'];

}
