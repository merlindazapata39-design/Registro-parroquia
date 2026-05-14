<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Sacerdote;
use App\Models\Acta;
use App\Models\Bautismo;

Route::get('/', function () { return view('index'); });

Route::get('/registrar', function () { return view('create_persona'); });

Route::post('/guardar-persona', function (Request $request) {
    Persona::create($request->all());
    return redirect('/')->with('success', 'Persona guardada');
});

Route::get('/bautismo/nuevo', function () {
    return view('create_bautismo');
});

Route::post('/guardar-bautismo', function (Request $request) {
    $sacerdote = Sacerdote::create([
        'nombre' => $request->nombre_sacerdote,
        'cargo' => $request->cargo_sacerdote,
    ]);

    $acta = Acta::create([
        'nro_serie' => $request->nro_serie,
        'nro_libro' => $request->nro_libro,
        'nro_pagina' => $request->nro_pagina,
        'nro_certificado' => $request->nro_certificado,
        'fecha_registro' => $request->fecha_registro,
        'observaciones' => $request->observaciones,
        'sacerdote_id' => $sacerdote->id,
    ]);

    Bautismo::create([
        'acta_id' => $acta->id,
        'persona_id' => $request->persona_id,
        'fecha_bautizo' => $request->fecha_bautizo,
        'lugar_bautizo' => $request->lugar_bautizo,
        'padrino' => $request->padrino,
        'madrina' => $request->madrina,
    ]);

    return redirect('/')->with('success', 'Bautismo registrado con éxito');
});