<!DOCTYPE html>
<html lang="fr" dir="ltr">

<?php
include('../phpPart/head.php');
?>
  <title>Mes tarifs</title>
</head>

<body id="tarifs" class="contact">

  <?php
  include('../phpPart/headerDark.php');
  ?>

  <main class="centerFlex contact">
    <?php include('../phpPart/navGalerie.php') ?>


    <section class="centerFlex">

      <table>
        <tr  class="trBottom">
          <th>Voir prestations</th>
          <th>Prix (TTC)</th>
        </tr>

        <tbody>
          <tr class="trBottom">
          <td><a href="portrait.php#prestaEvent">Portraits</a></td>
          <td>95€</td>
        </tr>
      </tbody>
      <tbody>
          <tr class="trBottom">
          <td><a href="enfant.php#prestaEvent">Grossesse et <br>
            petite enfance</a></td>
            <td>95€</td>
          </tr>
        </tbody>
        <tbody>
            <tr class="trBottom">
            <td><a href="mode.php#prestaEvent">Mode</a></td>
            <td>à partir de 120€</td>
          </tr>
        </tbody>

          <tbody>
            <tr>
              <td colspan="2"><a href="mariage.php#prestaEvent">Mariage</a></td>
            </tr>
            <tr class="tdForm">
              <td>formule Initiale</td>
              <td>990€</td>
            </tr>
            <tr class="tdForm">
              <td>formule Journée</td>
              <td>1190€</td>
            </tr>
            <tr class="tdForm trBottom">
              <td>formule Plaisir</td>
              <td>1700€</td>
            </tr>
          </tbody>

      <tbody>
        <tr>
          <td><a href="art.php#prestaEvent">Art & Déco</a><br>
          <a href="publicite.php#prestaEvent">Publicité</a> <br>
         <a href="evenement.php#prestaEvent">Évènementiel</a></td>
          <td>variable selon le prestation <br>
          <a href="contact.php">demander un devis</a></td>
        </tr>
      </tbody>



      </table>


    </section>
  </main>

  <?php
  include('../phpPart/footer.php');
  ?>
