@extends('layouts.app')
@section('title','Lista de Docentes')
@section('content')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/micss.css') }}" rel="stylesheet">

        <title>Laravel</title>


    </head>
    <body>
      <div class="panel panel-default margen" id="1" >
        <div class="panel-heading" >  </div>
          <div class="panel-body">
            <a href="{{route('Paciente.index')}}" class="btn btn-info" role="button">Pacientes</a>
          </div>
        </div>

    </body>
</html>
@endsection
