<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    <title>Login page</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card text-white bg-dark">
                <div class="card-header">Login page</div>    
                <div class="card-body">
                    <p class="card-text">

                        <form action="php/log.php" method="post">
                            <div class="form-group">
                                <label for="email">Email adresa</label>
                    
                                <input type="email" class="form-control" name="email" placeholder="Unesite email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Lozinka</label>
                                <input type="password" class="form-control" name="password" placeholder="Unesite lozinku"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Prijavi se</button>
                        
                        <div class="text-center mt-3">
                        <a href="register.php">Nemate nalog? Registrujte se</a>
                        </div>
                        </form>
                    </p>    
                </div>
                <div class="card-footer">

                <?php

if(isset($_REQUEST["success"])){
    if($_REQUEST["success"] == 1){
        echo '<div class="alert alert-success" role="alert">';
            echo 'Uspesno ste kreirali nalog!';
        echo '</div>';
    }
}
if(isset($_REQUEST["error"])){
    if($_REQUEST["error"] == 1){
        echo '<div class="alert alert-danger" role="alert">';
            echo 'Molimo vas proverite vase podatke za pristup!';
        echo '</div>';
    }
    else if($_REQUEST["error"] == 2){
        echo '<div class="alert alert-danger" role="alert">';
            echo 'Potrebno je da se prijavite!';
        echo '</div>';
    }
}

?>

                
            </div>
        </div>
       
    </div>    
</div>
<style>
.card {
margin: 0 auto;
/* Centriranje kartice */
margin-top: 200px;
/* Podešavanje margine od vrha */
max-width: 400px;
/* Maksimalna širina kartice */

}
body{
    background-color : grey;
}
</style>

</body>
</html>