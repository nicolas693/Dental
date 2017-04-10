<?php

namespace App\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
      protected $table = 'Ficha';
      protected $primaryKey = 'Ficha_id';

      protected $fillable = [
          'Paciente_id','Ocupacion','Fecha_Ingreso','Motivo_Consulta',
          'Expectativas',
          //Ancedentes Medicos
          'EnfCardiovasculares','EnfGastrointestinales','EnfRespiratorias','EnfNeurologicas',
          'EnfIntectocontagiosas','DiscrasiaSanguinea','Diabetes','Alergia', 'Embarazo', 'OtraEnf', 'NombreOtra',

          'Farmacos_Uso','Fecha_Ultima_Consulta','Motivo_Ultima_Consulta','Antecedentes_Traumatismo','DienteTraumatismo',
          'Fecha_Traumatismo','Fuma','Alcohol','Drogas','Cepillo',
          //Elementos de Higiene
          'SedaDental', 'Dentrífico', 'Colutorio', 'Otros', 'NombreOtros',
          'Anestesia','Complicacion_Anestesia','Complicacion', 'Alerta_Medica',
          //Procedimientos
          'Apicectomia', 'Blanqueamiento_Dental', 'Cementación', 'Endodoncia', 'Exodoncia', 'Explorador_Dental',
          'Gingivectomía', 'Gingivoplastía', 'Higiene_Bucodental', 'Implante_Dental', 'Limpieza_Dental', 'Ostectomía',
          'Remineralización_dental','SitioEstado', 'Tartrectomía', 'Tecnica_Colgajo', 'Tecnica_Seno_Maxilar','Regeneracion_Osea', 'Terapia_Fluoruro'
      ];

      public function Paciente (){
          return $this->belongsTo(Paciente::class);
      }


}
