<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Correction</title>
</head>

<body>

    <?php

    if (isset($_POST["correction"])) {
        // validation :
        // obligatoire + types + trim + securité

        $note = $note1 = $note2 = $note3 = 0;
        $resultat = "";

        if ($_POST["q1"] == "img") {
            $note1 = 3;
        }

        if ($_POST["q2"] == "decorer") {
            $note2 = 3;
        }

        if ($_POST["q3"] == "statique") {
            $note3 = 4;
        }

        $note = $note1 + $note2 + $note3;

        if ($note < 5) {
            $resultat = "Désolé, vous n'avez pas réussie.";
        } else if ($note >= 5 && $note < 10) {
            $resultat = "Vous avez réussie avec la mention passable.";
        } else if ($note == 10) {
            $resultat = "Félicitions, vous avez réussie avec la mention très bien.";
        }
    }

    ?>

    <h2>Formulaire d'Examen</h2>
    <fieldset>
        <legend>Examen Technologie Web</legend>
        <form method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <br><br>

            <!-- Question 1 -->
            <p>Question 1 : A quelle balise se trouve l'attribut alt ?</p>
            <input type="radio" id="q1_body" name="q1" value="body" required>
            <label for="q1_body">body</label><br>

            <input type="radio" id="q1_img" name="q1" value="img">
            <label for="q1_img">img</label><br>

            <input type="radio" id="q1_form" name="q1" value="form">
            <label for="q1_form">form</label><br>
            <br>

            <!-- Question 2 -->
            <p>Question 2 : CSS permet de ?</p>
            <input type="radio" id="q2_chager" name="q2" value="chager" required>
            <label for="q2_chager">Changer le contenu d'un document HTML</label><br>

            <input type="radio" id="q2_decorer" name="q2" value="decorer">
            <label for="q2_decorer">Décorer un document HTML</label><br>
            <br>

            <!-- Question 3  -->
            <p>Question 3 : Le langage HTML nous permet la création de sites web ?</p>
            <select id="q3" name="q3" required>
                <option value="statique">Statique</option>
                <option value="dynamique">Dynamique</option>
            </select>
            <br><br>

            <button type="submit" name="correction">Correction</button>
        </form>
    </fieldset>
    <fieldset>
        <legend>Résultat</legend>
        <label for="note">Note :</label>
        <input type="text" id="note" name="note" value="<?php if(isset($note)) {echo $note; }?>"> <span>/10</span>
        <p><?php if(isset($resultat)) {echo $resultat;} ?></p>
    </fieldset>

</body>

</html>

// validation data