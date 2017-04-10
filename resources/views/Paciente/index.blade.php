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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
  </head>
  <body>
    <div class="panel panel-default margen" id="1">
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
               <th>Accion</th>
            </thead>
              @foreach ($paciente as $pa)
                <tr>
                 <td>{{$pa->rut}}</td>
                 <td>{{$pa->Nombre}} {{$pa->Paterno}} {{$pa->Materno}}</td>
                 <td>{{$pa->Telefono_Casa}}</td>
                 <td>
                   <a href={{route('Paciente.edit',$pa->rut)}} class="btn btn-info" role="button">Editar</a>
                 </td>
                </tr>
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
            <legend>Ingresar Paciente</legend>

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
          <script>
              $('.datepicker').datepicker({
                  format: "dd/mm/yyyy",
                  language: "es",
                  startDate: '-1w',
                  endDate:   '0d',
                  autoclose: true
              });
          </script>

        </div>
      </div>

  </body>
</html>
@endsection
