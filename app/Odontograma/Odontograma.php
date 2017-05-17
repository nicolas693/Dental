<?php

namespace App\Odontograma;

use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
  protected $table      = 'odontogramas';
  protected $primaryKey = 'Odontograma_id';


  protected $fillable   = [
    'pieza18',
      'pieza17',
      'pieza16',
      'pieza15',
      'pieza14',
      'pieza13',
      'pieza12',
      'pieza11',

      'pieza21',
      'pieza22',
      'pieza23',
      'pieza24',
      'pieza25',
      'pieza26',
      'pieza27',
      'pieza28',

      'pieza48',
      'pieza47',
      'pieza46',
      'pieza45',
      'pieza44',
      'pieza43',
      'pieza42',
      'pieza41',

      'pieza31',
      'pieza32',
      'pieza33',
      'pieza34',
      'pieza35',
      'pieza36',
      'pieza37',
      'pieza38'


  ];


  public function Problema (){
    return $this->Hasmany(Problema::class);
  }
}
