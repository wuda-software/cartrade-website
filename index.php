<?php
	/*
	<!DOCTYPE html>
<html lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<link rel="apple-touch-icon" href="https://cartrade.wuda.io/img/apple-touch-icon.png"/>
	<!-- Facebook Open Graph -->
	<meta property="og:image" content="">
	<meta property="og:title" content="Autohandel und Import einfach mit Wuda CarTrade">
	<meta property="og:description" content="Nova, USt. und schöne Kaufverträge automatisch. Jetzt kostenlos testen!">
	<meta property="og:type" content="Website">
	<meta property="og:url" content="https://cartrade.wuda.io/">
	<meta property="og:site_name" content="Wuda CarTrade">
	<!-- CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<main>
*/

	//===== HEADER
	include_once(__DIR__.'/_headerfunc.php');
	echo getHeader(
		"Professionelle Autohandel-Software - CarTrade",
		"Starten Sie mit der besten Software für den Fahrzeughandel. Übersichtliche Fahrzeug- und Kundenverwaltung mit NoVA-Berechnung. Jetzt kostenlos testen!",
		"./img/opengraph-CarTrade.png",
		false
	);
?>

	<!-- Intro -->
	<div class="intro-bg print-page">
		<div class="container">
			<div class="row banner" >
				<div class="col s12 m12 l6">
					<a href="."><img src="./img/cartrade_logo.png" class="logo-img" alt="CarTrade" /></a>
					<h1>Autohandel leicht gemacht</h1>
					<h2 class="claim">Profitieren Sie vom besten Werkzeug, dass speziell für den Import und Handel von Autos gemacht wurde und verwalten Sie Ihre Fahrzeuge schnell und einfach mit Wuda CarTrade.</h2>
					<a href="cta.php" target="_blank" class="btn-flat btn-large btn-cta no-print" title="Hier klicken um mehr zu erfahren">Jetzt kostenlos testen</a>
					<ul class="intro-pros">
						<li>Einfache Verwaltung von Fahrzeugen</li>
						<li>Mehr Umsatz mit optimalen Fahrzeug-Import</li>
						<li>Komfort, Benutzerfreundlichkeit und Sicherheit</li>
					</ul>
				</div>
				<div class="col s12 m12 l6">
					<div class="skewed-out" data-aos="fade-left" data-aos-offset="100">
						<img src="./img/app/dashboard.png" class="responsive-img skewed z-depth-5 product-preview" alt="CarTrade Software für den Auto Import" />
					</div>
				</div>
			</div>
		</div>
	</div>

