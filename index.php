<?php 
	if(isset($_POST['Name']) AND isset($_POST['Email']) AND isset($_POST['Subject']) AND isset($_POST['Message']) AND isset($_POST['submit']))
    {
        $name = htmlspecialchars($_POST['Name']);
        $email = htmlspecialchars($_POST['Email']);
        $subject = htmlspecialchars($_POST['Subject']);
        $message = htmlspecialchars($_POST['Message']);
        $submit = htmlspecialchars($_POST['submit']);

		if(!empty($name))
			$verifName = preg_match("/^[a-zA-Z]{3,15}/",$name);
			
			
            if(!empty($email))
                $verifEmail = preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/",$email);

                if(!empty($subject))
                    $verifSubject = preg_match("/^[a-zA-Z]{5,20}/",$subject);

                    if(!empty($message))
						$verifMessage = preg_match("/^[a-zA-Z]{20,700}/",$message);

							
		if($verifName AND $verifEmail AND $verifSubject AND $verifMessage)
		{
            
			$myMail = "abdessamad.bannouf@laposte.net";
			$header="MIME-Version: 1.0\r\n";
			$header.='From:"Abedessamad.fr"<abdessamad.bannouf@laposte.net>'."\n";
			$header.='Content-Type:text/html; charset="utf-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';
			$message = '
			<html>
				<head>
					<title>Récupération de mot de passe - Easy Food.com</title>
					<meta charset="utf-8" />
				</head>

				<body>
					<font color="#303030";>
					<div align="center">
						<table width="600px">
							<tr>
								<td>					                     
									<div align="center">Bonjour <b></b>,</div><br/>
									<p>
										Vous avez reçu un nouveau message de: '.$name.' => '.$email.'<br/><br/>
										<h1>'.$subject.'</h1><br/><br/>
										<div>'.$message.'</div><br/><br/><br/>
									</p>
								</td>
							</tr>

							<tr>
								<td align="center">
									<font size="2">
										Ceci est un email automatique, merci de ne pas y répondre
									</font>
								</td>
							</tr>
						</table>
					</div>
					</font>
				</body>
			</html>
				';

			mail($myMail, "Quelqu'un vous a contacté - www.abedessamad.com", $message, $header);
				?> 
			<script>
				alert("Message envoyé !");
			</script>
			<?php
				header('location:http://www.abedessamad.fr');		
			}
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="icone.css"/>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<title>WebAgency, l'agence de tous vos projets</title>
	</head>

	<body>

		<nav class="menu-deroulant">
			<div id="conteneur">
				<div class="element">
					<img class="logo" src="logo.png" alt="logo du site"/>
				</div>
				<div class="element">
					<p class="ancre"><a href="#background">Accueil</p>
					<p class="ancre"><a href="#nos-services">Services</a></p>
					<p class="ancre"><a href="#nos-projets">Projets</a></p>
					<p class="ancre"><a href="#contact">Contact</a></p> 
				</div>
			</div>
		</nav>	

		<header id="background">
			<div class="ensemble">
				<div class="colonne">
					<p><span class="Webagency-bleu">WEBAGENCY</span>
					<span class="slogan-blanc"> : L'AGENCE DE TOUS VOS PROJETS !</span></p>
					<p class="phrase-commerciale">Vous avez un projet ? La WebAgency vous aide à le réaliser !</p>
					<p class="info">Plus d'info</p>
				</div>
			</div>
			<div class="bouton-gauche"></div>
			<div class="bouton-droit"></div>
			<div class="icon-angle-left"></div>
			<div class="icon-angle-right"></div>
			<div class="bordure-bas"></div>
		</header>

		<section id="nos-services">
			<h1 class="titre">nos services</h1>
			<div class="separateur">
				<span class="trait-gauche"></span>
				<span class="icon-circle"></span>
				<span class="trait-droit"></span>
			</div>
			<p class="phrase-accroche">Nous vous proposons divers services web allant de la création de la maquette jusqu'à l'élaboration d'une solution web</p>
			<div class="colonne-services">
				<div class="colonne-image">
					<img class="image-services" src="main-feature.png" alt="logo-services"/>
				</div>
				<div class="bloc-ux">
					<div class="cercle">
						<div class="icon-line-chart"></div>
					</div>
						<p class="titre-ux">UX design</p>
						<p class="paragraphe-ux">Nous faisons en sorte de garentir que l'expérience utilisateur soit à la pointe technologique de vos attentes.</p>
				</div>

				<div class="bloc-ui">
					<div class="cercle">
						<div class="icon-cubes"></div>
					</div>
						<p class="titre-ui">UI design</p>
						<p class="paragraphe-ui">Le design web de votre site est élaboré avec ce qui se fait de mieux dans le numérique.</p>
				</div>

				<div class="bloc-seo">
					<div class="cercle">
						<div class="icon-pie-chart"></div>
					</div>
						<p class="titre-seo">SEO</p>
						<p class="paragraphe-seo">Le design web de votre site est élaboré avec ce qui se fait de mieux dans le numérique.</p>
				</div>

			</div>
		</section>

		<section id="nos-projets">
			<h1 class="titre">nos projets</h1>
			<div class="separateur">
				<span class="trait-gauche"></span>
				<span class="icon-circle"></span>
				<span class="trait-droit"></span>
			</div>
			<p class="phrase-accroche">Voici ci-dessous les entreprises avec lesquelles nous travaillons</p>
			<div class="flex-menu-projets">
				<p class="onglet-projets">All Works</p>
				<p class="onglet-projets">Creative</p>					
				<p class="onglet-projets">Corporate</p>
				<p class="onglet-projets">Portfolio</p>
			</div>

			<div class="conteneur-projets">

				<div class="projet">
					<img class="img-un" src="01.jpg" alt="projet-un"/>
					<div class="cache">lunette adaptative</div>
					<span class="icon-eye"></span>
				</div>

				<div class="projet">
					<img class="img-deux" src="02.jpg" alt="projet-deux"/>
					<div class="cache">rabbit-game</div>
					<span class="icon-eye"></span>
				</div>

				<div class="projet">
					<img class="img-deux" src="03.jpg" alt="projet-trois"/>
					<div class="cache">Soda énergisant</div>
					<span class="icon-eye"></span>
				</div>

				<div class="projet">
					<img class="img-deux" src="04.jpg" alt="projet-quatre"/>
					<div class="cache">journal autobiographique</div>
					<span class="icon-eye"></span>
				</div>

				<div class="retour-ligne">
					<div class="projet">
						<img class="img-deux" src="05.jpg" alt="projet-cinc"/>
						<div class="cache">Shopping from USA</div>
						<span class="icon-eye"></span>
					</div>

					<div class="projet">
						<img class="img-deux" src="06.jpg" alt="projet-six"/>
						<div class="cache">Exploitation-game</div>
						<span class="icon-eye"></span>
					</div>

					<div class="projet">
						<img class="img-deux" src="07.jpg" alt="projet-sept"/>
						<div class="cache">Rocket-news</div>
						<span class="icon-eye"></span>
					</div>

					<div class="projet">
						<img class="img-deux" src="08.jpg" alt="projet-huit"/>
						<div class="cache">Tool all-in-one</div>
						<span class="icon-eye"></span>
					</div>
				</div>
			</div>
		</section>

		<footer id="contact">
			<div class="conteneur-contact">
				<div class="coordonnees-agence">
						<p>Contact Info</p>
						<p>WebAgency SAS</p>
						<p>25 Rue d'Hauteville 75010 Paris</p>
						<p>Tél: 01 02 03 04 05</p>
				</div>

				<div class="post-message">
					<form method="post" action="#">
							
						<input class="nom" type="text" name="Name" placeholder="Le nom doit comprendre entre 3 et 15 caractères" pattern="[a-z]{3,15}" required/>

						<input class="mail" type="email" name="Email" placeholder="Tapez un mail valide" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" required/>

						<input class="sujet" type="text" name="Subject" placeholder="Le sujet doit comprendre entre 5 et 20 caractères" pattern="[a-z]{5,20}" required/>

						<textarea class ="contenu-message" type="textarea" name="Message" rows="5" cols="20" placeholder="Tapez un message (minimum 20 caractères, et maximum 700)" minlength="20" maxlength="700" required></textarea>

						<input class="envoyer-message" type="submit" name="submit" value="Send_Message">
					</form>
				</div>
			</div>
	</footer>
	</body>
</html>