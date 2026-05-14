<!DOCTYPE html>
<html>
<head>
    <title>Sistema Parroquial</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background-color: #e9ecef; display: flex; }
        .sidebar { width: 250px; background: #2c3e50; color: white; height: 100vh; padding: 20px; }
        .content { flex: 1; padding: 40px; }
        .card-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
        .card { background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: 0.3s; text-decoration: none; color: #333; }
        .card:hover { transform: translateY(-5px); background: #f8f9fa; }
        .card h3 { color: #2980b9; }
        .btn-main { background: #27ae60; color: white; padding: 15px; display: block; text-align: center; border-radius: 8px; text-decoration: none; margin-bottom: 30px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>⛪ Parroquia</h2>
        <hr>
        <p>Usuario: Administrador</p>
    </div>
    <div class="content">
        <h1>Panel de Control</h1>
        
        <a href="/registrar" class="btn-main">REGISTRAR NUEVA PERSONA</a>

        <h3>Asignar Sacramento</h3>
        <div class="card-container">
            <a href="/bautismo/nuevo" class="card">
                <h3>💧 Bautismo</h3>
                <p>Registrar acta y padrinos</p>
            </a>
            <a href="#" class="card">
                <h3>🕊️ Confirmación</h3>
                <p>Libro, folio y partida</p>
            </a>
            <a href="#" class="card">
                <h3>💍 Matrimonio</h3>
                <p>Registro de contrayentes</p>
            </a>
        </div>
    </div>
</body>
</html>