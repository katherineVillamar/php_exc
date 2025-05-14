<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obtener datos x teclado</title>
</head>
<style>
    body {
        background-color: lightgray;
        display: grid;
        place-items: center;
    }

    form {
       display: flex;
       flex-direction: column;
        background-color: white;
        border: 2px solid black;
        height: 200px;
        width: 300px;
        text-align: center;
        border-radius: 25%;  
        padding: 20px;
        padding-top: 5%;
}

form input {
  margin-bottom: 20px;
}

    label{
       margin-bottom: 20px;
        padding-top: 5%;
    }

    #btn {
        background-color: cadetblue;
        color: whitesmoke;
    }

    #btn:hover {
        background-color: wheat;
        color: dodgerblue;
    }
</style>

<body>
    <form action="saluda.php">
        <label for="">INGRESE NOMBRE</label>
        <input type="text">
        <input id="btn" type="submit">
    </form>
</body>

</html>
<?php


