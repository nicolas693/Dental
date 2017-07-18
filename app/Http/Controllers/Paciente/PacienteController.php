<?php

namespace App\Http\Controllers\Paciente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente\Paciente;
use App\Odontograma\Odontograma;
use Carbon\Carbon;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente=Paciente::all();


        return view('Paciente.index')->with('paciente',$paciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();
        $input['Fecha_Ingreso']=Carbon::now()->format('d/m/Y');
        $input['alta']=0;

        Paciente::create($input);
        $paciente=Paciente::all();


        return view('Paciente.index')->with('paciente',$paciente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $paciente=Paciente::find($id);
        return view('Paciente.edit')->with('paciente',$paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $pa=Paciente::find($id);
        $input=$request->all();
        $pa->fill($input)->save();
        $paciente=Paciente::all();
          return redirect()->route('Paciente.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('Paciente.index');
    }

    public function alta($id)
    {


        $pa=Paciente::find($id);
        if($pa->alta==false){
            Paciente::where('rut', $id)->update(array('alta' => 1));
        }

        else {
            Paciente::where('rut', $id)->update(array('alta' => 0));
        }
        $pa=Paciente::find($id);
        $pa=$pa->clinica_id;

        return redirect()->route('Paciente.index');
    }

    public function ante($id)
    {
        $paciente=Paciente::find($id);
        $odo=Odontograma::where('Paciente_id','=',$paciente->rut)->first();
        return view('Paciente.ante')->with('paciente',$paciente)->with('odo',$odo);
    }

    public function crearOdo($id)
    {

        dd("aaaaaaaaa");


        return view('Paciente.ante')->with('id',$id);
    }
}
