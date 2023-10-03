<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name', 'img_name'];

    public function products()
    {
        return $this->hasMany('App\Models\products','categoria');
    }

    public function meter()
    {
        return $this->hasMany('App\Models\Meter','category_id');
    }
}
