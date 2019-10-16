<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Commentaire;

class Article extends Model
{
    public function commentaires(){
        return $this->hasMany(Commentaire::class,"article","id");
    }
}
