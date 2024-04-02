<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> <section class="form">
<h1 class="titolo">compila un modulo    </h1>
    <form 
    class="form-contain" action="login.php" method="POST">
        <label for="nome"> nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email"> cognome</label>
        <input type="text" name="cognome" id="cogonome" >
        <input type="submit" value="invia modulo" class="submit">
    </form>
</section>
</body>
</html>