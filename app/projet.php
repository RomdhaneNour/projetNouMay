<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    protected $fillable = [
        'quantite', 'prixtotal', 'datedebut', 'datefin', 'domaine',
    ];

}



