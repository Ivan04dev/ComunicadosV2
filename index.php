<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicados</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <h1 class="display-4">Comunicados</h1>
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <label for="titulo">Titulo: </label>
                <input class="form-control mb-4" type="text" placeholder="PRUEBA" id="titulo" name="titulo">

                <label for="descripcion">Descripción: </label>
                <input class="form-control mb-4" type="text" placeholder="DESCRIBE EL CONTENIDO" id="descripcion" name="descripcion">

                <button class="btn btn-success" id="botonArchivo"><i class="bi bi-plus-circle"></i></button>
                <br><br>

                <label for="portada">Portada</label>
                <input type="file" name="portada" id="portada">

                <label for="archivos">Archivos</label>
                <input type="file" name="archivos" id="archivos">

                <br><br>


                <h3 for="enviarA">Enviar a:</h3>

                <br>
                
                <div class="mt-4">
                    <h5 for="puesto">Puesto: </h5> 
                    <input type="checkbox" name="puesto" id="ejecutivoATC" value="ejecutivoATC" onclick="handleCheckboxChange(this)">
                    <label for="ejecutivoATC">Ejecutivo ATC</label>

                    <input type="checkbox" name="puesto" id="ejecutivoSRATC" value="ejecutivoSRATC" onclick="handleCheckboxChange(this)">
                    <label for="ejecutivoSRATC">Ejecutivo Sr ATC</label>

                    <input type="checkbox" name="puesto" id="jefeATC" value="jefeATC" onclick="handleCheckboxChange(this)">
                    <label for="jefeATC">Jefe ATC</label>

                    <input type="checkbox" name="puesto" id="jefeRegionalATC" value="jefeRegionalATC" onclick="handleCheckboxChange(this)"">
                    <label for="jefeRegionalATC">Jefe Regional ATC</label>

                    <input type="checkbox" name="puesto" id="gerenteATC" value="gerenteATC" onclick="handleCheckboxChange(this)">
                    <label for="gerenteATC">Gerente ATC</label>
                </div>

                <!-- Marca -->
                <div class="mt-4">
                    <h5 for="puesto">Marca: </h5>

                    <input type="checkbox" name="izzi" id="izzi">
                    <label for="izzi">izzi</label>

                    <input type="checkbox" name="wizz" id="wizz">
                    <label for="wizz">wizz</label>

                    <input type="checkbox" name="wizzplus" id="wizzplus">
                    <label for="wizzplus">wizz plus</label>

                    

                    <!-- Ver Ciudad -->
                    <div class="mt-4">
                        <input type="checkbox" name="ciudades" id="ciudades">
                        <label for="ciudades">Ver Ciudades</label>
                    </div>
                </div>

                <!-- Divisiones -->
                <div class="divisiones">
                        
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>   
    <!-- <script src="js/app.js"></script> -->
    <script src="js/app2.js"></script>
    <!-- <script src="js/ap3.js"></script> -->
</body>
</html>