<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected $fillable = ['page_name', 'count', 'month'];
}
