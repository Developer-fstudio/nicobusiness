<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::find(1);
        return view('empresa.index')->with('empresa',$empresa);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $empresa = Empresa::find($empresa->id);

        $empresa->name = $request->get('name');
        $empresa->email = $request->get('email');
        $empresa->NIF = $request->get('NIF');
        if ($request->get('IsTwilioActive')==='on') {
            $empresa->IsTwilioActive = 1;
        }else {
            $empresa->IsTwilioActive = 0;
        }
        if ($request->get('IsAlticeActive')==='on') {
            $empresa->IsAlticeActive = 1;
        }else {
            $empresa->IsAlticeActive = 0;
        }
        $empresa->horaMsgAniversario = $request->get('horaMsgAniversario');
        $empresa->MsgAniversario = $request->get('MsgAniversario');
        $empresa->TwilioAccountID = $request->get('TwilioAccountID');
        $empresa->TwilioAccountSecret = $request->get('TwilioAccountSecret');
        $empresa->TwilioAccountPhone = $request->get('TwilioAccountPhone');
        $empresa->AlticeAccountID = $request->get('AlticeAccountID');
        $empresa->AlticeAccountSecret = $request->get('AlticeAccountSecret');
        $empresa->AlticeUrlApi = $request->get('AlticeUrlApi');
        $empresa->save();

        return redirect('/empresa');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
