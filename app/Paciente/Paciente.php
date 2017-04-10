<?php

namespace App\Paciente;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //

    protected $table= 'Paciente';
    protected $primaryKey= 'rut';
    public $incrementing = false;
    protected $fillable=[
    	'rut','Nombre','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Nacimiento','Telefono_Casa',
      'Telefono_Movil', 'Calle','Numero_Calle','Pais','Region','Comuna','Cobertura_Medica',
      'Ficha_id','alta',
    ];


    public function Ficha (){
        return $this->hasOne(Ficha::class);
    }
}
