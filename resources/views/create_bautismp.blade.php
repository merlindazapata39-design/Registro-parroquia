<!DOCTYPE html>
<html>
<head>
    <title>Registro de Bautismo</title>
    <style>
        body { font-family: sans-serif; background: #f4f7f6; padding: 20px; }
        .form-container { background: white; padding: 30px; border-radius: 12px; max-width: 800px; margin: auto; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .section-title { background: #2c3e50; color: white; padding: 10px; border-radius: 5px; margin-top: 20px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 10px; }
        input, select, textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { background: #2980b9; color: white; border: none; padding: 15px; width: 100%; border-radius: 5px; margin-top: 30px; cursor: pointer; font-size: 18px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>🕊️ Acta de Bautismo</h1>
        <form action="/guardar-bautismo" method="POST">
            @csrf
            
            <div class="section-title">Datos del Acta y Sacerdote</div>
            <div class="grid">
                <input type="text" name="nombre_sacerdote" placeholder="Nombre del Sacerdote" required>
                <input type="text" name="cargo_sacerdote" placeholder="Cargo (Párroco, Vicario...)" required>
                <input type="text" name="nro_serie" placeholder="Nro Serie" required>
                <input type="text" name="nro_libro" placeholder="Nro Libro" required>
                <input type="text" name="nro_pagina" placeholder="Nro Página" required>
                <input type="text" name="nro_certificado" placeholder="Nro Certificado" required>
                <input type="date" name="fecha_registro" required title="Fecha de Registro">
            </div>

            <div class="section-title">Datos del Bautismo</div>
            <div class="grid">
                <select name="persona_id" required>
                    <option value="">Seleccione a la Persona...</option>
                    @foreach(App\Models\Persona::all() as $p)
                        <option value="{{ $p->id }}">{{ $p->nombres }} {{ $p->apellidos }} (CI: {{ $p->ci }})</option>
                    @endforeach
                </select>
                <input type="date" name="fecha_bautizo" required title="Fecha del Bautizo">
                <input type="text" name="lugar_bautizo" placeholder="Lugar del Bautizo" required>
                <input type="text" name="padrino" placeholder="Nombre del Padrino" required>
                <input type="text" name="madrina" placeholder="Nombre de la Madrina">
            </div>
            
            <textarea name="observaciones" placeholder="Observaciones..." style="margin-top:15px; height:60px;"></textarea>

            <button type="submit">GENERAR ACTA DE BAUTISMO</button>
        </form>
    </div>
</body>
</html>