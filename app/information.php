<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    //

    public function actualizarInformacion($campo, $valor){
        information::where('name', $campo)
          ->update(['value' => $valor]);
    }
}
