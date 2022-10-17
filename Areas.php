<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Areas</title>
</head>
<body>
    <div class='container'>
        <form action="Areas/calcularareas.php" method="post">
            <label> Base</label>
            <input type="text" name="base">
            <label> Altura</label>
            <input type="text" name="altura">
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>