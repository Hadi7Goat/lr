<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table = "demandes";

    protected $fillable = [
        'civilite',
        'nom',
        'prenom',
        'prenom_pere',
        'nom_mere',
        'prenom_mere',
        'date_naissance',
        'wilaya_naissance',
        'communen_naissance',
        'num_act_naissance',
        'type_act_naissance',
        'situation_familiale',
        'niveau_dinstructions',
        'numbre_enfants',
        'numbre_personnes',
        'age',
        'activite',
        'duree',
        'service',
        'certificat',
        'experience'
    ];
}
