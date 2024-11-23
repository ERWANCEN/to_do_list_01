<?php




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - To Do List</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }


        /* Partie header */
        header {
            background: red;
            height: 6rem;
            background-color: #5B73EA;
        }
        nav {
            display: flex;
            height: 100%;
        }
        a {
            text-decoration: none;
            color: black;
        }
        a:hover {
            text-decoration: none;
            color: white;
        }
        #logo {
            margin-left: 100px;
            margin-block: auto;
            font-size: 32px;
        }
        #container_inscription_barre_connexion {
            display: flex;
            margin-block: auto;
            font-size: 20px;
            width: 100%;
            justify-content: flex-end;
            margin-right: 100px;
            align-items: center;
        }
        #barre_séparation_onglets_header {
            margin-inline: 16px;
            width: 2px;
            height: 24px;
            background: black;
            border-radius: 3px;
        }


        /* Partie formulaire */
        #connexion {
            width: 28rem;
            margin: auto;
            margin-top: 3rem;
            margin-bottom: 20px;
        }
        #formulaire {
            display: grid;
            width: 28rem;
            margin: auto;
        }
        label {
            margin-top: 30px;
        }
        input {
            height: 2rem;
            border-radius: 6px;
            border: 2px solid #5B73EA;
            background: #F2F2F7;
            margin-top: 2px;
        }
        #boutton {
            width: 200px;
            height: 40px;
            margin-top: 20px;
            background: #5B73EA;
            border: 0;
            border-radius: 6px;
            color: white;
            font-weight: bold;
            font-size: 14px;
            padding: 13px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div id="logo"><a href=" <!-- Si logo pressé mais pas de compte ouvert, -> redirection page login --> ">Logo</a></div>
            <div id="container_inscription_barre_connexion">
                <div id="s_inscrire"><a href="">S'inscrire</a></div>
                <div id="barre_séparation_onglets_header"><a href=""></a></div>
                <div id="se_connecter"><a href="">Se connecter</a></div>
            </div>
        </nav>
    </header>
    <section>
        <h2 id="connexion">Connexion</h2>
        <form action="" method="post" id="formulaire">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="saisies">
            <label for="mdp">Mot de Passe</label>
            <input type="text" name="mdp" id="mdp" class="saisies">
            <button id="boutton">Se connecter</button>
        </form>
    </section>
</body>
</html>