<!--
		Wuda CarTrade ist eine Software die den Autohandel und die Datenverwaltung von Fahrzeugen, Kunden, Lieferanten, Kaufverträgen und Transportlisten einfacher und besser macht. CarTrade bietet viele Schnittstellen inkl. automatischer NoVA-Berechnung und Überprüfung der Finanzsperre. Somit behalten Sie mit CarTrade stets den Überblick über Ihre Fahrzeuge und sind anderen KFZ-Händlern um ein Vielfaches vorraus.
	</p>
	<br>
	<ul>
		<li>Fahrzeugankauf und -verkauf</li>
		<li>Übersichtliches Dashboard mit Bestandsanalyse</li>
		<li>Kunden-, Lieferanten- und Spediteur-Verwaltung</li>
		<li>Automatische NoVA-Berechnung und Finanzsperren-Überprüfung</li>
		<li>Nebenkosten, Einkaufs- und Verkaufsrechnung</li>
		<li>Suchfunktion, Filter und Sortierung sowie Benutzerverwaltung</li>
		<li>24 / 7 verfügbar auf PC, Smartphone und Tablet</li>
		<li>Datenschutzkonform nach DSGVO</li>
		<li>Import- &amp; Export-Schnittstellen</li>
	-->

		<!-- Intro / Flyer -->
		<!--
		<div class="section print-page grey lighten-3">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l6">
						<p>Dealer Management System - Professionelle Autohandel-Software</p>
						<h2 style="margin-top: 0;">Wuda CarTrade</h2>
						<ul>
							<li>Einfache Fahrzeugverwaltung</li>
							<li>Übersichtliches Dashboard mit Kennzahlen</li>
							<li>NoVA-Berechnung und FIN-Zulassungscheck</li>
							<li>1-Klick Angebot, Kaufvertrag und Rechnung</li>
							<li>Laufende Updates DMS und Zusatzmodulen</li>
							<li>Tägliche Datensicherung</li>
							<li>Datenschutzkonform nach DSGVO</li>
							<li>Server-Hardwarewartung 7 Tage x 24 Stunden</li>
							<li>Import- &amp; Export-Schnittstellen</li>
							<li>Hochsicherheitsrechenzentrum und hoher Sicherheitsstandard</li>
						</ul>
						<form class="no-print" style="padding: 1em 0;">
							<a href="cta.php" class="btn-flat btn-cta no-print" style="margin-bottom: .25em; min-width: 150px;" target="_blank" title="Hier klicken um mehr zu erfahren">Demo ansehen</a>
							<a href="https://wuda.io/contact-via-mail.php" style="margin-bottom: .25em; min-width: 150px;" class="btn-flat btn-cta2"><i class="material-icons left">email</i>info@wuda.io</a>
							<a href="https://wuda.io/contact-via-phone.php" style="margin-bottom: .25em; min-width: 150px;" class="btn-flat btn-cta2"><i class="material-icons left">call</i>+43 664 3769013</a>
						</form>
					</div>
					<div class="col s12 m12 l6">
						<img class="responsive-img materialboxed z-depth-1" style="margin-top:2.5em;" src="/img/screenshot_delivery.png" alt="Screenshot von CarTrade Andlieferungen">
					</div>
				</div>
			</div>
		</div>
		-->



		<!-- Funktion -->
		<div class="app-function section print-page">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3 class="section">Einfache Verwaltung von Fahrzeugen, Kunden und Dokumenten</h3>
					</div>
					<div class="col s12 m12 l6" >
						<div style="margin:1.5em;">
							<img class="responsive-img materialboxed z-depth-1" src="https://cartrade.wuda.io/img/app/personen.png" alt="Screenshot vom CarTrade Dahboard">
						</div>
					</div>
					<div class="col s12 m12 l6">
						<h4>Schnelles Auffinden von Daten mit der integrierten Suchmaschine</h4>
						<p>Durch die eingebaute Suchmaschine, wird bereits während des Tippens das gesamte System nach relevanten Daten durchsucht. Alle Informationen sind strukturiert abgelegt. Dadurch werden die Nerven geschont, der Autohandel leicht gemacht und enorm viel Zeit eingespart.</p>
						<h4>1-Klick-Erstellung von Angeboten, Kaufverträgen und Rechnungen</h4>
						<p>Nie wieder hin- und her kopieren von Daten, oder Inhalten oder das führen von mehrfachen Datenbeständen. Bei Bedarf legt man einen potentiellen Kunden direkt im Angebot an, und erstellt dann das Dokument mit nur 1 Klick.</p>
						<h4>Ausgeklügelte Daten-Verlinkung für wichtige Zusammenhänge</h4>
						<p>Du suchst einen bestimmten Kaufvertrag oder willt wissen was bei einem Auto vor 10 Monaten gemacht wurde, weist aber nur wer gerade anruft? Durch die vernetzte Datenstruktur findest du schnell alle relevanten Vertrags- und Fahrzeug-Daten zur Person und ein mühsames Suchen entfällt.</p>
					</div>
				</div>
				<!-- CTA -->
				<form class="center-align no-print">
					<a href="cta.php" class="btn-flat btn-large btn-cta" style="margin-bottom: .25em; min-width: 230px;" target="_blank" title="Hier klicken um mehr zu erfahren">Jetzt ausprobieren</a>
				</form>
			</div>
		</div>

		<!-- Funktion -->
		<div class="app-function section print-page">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3 class="section">Mehr Umsatz mit optimalen Fahrzeug-Import</h3>
					</div>
					<div class="col s12 m12 l6" >
						<div style="margin:1.5em;">
							<img class="responsive-img materialboxed z-depth-1" src="https://cartrade.wuda.io/img/app/nova.png" alt="Screenshot von CarTrade mit NoVA-Berechnung">
						</div>
					</div>
					<div class="col s12 m12 l6">
						<h4>Einfach Importieren mit eingebautem NoVA-Rechner</h4>
						<p>Mit dem integrierten NoVA-Rechner ist es ein kinderspiel Autos zu importieren. Die NoVA wird einfach auf Basis des Verkaufspreises an den End-Kunden weiter verrechnet.</p>
						<h4>Schnelle Zulassungsüberprüfung via FIN mit nur 1-Klick</h4>
						<p>Nach dem Import ist es wichtig zu wissen ob die NoVA bereits abgeführt wurde und das Fahrzeug in Österreich zugelassen werden kann. Mit der integrierten Zulassungsüberprüfung spart man sich den Anruf und die mühsame Warteschleife. Mit 1-Klick lässt sich checken ob das Auto zur Zulassung freigegeben ist.</p>
						<h4>Geeignet für Import mit Differenzbesteuerung</h4>
						<p>Normverbrauchsabgabe und Import von Privat-Person? Da wird es sehr schnell kompliziert und mühsam. Mit Wuda CarTrade ist die Differenzbesteuerung genau so einfach wie der normale Import vom Händler.</p>
						<h4>NoVA auf Dokumenten gesetzeskonform ausweisen</h4>
						<p>Die NoVA wird selbstverständlich auf allen erstellten Dokumenten ausgewiesen sowie auch alle anderen Steuern.</p>
					</div>
				</div>
				<!-- CTA -->
				<form class="center-align no-print">
					<a href="cta.php" class="btn-flat btn-large btn-cta" style="margin-bottom: .25em; min-width: 230px;" target="_blank" title="Hier klicken um mehr zu erfahren">Kostenlos ausprobieren</a>
				</form>
			</div>
		</div>

		<!-- Funktion -->
		<div class="app-function section print-page">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3 class="section">Komfort, Benutzerfreundlichkeit und Sicherheit</h3>
					</div>
					<div class="col s12 m12 l6" >
						<div style="margin:1.5em;">
							<img class="responsive-img materialboxed z-depth-1" src="https://cartrade.wuda.io/img/app/nebenkosten.png" alt="Screenshot von CarTrade Nebenkosten">
						</div>
					</div>
					<div class="col s12 m12 l6">
						<h4>24/7 Verfügbar für PC, Tablet und Smartphone</h4>
						<p>Durch die hohe Verfügbarkeit sorgen wir für einen sicheren Betrieb zu jeder Zeit. Sollte Ihr Rechner oder ihre Festplatte kaputt werden, können Sie einfach ein anderes Gerät verwenden.</p>
						<h4>Immer auf dem neuesten Stand dank kostenloser Updates</h4>
						<p>Bei Änderungen der Gesetzeslage, wie Beispielsweise die Anpassung der Umsatzsteuer oder NoVA Regelung, werden Updates automatisch eingespielt und sie sind immer auf dem neuesten Stand.</p>
						<h4>Hohe Sicherheit durch automatische Backups</h4>
						<p>Mit wenigen Klicks können sie entweder alle Daten oder einzelne Datenbestände Ihres Systems sichern. Mit CarTrade, der professionellen Autohandel-Software, können Sie Ihre Kundendaten auch über mehrere Standorte synchronisieren.</p>
					</div>
				</div>
			</div>
		</div>



		<!-- Vorteile -->
		<div>
			<!--
			<div id="vorteile" class="container">
				<h2 class="center-align" style="font-size: 2em; margin: 2em auto; padding-bottom: 1em;">Ihre Vorteile mit CarTrade</h2>				
				<div class="row">
					<div class="col s6 m6 l3">
						<img src="img/cars.png"  class="responsive-img" alt="Fahrzeuge einfach verwalten" />
						<h3>Einfache Autoverwaltung</h3>
						<p>Haben Sie es satt ihre Fahrzeuge aufwendig zu erfassen? Mit CarTrade können Sie mit nur wenigen Klicks ein neues Fahrzeug mit allen für den Verkauf wichtigen Daten, wie beispielsweise dem Kraftstoffverbrauch, CO2-Ausstoß oder dem Kilometerstand anlegen. Erfassen Sie kinderleicht, ob das Fahrzeug gerade zum Verkauf steht oder noch Papiere fehlen. Durch die einfache Eingabe des Einkaufspreises und der Reparaturkosten können Sie einen wirtschaftlichen Mindestverkaufspreis im Handumdrehen kalkulieren. Früher haben Sie mehrere Papier gefüllte Ordner oder zahlreiche Exel-Listen benötigt, heute geht alles mit nur einer Software, dem zuverlässigen und preiswerten CarTrade.</p>
					</div>
					<div class="col s6 m6 l3">
						<img src="img/better-tax.jpg" class="responsive-img" alt="Mehr Autos verkaufen" />
						<h3>Automatische Steuern</h3>
						<p>Steuern sind ein lästiges Thema. Als Unternehmer vergisst man gerne mal, genügend für das Finanzamt beiseitezulegen. CarTrade berechnet Ihnen automatisch die beim Verkauf eines Autos anfallende NoVA und Umsatzsteuer. Es ist kein aufwendiges Recherchieren und keine aufwendige Berechnung mehr notwendig. Das spart Ihnen wertvolle Zeit und vermeidet lästige Fehler. Damit Sie beim Verkauf eines Fahrzeuges durch vergessene Nebenkosten keinen Verlust machen, können Sie diese ebenfalls mit wenigen Klicks in CarTrade eintragen. Die Software ermittelt Ihnen dann automatisch den Gewinn pro Fahrzeug. Und das alles ohne aufwendiges händisches rechnen, automatisiert und zeitsparend.</p>
					</div>
					<div class="col s6 m6 l3">
						<img src="img/one-click-contract.jpg" class="responsive-img" alt="Automatischer Kaufvertrag" />
						<h3>1-Klick Verträge</h3>
						<p>Mit der integrierten Kunden- und Fahrzeugverwaltung können Sie blitzschnell automatisierte Verträge erstellen. Diese professionellen Verträge sind stets auf dem aktuellen Stand der Gesetzgebung. Wird eine neue Verordnung oder ein neues Gesetz verabschiedet, bekommen Sie automatisch einen neuen und rechtssicheren Kaufvertrag. Sie sparen nicht nur Zeit, sondern vermeiden dadurch auch nervige Fehler und steigern Ihre Service-Qualität. Holen Sie sich noch heute CarTrade und Sie brauchen sich nicht mehr länger um lästigen Papierkram zu kümmern und können die dadurch gewonnene Zeit produktiv und gewinnbringend in Ihr Unternehmen stecken. </p>
					</div>
					<div class="col s6 m6 l3">
						<img src="img/happycustomer.png" class="responsive-img" alt="Einfacher Kunden als Personen oder Unternehmen verwalten" />
						<h3>Zufriedene Kunden</h3>
						<p>Eine gute Kundenbeziehung ist das A und O eines jeden erfolgreichen Unternehmens. Auch dies ist nun dank CarTrade kinderleicht möglich. Sie können blitzschnell einen neuen Kunden in der Software anlegen. Durch die Verknüpfung mit den durch die Software erstellten Kaufverträgen, kennen Sie die Vorlieben ihrer Kunden und können gezielt Angebote für beispielsweise neue Fahrzeuge unterbreiten. Wer verkaufen möchte, muss seine Kunden verstehen und das geht nur, wenn man ihre Vorlieben kennt. Wie sagte schon einst ein berühmter Marketingprofessor: „Service heißt, das ganze Geschäft mit den Augen des Kunden zu sehen.“ </p>
					</div>
				</div>
			</div>
			-->
			<!-- CTA -->
			<form class="center-align no-print" style="padding-bottom: 4em;">
				<a href="cta.php" class="btn-flat btn-large btn-cta" style="margin-bottom: .25em; min-width: 230px;" target="_blank" title="Hier klicken um mehr zu erfahren">Jetzt kostenlos testen</a>
			</form>
		</div>

		<!-- Zahlungsarten -->
		<!--
		<div class="section" style="background-color: #1e7da1;">
			<div class="container white-text">
				<p>Zahlungsarten: Rechnung • Bar</p>
				<div class="row center-align white-text" style="margin:0; margin-top: .5em;">
					<div class="col s3">
						<i class="fa fa-globe-americas" style="font-size: 2em;"></i>
						<h4 style="font-size: .85em;">Online</h4>
					</div>
					<div class="col s3">
						<i class="fa fa-check-square" style="font-size: 2em;"></i>
						<h4 style="font-size: .85em;">Einfach</h4>
					</div>
					<div class="col s3">
						<i class="fa fa-lock" style="font-size: 2em; "></i>
						<h4 style="font-size: .85em;">Sicher</h4>
					</div>
					<div class="col s3">
						<i class="fa fa-fighter-jet" style="font-size: 2em;"></i>
						<h4 style="font-size: .85em;">Schnell</h4>
					</div>
				</div>
			</div>		
		</div>
		-->
		
<?php
  //===== FOOTER
  include_once(__DIR__.'/_footer.php');
?>