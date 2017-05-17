<?php

namespace App\Odontograma;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
  protected $table      = 'Problema';
  protected $primaryKey = 'Problema_id';


  protected $fillable   = [
    'Lesion_de_caries_ICDAS_3_a_6',
    'Lesion_de_caries_ICDAS_1_y_2',
    'Ausente',
    'Indicacion_exodoncia',
    'Obturacion',
    'Obturacion_con_caries',
    'Obturacion_deficiente',
    'Sellante',
    'Problema_9',
    'Problema_10',
    'Problema_11',
    'Problema_12',
    'Problema_13',
    'Problema_14'




];

  public function Odontograma (){
    return $this->belongsTo(Odontograma::class);
  }
}
