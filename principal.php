<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Apu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body bs-body-color>
    <div class="text-bg-primary p-3 text-center">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <h6>Formulario Jose Luis</h6>
                    <hr>
                    <h1>PHP BÁSICO</h1>
                    <ul>
                        <li>1. Operaciones con String</li>
                        <li>2. Operadores Aritméticos</li>
                        <li>3. Tipos de datos</li>
                        <li>4. Operaciones con Array</li>
                        <li>5. Condicionales</li>
                        <li>6. Salir</li>
                    </ul>
                    <hr>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="numero" class="form-label">Ingrese un número</label>
                            <input type="number" name="numero" class="form-control" id="numero" placeholder="Ingrese un número">
                            <div id="helpText" class="form-text">Jose Luis Bernedo Laura</div>
                        </div>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </form>
                    <hr>
                    <?php
                    // Incluir la clase OperadoresLogicos
                    include "./OperadoresLogicos.php";

                    // Verificar si se envió un valor mediante POST
                    if (isset($_POST["numero"])) {
                        echo "<p>Número ingresado: " . htmlspecialchars($_POST["numero"]) . "</p>";
                    } else {
                        echo "<p>No se ha ingresado ningún número.</p>";
                    }

                    // Instanciar y usar la clase OperadoresLogicos
                    if (class_exists('OperadoresLogicos')) {
                        $ol = new OperadoresLogicos();
                        $ol->operadores();
                    } else {
                        echo "<p>No se encontró la clase OperadoresLogicos.</p>";
                    }
                    ?>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
