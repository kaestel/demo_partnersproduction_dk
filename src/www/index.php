<? include_once("../include/segment.php") ?>
<!DOCTYPE html>
<html lang="da">
<head>
	<!-- (c) & (p) hvadhedderde.com 2012 //-->
	<!-- All material protected by copyrightlaws, as if you didnt know //-->
	<title>Partners Production</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="Partners Production" />
	<meta name="viewport" content="width=1024" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<? if($_SESSION["dev"]) { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_<?= $_SESSION["segment"] ?>_include.css" />
	<script type="text/javascript" src="/js/lib/seg_<?= $_SESSION["segment"] ?>_include.js"></script>
<? } else { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $_SESSION["segment"] ?>.css" />
	<script type="text/javascript" src="/js/seg_<?= $_SESSION["segment"] ?>.js"></script>
<? } ?>
</head>

<body>

<div id="page" class="i:page">

	<div id="header">
		<ul class="servicenavigation">
			<li class="keynav navigation access"><a href="#navigation" rel="nofollow">Menu</a></li>
			<li class="keynav help access"><a href="/help" rel="nofollow">Help</a></li>
		</ul>
	</div>

	<div id="content">
		<h1>Partners Production</h1>

		<div id="forside" class="scene front">
			<div class="table">
				<div class="cell">

					<h2>Partners 2012</h2>
					<p class="video"><a href="/media/video/showreel.mp4">Se videoen</a></p>

				</div>
			</div>
		</div>

		<div id="kontakt" class="scene contact">
			<div class="table">
				<div class="cell">
					<div class="vcard company" itemscope itemtype="http://schema.org/Organization">
						<div class="column">
							<p class="job">
								Vi søger lige nu en praktikant til jobbet som klippe- og research assistent. Læs mere <a href="/media/pdf/WDP_Praktikant.pdf" target="_blank">her</a>.
							</p>
							<div class="name fn org" itemprop="name">Partners Production</div>
							<div class="adr" itemprop="address" itemscope itemtype="http://schema.org/Address">
								<div class="street-address" itemprop="street-address">Vester Farimagsgade 41</div>
								<div class="city">
									<span class="country-name" itemprop="country-name">DK</span> -
									<span class="postal-code" itemprop="postal-code">1606</span> 
									<span class="locality" itemprop="locality">København V</span>
								</div>
								<div class="geo" itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">&phi; <span class="latitude" itemprop="latitude">55.706608</span>°; &lambda; <span class="longitude" itemprop="longitude">12.53844</span>°</div>
							</div>
							<div class="tel" itemprop="tel">+45 7221 5150</div>
							<div class="email" itemprop="email"><a href="mailto:kontakt@partnersproduction.dk">kontakt@partnersproduction.dk</a></div>
							<div class="feedfetcherimages">
								<img itemprop="logo" src="/img/logo_sharing.png" alt="Partners Productions" style="display: none;">
							</div>
						</div>

						<div class="cookies">
							<a href="#cookies" class="readmore">Brug af cookies på dette site</a>
						</div>
					</div>
					<div class="cookieterms" id="cookies">
						<h2>Cookies</h2>
						<p>På www.partnersproduction.dk bruges cookies til at forbedre indhold, brugeroplevelsen og websidens struktur via faktisk brug af www.partnersproduction.dk. Informationerne er anonymiseret, og vi vil ikke kunne koble data opsamlet via cookies med anden information om dig. Det er kun Partners Productions og den tekniske samarbejdspartner Hvadhedderde, der har adgang til oplysningerne.</p>
						<p>Cookies slettes som oftest automatisk fra browseren, når den lukkes (såkaldte session-cookies). Cookies kan dog også indstilles med et udløbstidspunkt, så data eksisterer i en kortere eller længere periode (persistent cookies). Persistent cookies gemmes typisk på harddisken. Desuden skelner man normalt mellem førstepartscookies og tredjepartscookies. Førstepartscookies afsættes af den side, som brugeren besøger. Tredjepartscookies afsættes af en tredjepart, som har elementer indlejret på den side, som brugeren besøger. Tredjeparts cookies sættes blandt andet af webanalyseprogrammer samt annoncører mv., der gør det muligt bl.a. at målrette markedsføring. På www.partnersproduction.dk bruger vi både førstepartscookies til grundlæggende sidefunktionalitet og tredjepartscookies til statistik.</p>
						<p>For løbende at forbedre indholdet, selvbetjeningsløsninger og gøre din samlede oplevelse bedre, indsamler vi løbende anonymiseret statistik. Google Analytics webanalyse-cookies anvendes til at måle din brug af www.partnersproduction.dk. Disse målinger bruges til at lave statistik over brugen af websitet, samt til at finde uhensigtsmæssigheder på websitet, så vi kan forbedre din oplevelse af www.partnersproduction.dk. Disse Cookies indeholder et tilfældigt genereret ID, der anvendes til at genkende din browser, når du læser en side, og indeholder ingen personlige oplysninger og anvendes kun til webanalyse. Disse Cookies hedder egentlig 'nmstat' eller 'UTM...' i listen af cookies og er sat til at slette sig selv 1000 dage efter dit seneste besøg.</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="navigation">
		<ul>
			<li class="forside"><a href="#forside">Forside</a></li>
			<li class="kontakt"><a href="#kontakt">Kontakt</a></li>
		</ul>
	</div>

	<div id="footer"></div>

</div>

</body>
</html>