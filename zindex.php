<?PHP
/* * *************************************************************************************************************
 *  importation des fichiers csv
 *  voir :
 * 	https://www.w3schools.com/howto/howto_js_tabs.asp
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
	<link href="./inc/zindex.css" type="text/css" rel="stylesheet">
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
    <div class="tabs">
     <div id="tab1"> <a href="#tab1">Onglet&nbsp;1</a>
      <div>One might well argue, that...</div>
     </div>

     <div id="tab2"> <a href="#tab2">Onglet&nbsp;2</a>
      <div>... 30 lines of CSS is rather a lot, and...</div>
     </div>

     <div id="tab3"> <a href="#tab3">Onglet&nbsp;3</a>
      <div>... that 2 should have been enough, but...</div>
     </div>

     <div id="default2"> <a href="#default2">Default</a>
      <div>... it works!</div>
     </div>
    </div>
</main>
<?PHP include "./inc/zz_copy.php"; ?>
</div>
</body>
</html>
