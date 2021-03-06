<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container">
        <div style="background-color: #7982EB;">
            <h5 class="card-title d-inline">En Linea: </h5>
            <h5 id="cant" class="d-inline"></h5>
        </div>
        <div style="width: 100%; height: 200px; overflow: scroll;" id="chat">

        </div>
        <input type="text" id="sendMessage" style="width: 80%;">
        <input type="submit" value="enviar" style="width: 18%;" id="btn">
    </div>



    <div class="containter mt-5">
        <label>URL Imagen</label>
        <input type="text" placeholder="URL FOTO" id="url" value="https://i.ytimg.com/vi/8Zk34GQVIKU/hqdefault.jpg">
        <br>
        <label>Nick</label>
        <input type="text" placeholder="UserName" id="userName" value="Desconocido">
    </div>
    <audio id="xyz" src="alertas/notif.mp3" preload="auto"></audio>
    
    <?php var_dump($_SERVER['REMOTE_ADDR']) ?>
</body>

</html>
<script src="app.js"></script>