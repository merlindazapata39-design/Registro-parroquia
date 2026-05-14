<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Persona;

Route::get('/', function () { return view('index'); });

Route::get('/registrar', function () { return view('create_persona'); });

Route::post('/guardar-persona', function (Request $request) {
    Persona::create($request->all());
    return redirect('/')->with('success', 'Persona guardada');
});