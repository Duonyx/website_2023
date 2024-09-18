<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php
  $title = array("accueil", "politiquesociale", "contact", "apropos", "securityplatform", "aiplatform", "dataplatform");

  $description   = array("DUONYX est une société spécialisée dans la revente de solutions logicielles et matérielles autour de la protection de la donnée. Innovation, sécurité, cyber-sécurité, dlp, casb,cloud computing, datacenter, infrastructure, nutanix, symantec, veritas, netbackup, hyperconvergence. Des partenariats privilégiés avec Pure Storage, Symantec, Rubrik, Nutanix, Veritas, Tanium, Quantum, Ugloo, Gate Watcher, Ugloo...", "Politique sociale de DUONYX: engagés socialement et intelligemment avec epic foundation, samu social de Paris, l'entourage et AMFA", "DUONYX c'est la passion et l'engagement avec une expertise de plus de 25 ans, avec notre valeur ajoutée, le conseil de haut niveau tout au long de l'acte de vente", "Duonyx intégrateur conseil dans le domaine de la protection des données. Sauvegarde, Sécurisation, Stockage, Cybersécurité", "A.I. Platform: L'Intelligence Artificielle au service de l'Innovation. sécurité, cyber-sécurité, dlp, casb,cloud computing, datacenter, infrastructure, nutanix, symantec, veritas, netbackup, hyperconvergence, EDR, Flash, Cloud, stockage objet S3", "Data Platform: Moderniser et Optimiser les Infrastructures. Distributed Systems, Data Management, Hybrid Cloud Strategy, Cloud Data Management, Smart Protection, Innovation Center.");

  if(isset($_GET['p'])){
    $urltitle = $_GET['p'];
  }else{
    $urltitle = 'accueil';
  }



  $metadesc = str_replace($title, $description, $urltitle);

  $urltitle = ucfirst($urltitle); 
  

 

  echo '<title>Duonyx - '.$urltitle.'</title>';
  echo '<meta name="description" content="'.$metadesc.'">';
  
 ?>
    <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=6">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
<?php
	require_once "Mobile_Detect.php";
$detect = new Mobile_Detect;

if ( $detect->isMobile() ) {

	echo '<div id="menu-mob"><a href="index.php"><div id="logo-m"><img src="logo.png" alt="Logo de notre site, DUONYX"/></div></a><div id="menu-mob2">&#9776;</div></div>

  <div id="wrap">
  	<div id="close">&times;</div>
  	<a href="index.php"><div>Accueil</div></a>
    <a href="?p=apropos"><div>À Propos</div></a>
<a href="?p=politiquesociale"><div>Politique sociale</div></a><a href="?p=contact"><div>Contact</div></a><a href="?p=recrutement"><div>Recrutement</div></a>

  </div>
<style>
.notreapproche .illu{
  display:none;
}

</style>

  ';


}else{

	echo '<div id="menu"><div class="container"><div id="logo"><a href="?p=accueil"><img src="logo.png"/></a></div><div id="selector"><a href="?p=apropos"><div>À propos</div></a><a href="?p=accueil#ETC"><div>Nos compétences</div></a><a href="?p=accueil#EIT"><div>Nos expertises</div></a><a href="?p=politiquesociale"><div>Politique sociale</div></a><a href="?p=contact"><div>Contact</div></a><a target="_blank" href="https://www.welcometothejungle.com/fr/companies/duonyx"><div>Recrutement</div></a></div></div></div>
  <div class="deb"></div>';

  }

  
if(isset($_GET['p'])){
  $page = 'page/'.$_GET['p'].'.php';
}else{
  $page = 'page/accueil.php';
}



if (file_exists($page)) {
     include $page;
} else {
    header('Location: index.php');
}




  ?>
  <div class="footer"><div><img src="logor.png" alt="Logo simplifié de notre site, DUONYX"/><br/><br/>&copy <?php echo date('Y'); ?> Duonyx
  </div></div>

  <div class="discretfooter">
<a href="?p=contact">Nous contacter</a> - <a href="?p=cookies">À propos des cookies</a> - <a href="?p=conditionsdutilisation">Conditions d'utilisation</a></div>



<script>
$( "#wrap" ).slideUp(0);


  $( "#menu-mob2" ).click(function() {
  $( "#wrap" ).slideDown(300);
});

$( "#close" ).click(function() {
  $( "#wrap" ).slideUp(300);
});

</script>
</body>
</html>