<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form method POST</title>
</head>
<body>
    <h2>test</h2>
    <h1>Input</h1>
    <form action="2bmet_postproses.php" method="post">
    alamat : <input type="text" name="alamat" size="50">
    <input type="submit" value="simpan">
    </form>
</body>
</html>
<html>
    <head>
        <title> Method POST proses </title>
    </head>
    <body>
    Alamat tanda adalah : 
    <?php echo $_POST["alamat"]?>
    </body>
</html>