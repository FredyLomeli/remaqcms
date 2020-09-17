<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name', 'img_name'];

    public function products()
    {
        return $this->hasMany('App\products','categoria');
    }

    public function meter()
    {
        return $this->hasMany('App\Meter','category_id');
    }
}
