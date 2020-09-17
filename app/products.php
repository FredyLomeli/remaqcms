<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['name', 'descripcion', 'categoria', 'img_name'];

    public function meter()
    {
        return $this->hasMany('App\Meter','products_id');
    }
}
