<?php
    if(isset($_GET['link']) && isset($_GET['ext'])){
        $link = $_GET['link'];
        $ext = $_GET['ext'];

        $data = file_get_contents($link);

        file_put_contents($ext, $data);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="url" name="link" id="">
        <input type="text" name="ext" id="">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>