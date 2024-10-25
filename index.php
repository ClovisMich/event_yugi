<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Evènement yugioh</title>
</head>
<body class="bg-primary-subtle">
    <header  class="d-flex justify-content-center rounded">
        <h1 id="title" class="display-1 text-secondary-emphasis p-3 m-2 bg-info-subtle"> Enregistrement des points </h1>
    </header>

    <section id="infos" class=" m-5">
    
        <form action="" method="get" class="d-flex flex-column align-items-center ">
            <div id="infos_name" class="m-2">
                <label for="name" class=""> <span id="form_text">Entrez votre nom et prénom (dans cet ordre)</span></label>
                <input name="name" id="name" value="" class="form-control"/> 
            </div>
            <div id="infos_score" class="m-2">
                
                    <h3 class="d-flex justify-content-center" id="form_text"> Entrer votre résultat</h3>

                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="victory" id="victory" value="3">
                        <label class="form-check-label" for="victory">Victoire</label>
                    </div>                   
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="victory" id="draw" value="1">
                        <label class="form-check-label" for="draw">Egalité</label>
                    </div>                   
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="victory" id="loss" value="0">
                        <label class="form-check-label" for="loss">Défaite</label>
                    </div>                   
                
            </div>
            <div id="infos_deck" class="m-2">
                <label for="deck" class=""> <span id="form_text">Entrez le nom du deck utilisé (celui de l'inscription) </span></label>
                <input name="deck" id="deck" value="" class="form-control"/> 
            </div>
        </form>
    
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>