<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Calculadora</title>
</head>
<body>
    <h1>Mi calculadora con PHP</h1>
    <form action="operaciones.php" method="post">
        <select name="operador" class="form-select" aria-label="Default select example">
            <option value="+">suma</opcion>
            <option value="-">resta</opcion>
            <option value="*">multiplica</opcion>
            <option value="/">divide</opcion>
        </select>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numero 1</label>
            <input type="text" class="form-control" name="numero1" placeholder="captura numero 1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numero 2</label>
            <input type="text" class="form-control" name="numero2" placeholder="captura numero 2">
        </div>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>