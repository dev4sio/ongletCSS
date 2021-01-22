<?PHP
/* * *************************************************************************************************************
 *  importation des fichiers csv
 *  voir :
 * 	https://www.w3.org/Style/Examples/007/target.fr.html
 * 	https://www.w3schools.com/howto/howto_js_tabs.asp
 * 	https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs_close
 * 	https://sharkcoder.com/blocks/tabs
 * ************************************************************************************************************ */
// gestion et validation des informations de session en cours (à finaliser lors du passage en production)
//if (empty($_SESSION['util_connect'])) {header("Location:../index.php\n\n"); exit;}
// n'accepte que les connexions sécurisées (https)
if($_SERVER["HTTP_HOST"] != "localhost" && (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")) {
	header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
	exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Onglets en pure css</title>
	<link href="./inc/onglet.css" type="text/css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
</head>
<body>
<div class="login">
<header>
	<table>
		<tr>
			<td style="padding-bottom: 0px;"><img src="img/btslcn100.gif" alt="LCN"></td>
			<td>
				<h1>Onglets en HTML CSS JS</h1>
			</td>
		</tr>
	</table>
</header>
<main class="contenu">
	<div class="tab">
		<button class="tablinks" onclick="openOnglet('Onglet1')">Onglet 1</button>
		<button class="tablinks" onclick="openOnglet('Onglet2')">Onglet 2</button>
		<button class="tablinks" onclick="openOnglet('Onglet3')">Onglet 3</button>
	</div>
<!--Contenu des onglets -->
	<div id="Onglet1" class="tabcontent">
		<h3>Onglet 1</h3>
		<p>... Contenu de l'onglet 1...</p>
		<a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs_close">ONE : Exemple du W3C</a>
	</div>
	<div id="Onglet2" class="tabcontent">
		<h3>Onglet 2</h3>
		<p>... Contenu de l'onglet 2...</p>
		<a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs_close">TWO : Exemple du W3C</a>
	</div>
	<div id="Onglet3" class="tabcontent">
		<h3>Onglet 3</h3>
		<p>... Contenu de l'onglet 3...</p>
		<a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs_close">TREE : Exemple du W3C</a>
	</div>
</main>
<?PHP include "./inc/zz_copy.php"; ?>
</div>
</body>
<script>
openOnglet("Onglet1");
function openOnglet(nomOnglet) {
  // Declarer les variables
  var i, tabcontent, tablinks;
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(nomOnglet).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</html>
