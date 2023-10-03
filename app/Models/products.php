<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['name', 'descripcion', 'categoria', 'img_name'];

    public function meter()
    {
        return $this->hasMany('App\Models\Meter','products_id');
    }
}
