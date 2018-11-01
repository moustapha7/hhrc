<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'code', 'name', 'description','prix', 'quantite', 'categorie_id'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
}
