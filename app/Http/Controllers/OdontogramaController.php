<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Paciente\Paciente;
use App\Odontograma\Odontograma;
use App\Odontograma\Problema;

use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

class OdontogramaController extends Controller
{

  public function index($id)
  {

      $paciente=Paciente::where('rut','=',$id)->first();
      $odonto=Odontograma::where('Paciente_id',$id)->first();
      $ido=$odonto->Odontograma_id;
      $indS=$ido*32;
      $indI=$ido*32 -31 ;
      $pr=Problema::where('Problema_id','<=',$indS)->where('Problema_id','>=',$indI)->get();
      $odonto=$odonto['attributes'];


      return view('Odontograma.index')->with('id',$id)->with('paciente',$paciente)->with('odonto',$odonto)->with('pr',$pr);
  }

  public function crear($id)
  {

    $aa=Odontograma::max('Odontograma_id', 'desc')+1;
    $rut=$id;

    $array=array("Problema_id"=>"1");
    for($i=0;$i<32;$i++){
      Problema::create($array);
    }
    $a=Problema::orderBy('Problema_id', 'desc')->first();
    $pa=Paciente::where('rut',$rut)->firstOrFail();
    $id=$aa;

    $indice=$a->Problema_id-32;
    $odontograma=new Odontograma();
    $odontograma['pieza18']=1+$indice;
    $odontograma['pieza17']=2+$indice;
    $odontograma['pieza16']=3+$indice;
    $odontograma['pieza15']=4+$indice;
    $odontograma['pieza14']=5+$indice;
    $odontograma['pieza13']=6+$indice;
    $odontograma['pieza12']=7+$indice;
    $odontograma['pieza11']=8+$indice;

    $odontograma['pieza21']=9+$indice;
    $odontograma['pieza22']=10+$indice;
    $odontograma['pieza23']=11+$indice;
    $odontograma['pieza24']=12+$indice;
    $odontograma['pieza25']=13+$indice;
    $odontograma['pieza26']=14+$indice;
    $odontograma['pieza27']=15+$indice;
    $odontograma['pieza28']=16+$indice;

    $odontograma['pieza48']=17+$indice;
    $odontograma['pieza47']=18+$indice;
    $odontograma['pieza46']=19+$indice;
    $odontograma['pieza45']=20+$indice;
    $odontograma['pieza44']=21+$indice;
    $odontograma['pieza43']=22+$indice;
    $odontograma['pieza42']=23+$indice;
    $odontograma['pieza41']=24+$indice;

    $odontograma['pieza31']=25+$indice;
    $odontograma['pieza32']=26+$indice;
    $odontograma['pieza33']=27+$indice;
    $odontograma['pieza34']=28+$indice;
    $odontograma['pieza35']=29+$indice;
    $odontograma['pieza36']=30+$indice;
    $odontograma['pieza37']=31+$indice;
    $odontograma['pieza38']=32+$indice;
    $odontograma['Paciente_id']=$rut;
    $odontograma->save();
    return redirect('/Paciente/antecedentes/'.$rut);

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id,$id2)
  {
      $paciente=Paciente::where('rut','=',$id)->first();
      $probN = Schema::getColumnListing('Problema');
      unset($probN[0]);
      unset($probN[1]);
      unset($probN[2]);
      $i=0;
      foreach ($probN as $key => $prob) {
        unset($probN[$key]);
        $probN[intval($key)-2]=$prob;

      }
      $prob=Problema::where('Problema_id','=',$id2)->first();
      $odonto=Odontograma::where('Paciente_id','=',$id)->first();
      $odonto=$odonto['attributes'];
      foreach($odonto as $key => $odo){
        if($odonto[$key]==$id2){
          $num=$key;
        }
      }
      $num=substr($num,5);
      return view('Odontograma.show', array('id'=>$id, 'id2'=>$id2, 'paciente'=>$paciente, 'probN'=>$probN,
    'prob'=>$prob, 'num'=>$num) );
  }

  public function editarProblema(Request $request, $id)
  {
    $pro=Problema::find($id);
    $input=$request->all();
    $i=32;
    $ii=1;
    if(array_key_exists('Problema_id',$input)){
      foreach($input as $key => $mainrow){
          if($input[$key]=="on"){
            $input[$key]=1;
          }
      }
      while($i<$id){
        $ii++;
        $i=$i+32;
      }
    }
    else{
            foreach($input as $key => $mainrow){
                if($input[$key]=="0"){
                  $input[$key]="1";
                }
            }
            foreach($input as $key => $mainrow){
                  if($key=="grabar"){
                    $input[$keyt]="0";
                  }
                $keyt=$key;
            }

    }
    $odo=Odontograma::where('Odontograma_id','=',$ii)->first();
    $pro->fill($input)->save();
    return redirect('/Ficha/'.$odo->Paciente_id.'/Odontograma');
  }


}
