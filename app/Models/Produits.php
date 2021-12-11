<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    public function recommandations(){
        return $this->belongsToMany('App\Models\Produits', 'produit_recommande', 'produit_id', 'produit_recommande_id');
    }
}
