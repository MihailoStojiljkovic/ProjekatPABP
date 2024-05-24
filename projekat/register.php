<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href=".css/style.css">
    <title>Register page</title>
</head>


<body>
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">

            <div class="card text-white bg-dark">
                <div class="card-header">Register page</div>
                <div class="card-body">
                    <p class="card-text">

                        <form action="php/register.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="ime">Ime</label>
                                <input type="text" class="form-control" id="ime" name="ime" placeholder="Unesite ime">
<br>
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime</label>
                    <br>
                    <input type="text" class="form-control" id="prezime"
name="prezime" placeholder="Unesite prezime">
<br>
                </div>
                <div class="form-group">
                    <label for="email">Email adresa</label>
                    <br>
                    <input type="email" class="form-control" id="email"
name="email" placeholder="Unesite email">
<br>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" class="form-control"
id="lozinka" name="password" placeholder="Unesite lozinku">

                </div>
                <br>
                <div class="form-group">
                    <label for="passwordre">Password-re</label>
                    <br>
                    <input type="password" class="form-control"
id="lozinka" name="passwordre" placeholder="Unesite lozinku opet">

                </div>
                <br>
                <div class="form-group">
                    <label for="about">O sebi</label>
                    <textarea class="form-control" name="about" rows="3"></textarea>
                </div> 
                <br>   
                <button type="submit" class="btn btn-primary">Registruj 
se</button>
            </form>
            <div class="text-center mt-3">
                <a href="index.php">Već imate nalog? Prijavite se</a>
            </div>
            <div class="card-footer">
                <?php
                    
                    if(isset($_REQUEST["error"])){
                        if($_REQUEST["error"] == 1){

                        
                        echo '<div class="alert alert-danger" role="alert">';
                            echo 'Sifre se ne poklapaju!';
                        echo '</div>'; 
                    }
                    else if($_REQUEST["error"]==2){
                        echo '<div class="alert alert-danger" role="alert">';
                            echo 'Korisnik sa ovom email adresom vec postoji!';
                        echo '</div>';

                    } 

                }
                
                ?>
            </div>

    </div>
    <div class="col-2">
                </div>
                </div>
</div>
<style>
.card {
margin: 0 auto;
/* Centriranje kartice */
max-width: 580px;
/* Maksimalna širina kartice */
}
body{
    background-color : grey;
}
</style>




 
    
</body>
</html>