<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
   protected $fillable = [
      'Azienda',
      'StazionePartenza',
      'DataPartenza',
      'OrarioPartenza',
      'StazioneArrivo',
      'DataArrivo',
      'OrarioArrivo',
      'CodiceTreno',
      'NumeroCarrozze',
      'InOrario',
      'Cancellato'
   ];
}
