<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$endURL = count($components) - 1;
$page = $components[$endURL];
?>

<i id="menuGalBurger" class="fas fa-bars show" onclick="openMenu()"></i>
<nav id="menuGal" class="menuGal centerFlex">
  <i id="menuGalCross" class="fas fa-times hide" onclick="closeMenu()"></i>
  <h2>Galeries</h2>
  <ul>
    <li <?php if( $page =='art.php'){ echo ' class="selected" ';} ?>><a href="art.php">Art&nbsp;/&nbsp;Déco</a></li>
    <li <?php if( $page =='enfant.php'){ echo ' class="selected" ';} ?>><a href="enfant.php">Enfance</a></li>
    <li <?php if( $page =='evenement.php'){ echo ' class="selected" ';} ?>><a href="evenement.php">Évènementiel</a></li>
    <li <?php if( $page =='mariage.php'){ echo ' class="selected" ';} ?>><a href="mariage.php">Mariage</a></li>
    <li <?php if( $page =='mode.php'){ echo ' class="selected" ';} ?>><a href="mode.php">Mode</a></li>
    <li <?php if( $page =='portrait.php'){ echo ' class="selected" ';} ?>><a href="portrait.php">Portrait</a></li>
    <li <?php if( $page =='publicite.php'){ echo ' class="selected" ';} ?>><a href="publicite.php">Publicité</a></li>
    <li><a href="#prestaEvent">Prestations</a></li>
  </ul>

</nav>
