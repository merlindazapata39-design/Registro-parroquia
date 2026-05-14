<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Registro - Parroquia</title>
    <style>
        body { font-family: sans-serif; background: #e9ecef; padding: 40px; }
        .form-card { background: white; padding: 30px; border-radius: 10px; max-width: 500px; margin: auto; shadow: 0 4px 6px rgba(0,0,0,0.1); }
        input, select { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #27ae60; color: white; border: none; padding: 15px; width: 100%; border-radius: 5px; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Registrar Persona</h2>
        <form action="/guardar-persona" method="POST">
            @csrf
            <label>Carnet de Identidad (CI):</label>
            <input type="text" name="ci" required>
            
            <label>Nombres:</label>
            <input type="text" name="nombres" required>
            
            <label>Apellidos:</label>
            <input type="text" name="apellidos" required>
            
            <label>Edad:</label>
            <input type="number" name="edad" required>
            
            <label>Género:</label>
            <select name="genero">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>

            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required>
            
            <label>Lugar de Nacimiento:</label>
            <input type="text" name="lugar_nacimiento" required>

            <label>Nombre del Padre:</label>
            <input type="text" name="nombre_padre">

            <label>Nombre de la Madre:</label>
            <input type="text" name="nombre_madre">
            
            <button type="submit">GUARDAR EN BASE DE DATOS</button>
        </form>
    </div>
</body>
</html>