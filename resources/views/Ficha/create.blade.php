@extends('layouts.app')
@section('title','Pacientes')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pacientes</title>
    <link href="{{ asset('css/micss.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </head>


  <body>
    <div class="col-md-10 fondoC">
      <div class="centrarIT"></div>
       <div class="panel panel-primary centrarIT">

         <div class="panel-heading"><b> Ficha Paciente </b></div>

         <div class="panel-body">
               {!!Form::open(['route'=>['Ficha.store'],'method'=>'POST'])!!}

               <div class="form-group col-sm-6">
                   {!!form::label('Nombre :')!!}
                    {!!$paciente->Nombre !!} {!!$paciente->Paterno !!} {!!$paciente->Materno !!}
                    {{Form::hidden('paciente_id',$paciente->rut)}}
               </div>

             <div class="form-group col-sm-6">
               {!!form::label('Rut : ')!!}
               {!!$paciente->rut!!}
             </div>

               <div class="form-group col-sm-6">
                   {!!form::label('FechaNacimiento','Fecha de nacimiento : ')!!}
                    {!!$paciente->Fecha_Nacimiento !!}
                    {{Form::hidden('Fecha_Nacimiento',$paciente->Fecha_Nacimiento)}}
               </div>

               <div class="form-group col-sm-6">
                 {!!form::label('TelefonoMovil','Teléfono Movil : ')!!}
                 {!!$paciente->Telefono_Movil !!}
                 {{Form::hidden('Telefono_Movil',$paciente->Telefono_Movil)}}
               </div>

               <div class="form-group col-sm-6">
                 {!!form::label('Dirección : ')!!}
                 {!!$paciente->Calle !!} {!!$paciente->Numero_Calle !!}
                 {{Form::hidden('Calle',$paciente->Calle)}}
                 {{Form::hidden('Numero_Calle',$paciente->Numero_Calle)}}

               </div>


               <div class="form-group col-sm-12">
                 {!!form::label('Edad : ')!!} {{$edad}}
               </div>

               <div class="form-group col-sm-4">
                 {!!form::label('FechaControl','Fecha de Ingreso: ')!!} {{$fechaA}}
               </div>


               <div class="form-group col-sm-10" >
                 {!!form::label('Ocupación')!!}
                 {!!form::text('Ocupacion',null,['id'=>'Ocupacion','class'=>'form-control'])!!}
               </div>

               <div class="form-group col-sm-12">
                 {!!form::label('MotivoConsulta','Motivo de Consulta')!!}
                 {!!form::text('Motivo_Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control'])!!}
               </div>

               <div class="form-group col-sm-12">
                 {!!form::label('Expectativas')!!}
                 {!!form::text('Expectativas',null,['id'=>'Expectativas','class'=>'form-control'])!!}
               </div>

             </div>
                  <div class="panel-heading"><b>
                     1.Anamnesis General</b>
                   </div>
                  <div class="panel-body">

                    <div class="form-group col-sm-12">
                      {!!Form::label('Antecedentes Médicos') !!}
                    </div>

                    <div class="form-group col-sm-12 ">
                       <div class="col-sm-6">
                         {!!Form::checkbox('EnfCardiovasculares',1 ,false) !!}
                         {!!Form::label('EnfCardio','Enf. Cardiovasculares',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('EnfGastrointestinales',1 ,false)!!}
                         {!!Form::label('EnfGastro','Enf. Gastrointestinales',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('EnfRespiratorias', 1 ,false)!!}
                         {!!Form::label('EnfResp','Enf. Respiratorias',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('EnfNeurologicas', 1 ,false)!!}
                         {!!Form::label('EnfNeuro','Enf. Neurológicas',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('EnfIntectocontagiosas', 1, false )!!}
                         {!!Form::label('EnfInfec','Enf. Infectocontagiosas',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('DiscrasiaSanguinea', 1, false )!!}
                         {!!Form::label('Discrasia','Discrasia Sanguinea',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('Diabetes', 1, false )!!}
                         {!!Form::label('diabetes','Diabetes',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('Alergia', 1, false )!!}
                         {!!Form::label('alergias','Alergias',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('Embarazo', 1, false )!!}
                         {!!Form::label('_embarazo','Embarazo',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-6">
                         {!!Form::checkbox('OtraEnf', 1, false )!!}
                         {!!Form::label('Otraenf','Otra enfermedad',array('class'=>'nobold')) !!}
                       </div>

                     </div>

                      <div class="form-group col-sm-12">
                          {!!Form::label('farmacos','Fármacos en uso') !!}
                          {!!Form::text('Farmacos_Uso',null,['id'=>'Farmacos_Uso','class'=>'form-control'])!!}
                      </div>



                      <div class="form-group col-sm-12">
                        {!!Form::label('Hábitos') !!}
                      </div>

                      <div class="form-group col-sm-12">

                        <div class="col-sm-4">
                          {!!Form::checkbox('Fuma', 1, false )!!}
                          {!!Form::label('fumar','Fuma',array('class'=>'nobold')) !!}
                        </div>

                        <div class="col-sm-4">
                          {!!Form::checkbox('Alcohol', 1, false )!!}
                          {!!Form::label('alcohol','Consume alcohol',array('class'=>'nobold')) !!}
                        </div>

                        <div class="col-sm-4">
                          {!!Form::checkbox('Drogas', 1, false )!!}
                          {!!Form::label('drogas_','Consume drogas',array('class'=>'nobold')) !!}
                        </div>

                      </div>

                 </div>

                     <div class="panel-heading"><b>
                        2.Anamnesis Odontológica</b>
                      </div>
                     <div class="panel-body">
                       <div class="form-group col-sm-4">
                         <div class="input-group">
                           <label for="date"><b>Fecha de último control </b></label>
                             <input type="text" class="form-control datepicker" id="Fecha_Ultima_Consulta" name="Fecha_Ultima_Consulta">
                           </div>
                         </div>

                       <div class="form-group col-sm-8">
                         {!!form::label('Motivo Ultima Consulta')!!}
                         {!!form::text('Motivo_Ultima_Consulta',null,['id'=>'Motivo_Ultima_Consulta','class'=>'form-control'])!!}
                       </div>

                       <div class="form-group col-sm-12">
                         {!!Form::label('Traumatismo','Antecedentes de Traumatismo Dentoalveolar')!!}
                       </div>

                       <div class="form-group col-sm-12 ">
                         <div class="col-sm-8">
                         {!!Form::radio('Antecedentes_Traumatismo',0,false,['id'=>'r1']) !!}
                         {!!Form::label('Tortodoncia','No ha recibido tratamiento de Ortodoncia'
                           ,array('class'=>'nobold'))!!}
                         </div>

                         <div class="col-sm-8">
                         {!!Form::radio('Antecedentes_Traumatismo',1,false ,['id'=>'r2']) !!}
                         {!!Form::label('Tortodoncia2','Si ha recibido tratamiento de Ortodoncia'
                           ,array('class'=>'nobold'))!!}
                         </div>

                         <div class="form-group col-sm-12" id="text_t1">
                           <div class="col-sm-4">
                             {!!form::label('DienteTrau','Indique en que Diente')!!}
                             {!!form::text('DienteTraumatismo',null,['id'=>'DienteTraumatismo','class'=>'form-control'])!!}
                           </div>

                           <div class="col-sm-4" >
                             <div class="input-group">
                               <label for="date" class="nobold" ><b>Fecha de traumatismo </b></label>
                               <input type="text" class="form-control datepicker2" id="fecha2" name="Fecha_Traumatismo">
                             </div>
                           </div>
                       </div>
                     </div>

                     <div class="form-group col-sm-12">
                       {!!Form::label('ElemH','Elementos de Hígiene') !!}
                     </div>

                     <div class="form-group col-sm-12">
                       <div class="col-sm-3">
                         {!!Form::checkbox('Cepillo', 1, false )!!}
                         {!!Form::label('_cepillo','Cepillo',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-3">
                         {!!Form::checkbox('SedaDental', 1, false )!!}
                         {!!Form::label('_seda','Seda dental',array('class'=>'nobold')) !!}
                       </div>

                       <div class="col-sm-3">
                         {!!Form::checkbox('Dentrífico', 1, false )!!}
                         {!!Form::label('_dentrifico','Dentrífico',array('class'=>'nobold')) !!}
                       </div>
                       <div class="col-sm-3">
                         {!!Form::checkbox('Colutorio', 1, false )!!}
                         {!!Form::label('_colutorio','Colutorio',array('class'=>'nobold')) !!}
                       </div>
                       <div class="col-sm-3">
                         {!!Form::checkbox('Otros', 1, false,['id'=>'chk21'] )!!}
                         {!!Form::label('_otros','Otros',array('class'=>'nobold')) !!}
                       </div>
                     </div>

                     <div class="col-sm-12 form-group">
                       <div class="col-sm-6" id="text_t2">
                         {!!Form::label('Especifique')!!}
                         {!!Form::text('NombreOtros',null,['id'=>'NombreOtros','class'=>'form-control']) !!}
                       </div>
                     </div>


                     <div class="form-group col-sm-12">
                       <div class="col-sm-6">
                         {!!Form::label('Anestesia','¿Le han aplicado Anestesia Dental?')!!}
                         <div class="col-sm-8">
                           {!!Form::radio('Anestesia',0,false,['id'=>'r10']) !!}
                           {!!Form::label('nones','No',array('class'=>'nobold'))!!}
                         </div>
                         <div class="col-sm-8">
                           {!!Form::radio('Anestesia',1,false, ['id'=>'r11'] ) !!}
                           {!!Form::label('yep','Si',array('class'=>'nobold'))!!}
                         </div>
                       </div>

                       <div class="col-sm-6" id="text_t3">
                         {!!Form::label('Complicaciones','¿Ha tenido complicaciones al respecto?')!!}
                         <div class="col-sm-8">
                           {!!Form::radio('Complicacion_Anestesia',0,false,['id'=>'r12']) !!}
                           {!!Form::label('nones1','No',array('class'=>'nobold'))!!}
                         </div>
                         <div class="col-sm-8">
                           {!!Form::radio('Complicacion_Anestesia',1,false,['id'=>'r13']) !!}
                           {!!Form::label('yep1','Si',array('class'=>'nobold'))!!}
                         </div>
                       </div>
                     </div>

                     <div class="col-sm-12 form-group">
                       <div class="col-sm-8" id="text_t4">
                         {!!form::label('Especifique2','Especifique')!!}
                         {!!form::text('Complicacion',null,['id'=>'Complicacion','class'=>'form-control'])!!}
                       </div>
                     </div>

                     <div class="col-sm-12 form-group">
                       {!!Form::label('Procedimientos') !!}
                     </div>

                           <div class="col-sm-12 form-group">

                             <div class="col-sm-6">
                               {!!Form::checkbox('Apicectomia', 1,false) !!}
                               {!!Form::label('_apicectomia','Apicectomía',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Blanqueamiento_Dental',1 ,false)!!}
                               {!!Form::label('_blanqueamiento','Blanqueamiento Dental',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Cementación',1 ,false)!!}
                               {!!Form::label('_Cementación','Cementación',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Endodoncia', 1 ,false)!!}
                               {!!Form::label('_endodoncia','Endodoncia',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Exodoncia', 1 ,false)!!}
                               {!!Form::label('_exodoncia','Exodoncia',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Explorador_Dental', 1 ,false)!!}
                               {!!Form::label('_explorador','Explorador Dental',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Gingivectomía', 1 ,false)!!}
                               {!!Form::label('_gingivectomia','Gingivectomía',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Gingivoplastía', 1 ,false)!!}
                               {!!Form::label('_gingivoplastia','Gingivoplastía',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Higiene_Bucodental', 1 ,false)!!}
                               {!!Form::label('_higiene','Higiene Bucodental',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Implante_Dental', 1 ,false)!!}
                               {!!Form::label('_implante','Implante Dental',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Limpieza_Dental', 1 ,false)!!}
                               {!!Form::label('_limpieza','Limpieza Dental',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Ostectomía', 1 ,false)!!}
                               {!!Form::label('_ostectomia','Ostectomía',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Remineralización_dental', 1 ,false)!!}
                               {!!Form::label('_remineralizacion','Remineralización Dental',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('SitioEstado', 1 ,false)!!}
                               {!!Form::label('_sitioestado','Sitio/Estado',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Tartrectomía', 1 ,false)!!}
                               {!!Form::label('_tartrectomia','Tartrectomía',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Tecnica_Colgajo', 1 ,false)!!}
                               {!!Form::label('_colgajo','Técnica de elevación del colgajo',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Tecnica_Seno_Maxilar', 1 ,false)!!}
                               {!!Form::label('_senomaxilar','Técnica de elevación del seno maxilar',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Regeneracion_Osea', 1 ,false)!!}
                               {!!Form::label('_Regeneracion_Osea','Técnica de regeneración ósea guiada',array('class'=>'nobold')) !!}
                             </div>

                             <div class="col-sm-6">
                               {!!Form::checkbox('Terapia_Fluoruro', 1 ,false)!!}
                               {!!Form::label('_fluoruro','Terapia de fluoruro',array('class'=>'nobold')) !!}
                             </div>
                           </div>

          <div class="form-group col-sm-12">
            <div class="col-sm-10">
              {!!form::label('Indique Alerta Médica')!!}
              {!!form::text('Alerta_Medica',null,['id'=>'Alerta_Medica','class'=>'form-control'])!!}

            </div>
          </div>

          <div class="col-sm-12" style="margin-top:10px;" >
            <div class="col-sm-2">
              {!!Form::submit('Grabar',['name'=>'grabar','id'=>'grabar'
                ,'content'=>'<span>Grabar</span>','class'=>'btn btn-success ']) !!}
                {!!Form::close()!!}
            </div>

          </div>

       </div>
    </div>
    </div>

  </body>
</html>
@endsection
