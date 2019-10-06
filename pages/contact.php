<!DOCTYPE html>
<html lang="fr" dir="ltr">

<?php
include('../phpPart/head.php');
?>
  <title>Me contacter</title>
  <script src="../js/validform.js"></script>
</head>

<body id="contact" class="contact">

  <?php
  include('../phpPart/headerDark.php');
  ?>

  <main class="centerFlex contact">
    <?php include('../phpPart/navGalerie.php') ?>


    <section class="centerFlex">
      <form action="../phpPart/traitement.php" method="post" data-validForm="true">
        <fieldset>
          <legend>me contacter</legend>
          <div>
            <div>
              <label for="male" class="inline">
                <input name="sex" value="M." type="radio" checked="checked">
                Monsieur
              </label>
              <label for="female" class="inline">
                <input name="sex" value="Mme" type="radio">
                Madame
              </label>
            </div>
            <label for="name">
              <input id="name" name="name" value="" type="text" data-required='true' placeholder="Votre nom*">
            </label>
            <label for="firstname">
              <input id="firstname" name="firstname" value="" type="text" data-required='true' placeholder="Votre prénom*">
            </label>
            <label for="email">
              <input id="email" name="email" value="" type="email" data-email="true" placeholder="Votre e-mail*">
            </label>
            <label for="reason">
              Dîtes-moi la raison de votre message :
              <select name="reason">
                <option value="Demande de devis" selected>Demander un devis</option>
                <option value="Demande d'informations">Demander un renseignement</option>
              </select>
            </label>
            <label for="message">
              <textarea id="message" name="message" rows="8" cols="80" data-required='true' placeholder="Votre message ici*"></textarea>
            </label>
            <div>
              <input name="send-form" value="Envoyer" type="submit">
              <input name="reset" value="Réinitialiser" type="reset">
            </div>
            <p><sup>*</sup><span class="notice">ces champs sont obligatoires</span></p>
          </div>
        </fieldset>
      </form>

</section>
  </main>

  <?php
  include('../phpPart/footer.php');
  ?>
