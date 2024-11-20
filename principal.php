<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal apu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body bs-body-color>
    <div class="text-bg-primary p-3"><center></center>
        <div class="container text-center">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <H6>Formulario Jose Luis</H6>
                    <hr>
                    <form method="POST">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <div class="mb-3">
    <label for="numero" class="form-label">Ingrese un numero</label>
    <input type="number" name="numero" class="form-control" id="numero" placeholder="Ingrese un numero">
    <div id="emailHelp" class="form-text">Jose Luis Bernedo Laura</div>
    <button type="submit" class="btn btn-dark">Enviar</button>
  </div>

</form>
                    
                    <hr>
                    <?php
                    // Codigo PHP
                    //echo $_GET["fruta" ] . "</br>";
                    //echo $_GET["precio"];
                    if (isset($_GET["precio"])) {
                        echo $_GET["precio"] . "<br>";
                    } // else{
                    //    echo "No existe la variable PRECIO . <br>";
                    //}

                    if (isset($_GET["fruta"])) {
                        echo $_GET["fruta"] . "<br>";
                    } //else{
                    //    echo "No existe la variable FRUTA" . "<br>";
                    //}

                    echo $_POST["numero"] . "<br>";
                    ?>

                </div>
                <div class="col">




                </div>
            </div>
        </div>

    </div>
</body>

</html>