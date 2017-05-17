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

  <ol class="breadcrumb margenOl ">
       <li class="pull-left"></li>
       <li class="active">  </li>
       <li class="pull-right"><a href="{{route('Paciente.index')}}" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>
  <body>

    <div class="panel panel-default margen">
      <div class="panel-heading" > {{$paciente->Nombre}} {{$paciente->Paterno}} {{$paciente->Materno}} {{$paciente->rut}}  </div>
        <div class="panel-body">
          <a href="{{route('Ficha.show',$paciente->rut)}}" class="btn btn-primary btn-xs"> <b>Ficha</b></a></li>
          <a href="#" class="btn btn-primary btn-xs"> <b>Odontograma</b></a></li>
        </div>
      </div>

  </body>
</html>
@endsection
