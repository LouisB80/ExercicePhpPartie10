<?php
$firstName = '';
$lastName = '';
$year = '';
$society = '';
if(isset($_POST['lastName'], $_POST['firstName'], $_POST['year'], $_POST['society']))
{
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $year = htmlspecialchars(trim($_POST['year']));
    $society = htmlspecialchars(trim($_POST['society']));   
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Tp 2 Partie 10 PHP</title>
    </head>
    <body>
        <h1>Tp 2 Partie 10 PHP</h1>
        <div class="container bg-secondary">
            <form action = "index.php" method = "POST" class = "m-4">
                <!--Civilité-->
                <div class = "form-group">
                    <label for = "gender">Civilité:</label>
                    <select name = "gender" id = "gender" class = "form-control">
                        <option> -- Séléctionnez --</option>    
                        <option value="1">Monsieur</option>  
                        <option value="2">Madame</option>  
                    </select>
                </div>
                <!--Nom-->
                <div class = "form-group">
                    <label for = "lastName">Nom:</label>
                    <input type = "text" class = "form-control" name="lastName" placeholder = "Ex: Doe" id = "lastName" value="<?= $lastName ?>" required />
                </div>
                <!--Prénom-->
                <div class = "form-group">
                    <label for = "firstName">Prénom:</label>
                    <input type = "text" class = "form-control" name="firstName" placeholder = "Ex: John" id = "firstName" value="<?= $firstName ?>" required />
                </div>
                <!--Age-->
                <div class = "form-group">
                    <label for = "year">Age:</label>
                    <input type = "text" class = "form-control" name="year" id = "year" value="<?= $year ?>" required />
                </div>
                <!--Société-->
                <div class="form-group">
                    <label for="society">Société</label>
                    <input type="text" class="form-control" name="society" placeholder="Ex: La Manu" id="society" value="<?= $society ?>" required />
                </div>
                <!--//Valider-->                
                <button type = "submit" class = "btn btn-success">Valider l'inscription</button>
            </form>
            <?php if (preg_match('#^[A-Z][a-zàéèêëîïôöûüùç.]+([ -][A-Z][a-zàéèêëîïôöûüùç.])*#', $lastName) && preg_match('#^[A-Z][a-zàéèêëîïôöûüùç.]+([ -][A-Z][a-zàéèêëîïôöûüùç.])*#', $firstName) && preg_match('#^[1-9]{1,2}#', $year)) { ?>
                <p>Merci, votre enregistration a bien été prise en compte</p>
            <?php } else { ?>
                <p>Une erreur a été détécté</p>
            <?php } ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
