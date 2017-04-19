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


    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
  </head>

  <ol class="breadcrumb margenOl ">
       <li class="pull-left"><button id="paciente1" class="btn btn-primary btn-xs"> <b>Pacientes Con Alta</b></button></li>
       <li class="pull-left"><button id="paciente2" class="btn btn-primary btn-xs"> <b>Pacientes En Tratamiento</b></button></li>
       <li class="pull-right"><a href="/" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
       <li class="active">  </li>
     </ol>
  <body>
    <div class="panel panel-success margen" id="1">

      <div class="panel-heading" >
        <b>Pacientes</b>
        <button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#myModal">Ingresar</button>
      </div>
        <div class="panel-body">
          <table class="table stripe compact " id="myTable1"  >
            <thead>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Telefono</th>
               <th>Direccion</th>
               <th>Cobertura Medica</th>
               <th>Accion</th>

            </thead>
              @foreach ($paciente as $pa)
                @if($pa->alta==false)
                <tr>
                 <td>{{$pa->rut}}</td>
                 <td>{{$pa->Nombre}} {{$pa->Paterno}} {{$pa->Materno}}</td>
                 <td>{{$pa->Telefono_Casa}}</td>
                 <td>{{$pa->Calle}} {{$pa->Numero_Calle}}</td>
                 <td>{{$pa->Cobertura_Medica}}</td>
                 <td>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{$pa->rut}}">Editar</button>
                   <!--<a class="btn btn-success btn-xs"  href="{{route('Paciente.edit',$pa->rut)}}">Editar</a>-->
                   <a class="btn btn-danger btn-xs"  href="{{url('/Paciente/alta/'.$pa->rut)}}">Dar Alta</a>

                   <div id="{{$pa->rut}}" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                       <div class="container" style="max-width:180%; margin-left:-40%; margin-top:10%;">

                          {!!Form::model($pa,['route'=>['Paciente.update',$pa->rut],'method'=>'PUT','class'=>'well form-horizontal','id'=>'contact_form'])!!}
                         <fieldset>

                           <legend>Actualizar Paciente
                             <button type="button" class="close" data-dismiss="modal">&times;</button>

                           </legend>

                         <div class="col-sm-12 ">
                           <div class="col-sm-6">
                             <div class="form-group">
                               <label class="col-md-4">Nombre</label>
                               <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input  name="Nombre" value="{{$pa->Nombre}}" class="form-control"  type="text">
                                 </div>
                               </div>
                             </div>

                             <!-- Text input-->

                             <div class="form-group">
                               <label class="col-md-4">Apellido Paterno</label>
                                 <div class="col-md-6 inputGroupContainer">
                                 <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input name="Paterno" value="{{$pa->Paterno}}" class="form-control"  type="text">
                                 </div>
                               </div>
                             </div>

                             <div class="form-group">
                               <label class="col-md-4">Apellido Materno</label>
                                 <div class="col-md-6 inputGroupContainer">
                                 <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input name="Materno" value="{{$pa->Materno}}" class="form-control"  type="text">
                                 </div>
                               </div>
                             </div>

                             <div class="form-group">
                               <label class="col-md-4">Genero</label>
                                <div class="col-md-6 inputGroupContainer">
                                 <div class="input-group">
                                     <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                               <input name="Genero" value="{{$pa->Genero}}" class="form-control" type="text">
                                 </div>
                               </div>
                             </div>


                             <div class="form-group">
                               <label class="col-md-4">Fecha Nacimiento</label>
                                <div class="col-md-6 inputGroupContainer">
                                  <div class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                      <input type="text" class="form-control datepicker" name="Fecha_Nacimiento" value="{{$pa->Fecha_Nacimiento}}">
                                  </div>
                               </div>
                             </div>

                             <!-- Text input-->
                             <div class="form-group">
                               <label class="col-md-4">E-Mail</label>
                                 <div class="col-md-6 inputGroupContainer">
                                 <div class="input-group">
                                     <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                               <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" placeholder="">
                                 </div>
                               </div>
                             </div>

                           </div>

                         <div class="col-sm-6">

                           <!-- Text input-->

                           <div class="form-group">
                             <label class="col-md-4">Telefono Fijo</label>
                               <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                   <input name="Telefono_Casa" value="{{$pa->Telefono_Casa}}" class="form-control" type="text">
                               </div>
                             </div>
                           </div>

                           <div class="form-group">
                             <label class="col-md-4">Telefono Movil</label>
                               <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                   <input name="Telefono_Movil" value="{{$pa->Telefono_Movil}}" class="form-control" type="text">
                               </div>
                             </div>
                           </div>

                           <!-- Text input-->

                           <div class="form-group">
                             <label class="col-md-4">Calle</label>
                               <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                             <input name="Calle" value="{{$pa->Calle}}" class="form-control" type="text">
                               </div>
                             </div>
                           </div>

                           <!-- Text input-->

                           <div class="form-group">
                             <label class="col-md-4">Numero Calle</label>
                               <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                             <input name="Numero_Calle" value="{{$pa->Numero_Calle}}" class="form-control"  type="text">
                               </div>
                             </div>
                           </div>



                           <!-- Text input-->
                           <div class="form-group">
                             <label class="col-md-4">Region</label>
                              <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                             <input name="Region" value="{{$pa->Region}}" class="form-control" type="text">
                               </div>
                             </div>
                           </div>

                           <div class="form-group">
                             <label class="col-md-4">Comuna</label>
                              <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                             <input name="Comuna" value="{{$pa->Comuna}}" class="form-control" type="text">
                               </div>
                             </div>
                           </div>

                           <div class="form-group">
                             <label class="col-md-4">Cobertura Medica</label>
                              <div class="col-md-6 inputGroupContainer">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                             <input name="Cobertura_Medica" value="{{$pa->Cobertura_Medica}}" class="form-control" type="text">
                               </div>
                             </div>
                           </div>

                         </div>

                         </div>
                         <div class="form-group col-md-6" style="margin-left: 10px;">
                           {!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','class'=>'btn btn-success '])!!}
                           {!!Form::close()!!}
                         </div>
                         </fieldset>
                       </div>
                     </div>
                   </div>
                 </td>
                </tr>
                @endif
              @endforeach
          </table>
        </div>
      </div>

      <div class="panel panel-warning margen" id="2" style="display:none;">

        <div class="panel-heading" >
          <b>Pacientes Con Alta</b>
          <button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#myModal">Ingresar</button>
        </div>
          <div class="panel-body">
            <table class="table stripe compact " id="myTable2"  >
              <thead>
                 <th>Rut</th>
                 <th>Nombre</th>
                 <th>Telefono</th>
                 <th>Direccion</th>
                 <th>Cobertura Medica</th>
                 <th>Accion</th>

              </thead>
                @foreach ($paciente as $pa)
                  @if($pa->alta==true)
                  <tr>
                   <td>{{$pa->rut}}</td>
                   <td>{{$pa->Nombre}} {{$pa->Paterno}} {{$pa->Materno}}</td>
                   <td>{{$pa->Telefono_Casa}}</td>
                   <td>{{$pa->Calle}} {{$pa->Numero_Calle}}</td>
                   <td>{{$pa->Cobertura_Medica}}</td>
                   <td>

                     <a class="btn btn-success btn-xs"  href="{{url('/Paciente/alta/'.$pa->rut)}}">Ingresar Nuevamente</a>


                   </td>
                  </tr>
                  @endif
                @endforeach
            </table>
          </div>
        </div>



      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="container" style="max-width:180%; margin-left:-40%; margin-top:10%;">
            {!!Form::open(['route'=>'Paciente.store','method'=>'POST','class'=>'well form-horizontal','id'=>'contact_form'])!!}
            <fieldset>

            <!-- Form Name -->
            <legend>Ingresar Paciente
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </legend>


            <!-- Text input-->

            <div class="col-sm-12 ">
              <div class="col-sm-6">
                <div class="form-group" >
                  <label class="col-md-4">Rut</label>
                   <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                  <input name="rut" placeholder="12.345.678-9" class="form-control" type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4">Nombre</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="Nombre" placeholder="Nombre" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4">Apellido Paterno</label>
                    <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="Paterno" placeholder="Paterno" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4">Apellido Materno</label>
                    <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="Materno" placeholder="Materno" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4">Genero</label>
                   <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                  <input name="Genero" placeholder="Femenino/Masculino" class="form-control" type="text">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-md-4">Fecha Nacimiento</label>
                   <div class="col-md-6 inputGroupContainer">
                     <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                         <input type="text" class="form-control datepicker" name="Fecha_Nacimiento">
                     </div>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4">E-Mail</label>
                    <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

              </div>


            <div class="col-sm-6">

              <!-- Text input-->

              <div class="form-group">
                <label class="col-md-4">Telefono Fijo</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                      <input name="Telefono_Casa" placeholder="" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Telefono Movil</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                      <input name="Telefono_Movil" placeholder="" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <!-- Text input-->

              <div class="form-group">
                <label class="col-md-4">Calle</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="Calle" placeholder="Calle" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <!-- Text input-->

              <div class="form-group">
                <label class="col-md-4">Numero Calle</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="Numero_Calle" placeholder="#12345" class="form-control"  type="text">
                  </div>
                </div>
              </div>



              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4">Region</label>
                 <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="Region" placeholder="Ciudad" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Comuna</label>
                 <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="Comuna" placeholder="Comuna" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Cobertura Medica</label>
                 <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                <input name="Cobertura_Medica" placeholder="" class="form-control" type="text">
                  </div>
                </div>
              </div>

            </div>

            </div>
            <div class="form-group col-md-6" style="margin-left: 10px;">
              {!!form::submit('Ingresar',['name'=>'grabar','id'=>'grabar','class'=>'btn btn-success '])!!}
              {!!Form::close()!!}
            </div>
            </fieldset>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-delete" tabIndex="-1">

     <form id="form" action="" method="post">
       <div class="form-group">
         <input type="hidden" name="_method" value="put" />
         <label class="col-md-4">Telefono Fijo</label>
           <div class="col-md-6 inputGroupContainer">
           <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
               <input id="tele" name="Telefono_Casa" value="" class="form-control" type="text">
           </div>
         </div>
       </div>

       <button type="submit">Save</button>

     </form>


</div>



      <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
      <script>
          $('.datepicker').datepicker({
              format: "dd/mm/yyyy",
              language: "es",
              startDate: '-100y',
              endDate:   '0d',
              autoclose: true
          });


          $(document).ready(function() {
              $('#myTable1').DataTable( {
                  "language": {
                      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                  }
              } );
          } );
          $(document).ready(function() {
              $('#myTable2').DataTable( {
                  "language": {
                      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                  }
              } );
          } );

          $(document).on("click", function(e){
              if($(e.target).is("#paciente1")){
                $("#2").show();
                $("#1").hide();

              }
          });

          $(document).on("click", function(e){
              if($(e.target).is("#paciente2")){
                $("#2").hide();
                $("#1").show();

              }
          });


      </script>


  </body>

</html>
@endsection
