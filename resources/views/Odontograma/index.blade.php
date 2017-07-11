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

<ol class="breadcrumb margen ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="pull-right"><a href="/Ficha/{{$paciente->rut}}" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     <li class="active">Odontograma de {{$paciente->Nombre}} {{$paciente->Paterno}} </li>
</ol>


<div class="row margen" style="background-color:white">
    <div class="col-sm-12 "  >
      <h1>Odontograma<small></small></h1>

      <div class="col-sm-3" >
        <div class="col-sm-3">
          <div class="panel-heading"> <b>18</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza18']}}"><img  src={{ URL::asset("images/18.png")}}></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>17</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza17']}}"><img  src={{ URL::asset("images/17.png")}}></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>16</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza16']}}"><img  src={{ URL::asset("images/16.png")}}></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>15</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza15']}}"><img  src={{ URL::asset("images/15.png")}}></a>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">
          <div class="panel-heading"> <b>14</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza14']}}"><img  src={{ URL::asset("images/14.png")}}></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>13</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza13']}}"><img  src={{ URL::asset("images/13.png")}}></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>12</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza12']}}"><img  src={{ URL::asset("images/12.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>11</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza11']}}"><img  src={{ URL::asset("images/11.png")}}></a>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">
          <div class="panel-heading"> <b>21</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza21']}}"><img  src={{ URL::asset("images/21.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>22</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza22']}}"><img  src={{ URL::asset("images/22.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>23</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza23']}}"><img  src={{ URL::asset("images/23.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>24</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza24']}}"><img  src={{ URL::asset("images/24.png")}}></a>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">
          <div class="panel-heading"> <b>25</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza25']}}"><img  src={{ URL::asset("images/25.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>26</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza26']}}"><img  src={{ URL::asset("images/26.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>27</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza27']}}"><img  src={{ URL::asset("images/27.png")}}></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>28</b> </div>
          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza28']}}"><img  src={{ URL::asset("images/28.png")}}></a>

        </div>
      </div>










    </div>

    <div class="col-sm-12" style="margin-bottom:5%;" id="1" >


      <div class="col-sm-3" >
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza48']}}"><img  src={{ URL::asset("images/48.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 25px;"> <b>48</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza47']}}"><img  src={{ URL::asset("images/47.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>47</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza46']}}"><img  src={{ URL::asset("images/46.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 8px;"> <b>46</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza45']}}"><img  src={{ URL::asset("images/45.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>45</b> </div>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza44']}}"><img  src={{ URL::asset("images/44.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>44</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza43']}}"><img  src={{ URL::asset("images/43.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 8px;"> <b>43</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza42']}}"><img  src={{ URL::asset("images/42.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>42</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza41']}}"><img  src={{ URL::asset("images/41.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 20px;"> <b>41</b> </div>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza31']}}"><img  src={{ URL::asset("images/31.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 15px;"> <b>31</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza32']}}"><img  src={{ URL::asset("images/32.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>32</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza33']}}"><img  src={{ URL::asset("images/33.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 10px;"> <b>33</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza34']}}"><img  src={{ URL::asset("images/34.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 15px;"> <b>34</b> </div>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza35']}}"><img  src={{ URL::asset("images/35.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 10px;"> <b>35</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza36']}}"><img  src={{ URL::asset("images/36.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 15px;"> <b>36</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza37']}}"><img  src={{ URL::asset("images/37.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 22px;"> <b>37</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza38']}}"><img  src={{ URL::asset("images/38.png")}}></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 22px;" > <b>38</b> </div>
        </div>
      </div>



      <!--<input  type="image" src='images/31.png' name="31"  data-id="31" data-toggle="modal" data-target="#myModal" class="view-admin" />-->


    </div>

    
  </div>










<script>
    var adminid;
    $(document).on("click", ".view-admin", function() {
        adminid = $(this).attr('data-id');
        $("#showid").text(adminid);
        $('#myModal').modal('show');
    });
</script>




@endsection
