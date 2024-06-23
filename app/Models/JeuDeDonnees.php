<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JeuDeDonnees extends Model
{
    use HasFactory;

    protected $table = 'jeux_de_donnees'; // Définir explicitement le nom de la table
    protected $fillable = ['entreprise_id', 'donnees'];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
}
