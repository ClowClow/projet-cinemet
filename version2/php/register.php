<?php
  include 'functions.php';
  include 'co_bdd.php';

  /* On vérifie que le formulaire comporte bien des champs à compléter */
  if (!empty($_POST)){
    /* on crée un tableau des différentes erreurs possibles */
    $errors = array();
    /* On vérifie que l'utilisateur a choisi un nom d'utilisateur et que celui ci est valide */
    if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {
      $errors['pseudo'] = "Votre nom d'utilisateur n'a pas été complété ou contient
      des caractères invalides";
    } else /* on vérifie que le pseudo n'est pas déjà utilisé */ {
      $req = $bdd -> prepare('SELECT id_user FROM USER WHERE `pseudo` = ? ');
      $req -> execute([$_POST['pseudo']]);
      $user = $req -> fetch();
      if($user) {
        $errors['pseudo'] = "Le nom d'utilisateur que vous avez choisi existe déjà";
      }
    }
    /* On vérifie que l'utilisateur a rentré un mail et que celui ci est valide */
    if(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
      $errors['mail'] = "Votre adresse mail n'est pas valide";
    }  else /* on vérifie que le mail n'est pas déjà utilisé */ {
      $req = $bdd -> prepare('SELECT id_user FROM USER WHERE `mail` = ? ');
      $req -> execute([$_POST['mail']]);
      $mail = $req -> fetch();
      if($mail) {
        $errors['mail'] = "Un compte existe déjà avec cette adresse email";
      }
    }
    /* On vérifie que l'utilisateur a rentré un mot de passe */
    if(empty($_POST['mdp']) || $_POST['mdp'] != $_POST['password_confirm']) {
      $errors['mdp'] = "Vous devez rentrer un mot de passe valide";
    }


    if(empty($errors)) {
      $req = $bdd -> prepare("INSERT INTO USER SET `nom` = ?, `prenom` = ?,`pseudo`= ?,
      `mdp` = ?, `mail` = ?, `confirmation_token` = ?");
      /* on cripte le mot de passe avant de l'enregistrer en bdd */
      $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
      /* on crée un token de confirmation aléatoire */
      $token = str_random(60);
      /* on enregistre l'utilisateur dans la bdd */
      $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $mdp,
      $_POST['mail'], $token]);
      /* on récupère l'id de l'utilisateur */
      $user_id = $bdd->lastInsertId();
      /* on envoie la demande de confirmation par mail */
      mail($_POST['mail'], 'Confimation de votre compte',
      "Afin de valider votre compte merci de cliquer sur ce lien\n\n
      http://localhost/github/projet-cinemet/version2/php/confirm.php?id=$user_id&token=$token");
      /* on redirige l'utilisateur vers la page de connexion */
      echo '<meta http-equiv="refresh" content="0; URL=connexion.php">';
      exit ();
    } else {

    }

  }
 ?>
