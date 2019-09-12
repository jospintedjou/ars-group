<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable=['user_id', 'nom_contact', 'nom_projet', 'email', 'logo', 'cahier_charge', 'duree', 'date_debut', 'cout', 'descriprtion', 'etat'];
}
