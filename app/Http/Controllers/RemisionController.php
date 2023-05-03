<?php

namespace App\Http\Controllers;

use App\Models\Remision;
use Illuminate\Http\Request;
use App\Models\NumeroRemision;
use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf;

class RemisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $dato=$req->req;
        return view('remisionmaterial.index',compact('dato'));
    }

    public function Remision(Request $req)
    {
        $dato=$req->req;
        return view('remisionmaterial.create',compact('dato'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remision  $remision
     * @return \Illuminate\Http\Response
     */
    public function show($remision)
    {
        $remisiones=Remision::where('numRemision',$remision)
                    ->where('departamento',$_GET['dato'])
                    ->get();
        return view('visualizarremision',compact('remisiones'));
    }
    public function pdfremision($remision)
    {
        $remisiones=Remision::where('numRemision',$remision)
                            ->where('departamento',$_GET['dato'])
                            ->get();
        $pdf = PDF::loadView('pdfremision', compact('remisiones'));
        return $pdf->stream('remision.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remision  $remision
     * @return \Illuminate\Http\Response
     */
    public function edit($remision)
    {
        $remisiones=Remision::where('numRemision',$remision)
                            ->where('departamento',$_GET['dato'])
                            ->get();
        return view('devolucionremision',compact('remisiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Remision  $remision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $remision)
    {
        $cantidadremision=Remision::where('numRemision',$remision)
                                    ->where('departamento',$_GET['dato'])
                                    ->count();
        for($i=1;$i<=$cantidadremision;$i++){
            $id=$request->input("id$i");
            $fechadevolucion=$request->input("fechadevolucion$i");
            $detalledevolucion=$request->input("detalleproducto$i");
            Remision::where('id',$id)->update([
                'cantidad'=>0,
                'fechadevolucion'=>$fechadevolucion,
                'detalledevolucion'=>$detalledevolucion
            ]);
        }
        return redirect()->route('remisionmaterial.create', ['req' => $_GET['dato']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remision  $remision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remision $remision)
    {
        //
    }
}
