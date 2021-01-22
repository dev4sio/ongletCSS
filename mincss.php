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
	<link href="./inc/mincss.css" type="text/css" rel="stylesheet">
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
				<h1>Onglets en pure CSS</h1>
			</td>
		</tr>
	</table>
</header>
<main class="contenu">
	<a href="#default">Début</a>
	<a href="#onglet1">onglet 1</a>
	<a href="#onglet2">onglet 2</a>
	<a href="#onglet3">onglet 3</a>
	<div class="onglets">
		<div id="default">
			<p>... Contenu affiché par défaut.</p>
		</div>
		<div id="onglet1">
			<p>... Contenu de  onglet 1......</p>
		</div>
		<div id="onglet2">
			<p>... Contenu de  onglet 2......</p>
		</div>
		<div id="onglet3">
			<p>... Contenu de ...</p>
		</div>
	</div>
</main>
<?PHP include "./inc/zz_copy.php"; ?>
</div>
</body>
</html>
