<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $table = 'entreprises'; // Définir explicitement le nom de la table si ce n'est pas la convention par défaut
    protected $fillable = ['nom', 'secteur', 'region', 'taille'];
}
