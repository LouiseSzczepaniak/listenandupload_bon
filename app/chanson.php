<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chanson extends Model
{
    protected $table = "chanson";

    public function utilisateur(){
        return $this->belongsTo("App\User", "user_id");
    }
}
