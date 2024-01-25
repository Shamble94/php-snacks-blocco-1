<?php 
if(isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["eta"])){
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $età = $_GET["eta"];
    if (strlen($nome) > 3 && str_contains($email, ".") && str_contains($email, "@") && is_numeric($eta)){
        echo "Accesso Riuscito";
       
    }
    else{
        echo "Accesso Negato";
    }
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
<form action="snack2.php">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Effettua l'accesso</h1>
                </div>

                <div class="col-4 mt-2">
                    <label for="nome">Inserisci il tuo nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                </div>

                <div class="col-4 mt-2">
                    <label for="email">Inserisci la tua email</label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="col-4 mt-2">
                    <label for="eta">Inserisci la tua eta</label>
                    <input type="text" name="eta" class="form-control" placeholder="Eta" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-sm btn-primary mt-2">Invia</button>
        </div>

    </form>
</body>
</html>