@extends('layouts.app')

@section('title','Ficha del Paciente')
@section('content')

<head>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      {!!Html::style('css/micss.css')!!}
      <meta charset="utf-8" />
      <title>Fechas</title>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Odontograma de {{$paciente->Nombre}} {{$paciente->Paterno}}</li>
      <li class="pull-right"><a href="/Ficha/{{$paciente->rut}}/Odontograma" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
   </ol>


<div class="row margen" style="background-color:white">
<div class="page-header " style="margin-right:15%;"  >
    <h1>Pieza {{$num}} <small></small></h1>
  </div>
  <div  style="max-height: 250px; margin-right:15%;margin-bottom:5%;">
 {!!Form::open(['route'=>['Odontograma.editarProblema',$prob->Problema_id],'method'=>'PUT'])!!}

         <div>

           {{Form::hidden('Problema_id',$id2)}}
         </div>
          <div class="col-sm-6">
            {{Form::label($probN[1])}}
            {{Form::hidden($probN[1],0)}}
            {{Form::checkbox($probN[1],null,$prob->Lesion_de_caries_ICDAS_3_a_6) }}
          </div>

          <div class="col-sm-6">
            {{Form::label($probN[2])}}
            {{Form::hidden($probN[2],0)}}
            {{Form::checkbox($probN[2],null,$prob->Lesion_de_caries_ICDAS_1_y_2) }}
          </div>

          <div class="col-sm-6">
            {{Form::label($probN[3])}}
            {{Form::hidden($probN[3],0)}}
            {{Form::checkbox($probN[3],null,$prob->Ausente) }}
          </div>

          <div class="col-sm-6">
            {{Form::label($probN[4])}}
            {{Form::hidden($probN[4],0)}}
            {{Form::checkbox($probN[4],null,$prob->Indicacion_exodoncia) }}
          </div>

          <div class="col-sm-6">
            {{Form::label($probN[5])}}
            {{Form::hidden($probN[5],0)}}
            {{Form::checkbox($probN[5],null,$prob->Obturacion) }}
          </div>
          <div class="col-sm-6">
            {{Form::label($probN[6])}}
            {{Form::hidden($probN[6],0)}}
            {{Form::checkbox($probN[6],null,$prob->Obturacion_con_caries) }}
          </div>

          <div class="col-sm-6">
            {{Form::label($probN[7])}}
            {{Form::hidden($probN[7],0)}}
            {{Form::checkbox($probN[7],null,$prob->Obturacion_deficiente) }}
          </div>

          <div class="col-sm-6">

            {{Form::label($probN[8])}}
            {{Form::hidden($probN[8],0)}}
            {{Form::checkbox($probN[8],null,$prob->Sellante) }}
          </div>

          <div class="col-sm-6">

            {{Form::label($probN[9])}}
            {{Form::hidden($probN[9],0)}}
            {{Form::checkbox($probN[9],null,$prob->Problema_9) }}
          </div>
          <div class="col-sm-6">

            {{Form::label($probN[10])}}
            {{Form::hidden($probN[10],0)}}
            {{Form::checkbox($probN[10],null,$prob->Problema_10) }}
          </div>
          <div class="col-sm-6">

            {{Form::label($probN[11])}}
            {{Form::hidden($probN[11],0)}}
            {{Form::checkbox($probN[11],null,$prob->Problema_11) }}
          </div>
          <div class="col-sm-6">

            {{Form::label($probN[12])}}
            {{Form::hidden($probN[12],0)}}
            {{Form::checkbox($probN[12],null,$prob->Problema_12) }}
          </div>
          <div class="col-sm-6">

            {{Form::label($probN[13])}}
            {{Form::hidden($probN[13],0)}}
            {{Form::checkbox($probN[13],null,$prob->Problema_13) }}
          </div>
          <div class="col-sm-6">

            {{Form::label($probN[14])}}
            {{Form::hidden($probN[14],0)}}
            {{Form::checkbox($probN[14],null,$prob->Problema_14) }}
          </div>








  </div>
  <div class="col-sm-6" style="margin-top:3%; margin-bottom:3%;">
  {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-10'])!!}
</div>
  {!! Form::close() !!}
  <div class="col-sm-6" style="margin-top:3%; margin-bottom:3%;">



</div>

@endsection
