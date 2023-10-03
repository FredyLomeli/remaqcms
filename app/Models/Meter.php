<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    protected $fillable = ['tipo', 'products_id', 'category_id', 'url'];
}
