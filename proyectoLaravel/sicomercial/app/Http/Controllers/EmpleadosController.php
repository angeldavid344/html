<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleados::paginate(5);

        return view('empleados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosempleados=request()->all();
        $datosempleados=request()->except('_token');
        // dump($datosempleados);
        // exit;
        empleados::insert($datosempleados);

        if($request->hasFile('Foto')){
            $datosempleados['Foto']=$request->file('Foto')->store('uploads','public');
        }

        return response()->json($datosempleados);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return view('empleados.edit');
        $empleado= Empleados::findOrFail($id);
        return view('empleados.edit',compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosempleados=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $empleado= Empleados::findOrFail($id);

            Storage::delete('public/'.$empleado->Foto);

            $datosempleados['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleados::where('id','=',$id)->update($datosempleados);

        $empleado= Empleados::findOrFail($id);
        return view('empleados.edit',compact('empleado'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleados::destroy($id);
        return redirect('empleados');
    }
}
