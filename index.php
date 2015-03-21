<?php

/**
 * Konfiguration 
 *
 * Bitte passen Sie die folgenden Werte an, bevor Sie das Script benutzen!
 * 
 * Das Skript bitte in UTF-8 abspeichern (ohne BOM).
 */
 
// An welche Adresse sollen die Mails gesendet werden?  bestellung@cs-kielholz.de
$zieladresse = 's@goerke.net';

// Welche Adresse soll als Absender angegeben werden?
// (Manche Hoster lassen diese Angabe vor dem Versenden der Mail ueberschreiben)
$absenderadresse = 'seo@goerke.net';

// Welcher Absendername soll verwendet werden?
$absendername = 'SEO Wuppertal Formular';

// Welchen Betreff sollen die Mails erhalten?
$betreff = 'SEO Wuppertal Webseite';

// Zu welcher Seite soll als "Danke-Seite" weitergeleitet werden?
// Wichtig: Sie muessen hier eine gueltige HTTP-Adresse angeben!
$urlDankeSeite = 'kontakt_danke.php';

// Welche(s) Zeichen soll(en) zwischen dem Feldnamen und dem angegebenen Wert stehen?
$trenner = ":\t"; // Doppelpunkt + Tabulator

/**
 * Ende Konfiguration
 */

if ($_SERVER['REQUEST_METHOD'] === "POST") {

	$header = array();
	$header[] = "From: ".mb_encode_mimeheader($absendername, "utf-8", "Q")." <".$absenderadresse.">";
	$header[] = "MIME-Version: 1.0";
	$header[] = "Content-type: text/plain; charset=utf-8";
	$header[] = "Content-transfer-encoding: 8bit";
	
    $mailtext = "";

//Dynamisches Abfangen sämtlicher ausgefüllten felder 
foreach( $_POST as $key => $wert ) {
 if( !empty( $wert ) ) {
  $mailtext .= $key.":\t".$wert."\n"; 



        } else {
            $mailtext .= ""; "\n";
        }
    }

    mail(
    	$zieladresse, 
    	mb_encode_mimeheader($betreff, "utf-8", "Q"), 
    	$mailtext,
    	implode("\n", $header)
    ) or die("Die Mail konnte nicht versendet werden.");
    header("Location: $urlDankeSeite");
    exit;
}

header("Content-type: text/html; charset=utf-8");

?>

<!DOCTYPE html>
<html lang="de-DE" class="no-js">	
  <head>		
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />		
    <meta name="description" content="SEO aus Wuppertal. Verbessern Sie Ihre Position mit gezielter Suchmaschinenoptimierung. Ihre Webseite ist es Wert!" />
    <meta name="keywords" content="SEO, Suchmaschinenoptimierung, Wuppertal" />
    <meta name="author" content="Creative Services Goerke">		
    <title>SEO Wuppertal | Google Suchmaschinenoptimierung</title>		
    <!-- Favicons -->		
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
    <!-- List of Stylesheet -->		
    <link type='text/css' href="css/normalize.css" rel="stylesheet">		
    <link type='text/css' href="css/bootstrap.min.css" rel="stylesheet">		
    <link type='text/css' href="css/font-awesome.min.css" rel="stylesheet">		
    <link type='text/css' href="css/style.css" rel="stylesheet">		
    <link type='text/css' href="css/style-responsive.css" rel="stylesheet">		
    <!-- Geo-Tag für Bing -->
    <meta name="geo.region" content="DE" />
	<meta name="geo.placename" content="Wuppertal" />
	<meta name="geo.position" content="51.260867;7.149686" />
	<meta name="ICBM" content="51.260867, 7.149686" />
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Sintony:400,700' rel='stylesheet' type='text/css'>		
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->	  
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->		
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->	

<?php include_once("zopim.php") ?>
  </head>	
  <body data-spy="scroll" data-target=".navbar" data-offset="75">
  
<?php include_once("analyticstracking.php") ?>  
  
    <!-- Pre-loader -->		
    <div class="mask">			
      <div id="intro-loader">
      </div>		
    </div>		
    <!-- End Pre-loader -->	


	<!-- copy these lines to your document: -->

	<div id="stoerer_hype_container" style="position: fixed; overflow: hidden; width: 250px; height: 250px; right: 0px; top: 40px; background-color:transparent; z-index:1200;">
		<script type="text/javascript" charset="utf-8" src="stoerer.hyperesources/stoerer_hype_generated_script.js?35780"></script>
	</div>

	<!-- end copy -->


		<!-- Home Section -->		
    <section id="home">      
      <img id="cycle-loader" src="img/loader.gif" alt="loader" title="Lade SEO Wuppertal" />			
      <div id="fullscreen-slider">        	 				
        <!-- Slider item 1--> 				
        <div class="slider-item">					
          <img src="images/SEO-Planung-Keywords.jpg" alt="SEO Keyword Recherche" title="SEO Keyword Recherche">				
        </div>				
        <!-- End Slider item 1-->				
        <!-- Slider item 2-->				
        <div class="slider-item">					
          <img src="images/SEO-Suchmaschinenoptimierung-Wuppertal.jpg" alt="Suchmaschinenoptimierung SEO Wuppertal" title="Suchmaschinenoptimierung SEO Wuppertal">				
        </div>				
        <!-- End Slider item 2-->			
      </div>      
      <div class="slide-content">      
        <div class="text-center">
          <div class="header1">
            <!--<h1>SEO</h1>-->
            <img src="images/seo-wuppertal.png" width="265" height="181" alt="SEO Wuppertal" title="SEO Wuppertal">
<h2 style="color:#FFF; font-weight:400;">Suchmaschinen&shy;optimierung speziell für Unternehmen und Freiberufler aus Wuppertal.</h2>
          </div>   
        </div>
      </div>
		</section>
		<!-- End Home Section -->

    <!-- Navbar -->		
    <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">      
      <div class="navbar-wrapper">				
        <div class="navbar-header">					
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">						
            <span class="sr-only">Menu</span>						
            <i class="fa fa-bars fa-2x"></i>					
          </button>          
          <div class="navbar-logo">SEO Wuppertal</div> <!-- Logo or your name-->				
        </div>				
        <div class="collapse navbar-collapse">					
          <ul class="nav navbar-nav navbar-right">						
            <li>							
            <a href="#home" title="Start" class="collapse-menu">Start</a>						
            </li>                        
            <li>							
            <a href="#warum-seo" title="Warum SEO" class="collapse-menu">Warum SEO?</a>						
            </li>            						
            <li>							
            <a href="#seo-loesungen" title="SEO Lösungen" class="collapse-menu">SEO Lösungen</a>						
            </li>						
            <li>							
            <a href="#suchmaschinenoptimierung-erfolge" title="SEO Erfolge" class="collapse-menu">SEO Erfolge</a>						
            </li>						
            <li>							
            <a href="#kontakt-adresse" title="Kontakt" class="collapse-menu">Kontakt</a>						
            </li>					
          </ul>				
        </div>			
      </div>		
    </nav>		
    <!-- End Navbar -->		
    
    <!-- About Section -->		
    <section id="warum-seo" class="section-content bg1">			
      <div class="container">				
        <!-- Section title -->				
        <div class="section-title item_bottom text-center">					
          <h1>Warum <i>SEO</i>?</h1>          
          <p class="tagline">Verbessern Sie Ihre Positionierung – vor Ihren direkten Wettbewerbern aus Wuppertal.</p>          
          <div>						
            <span class="line-large"></span>					
          </div>  				
        </div>				
        <!-- End Section title -->				
        <div class="row">					
          <div class="col-md-4 item_top">            
            <div class="row">						
              <h3 class="tagline-lg">Profitieren Sie von optimierten Suchergebnissen.</h3>            
              <div class="line-strong"></div>  
              
              <h4>Erfolg im lokalen Wuppertaler Wettbewerb braucht clevere Maßnahmen im Marketing</h4>
              
            </div>        
          </div>					
          <div class="col-md-4 text-center item_bottom">					    
            <img src="images/goerke-seo-wuppertal.jpg" class="img-center img-rounded img-responsive" alt="Serge Goerke SEO Wuppertal" title="Wuppertaler SEO Serge Goerke" /> <!-- YOUR PHOTO -->					
          </div>					
          <div class="col-md-4 item_top">           
            <div class="name-title">              
              <h2>Serge Goerke</h2> <!-- Your Name -->            
              <h5>Web Optimierer für Wuppertal</h5> <!-- Your Designation -->          
            </div>              
            <p>Hallo, ich bin Web Optimierer aus Wuppertal und habe es mir zur Aufgabe gemacht Unternehmen, Selbständigen und Freiberuflern zu helfen, dass sie von ihren potenziellen Kunden treffsicher gefunden werden. Ebenso stehe ich Internetagenturen beratend zur Seite. </p>            
            <p>Gerne zeige ich Ihnen die Möglichkeiten von <strong>SEO</strong> für Sie auf. Ob <a href="seo-basis-optimierung-angebot.php" title="SEO Basis Optimierung">kleinere Optimierungen</a> oder eine umfassende Anpassung des bestehenden Webauftritts. </p>
            <p>Dabei spielt es keine Rolle, ob Ihre bestehende Webseite in einem CMS wie Typo3 oder WordPress erstellt wurde, ob es eine ältere Seite oder eine moderne Umsetzung ist, die die Möglichkeiten von HTML5 und CSS3 konsequent nutzt: Suchmaschinenmarketing, ohne künstliche Häufung einzelner Begriffe ist immer möglich. </p>
            <a class="btn btn-default btn-lg" href="#kontakt-adresse">Kostenlose Analyse&nbsp;&nbsp;<i class="fa fa-comment-o"></i></a>           					
          </div>
          
          
          
          
        </div>			 			
      </div>		
    </section>
    <!-- End About Section -->             
    
    <!-- StatBoard Container -->       		
    		
    <!-- End StatBoard Container -->
     		
                             
                 
    <!-- Skill Section --> 		
    <section id="skill" class="section-content bg1 skill-section" style="display:none;">			
      <div class="container">				
        <div class="row">											
          <!-- Section Title -->				
          <!--<div class="section-title item_bottom text-center">					
            <h1>My <i>Skills</i></h1>					
            <p class="tagline">I am really good at the following skills</p>          
            <div>						
              <span class="line-large"></span>					
            </div>				
          </div>-->        
          <!-- End Section Title -->
                  
          <section class="l-skill-nav item_left">
            <!-- Skill Category -->					
            <nav class="slide-effect">           	
              <a href="javascript: rotate('rotate1');" data-hover="Design" class="skills-pink btn-skills"><span>Design</span></a>						
              <a href="javascript: rotate('rotate2');" data-hover="Code" class="skills-blue btn-skills l-rMargin-20"><span>Code</span></a>					  
              <a href="javascript: rotate('rotate3');" data-hover="Others" class="skills-green btn-skills"><span>Others</span></a>					
            </nav>    		
            <!-- End Skill Category -->
          </section> 
          
          <!-- SkillBar -->              					
          <div id="pie-container" class="item_bottom">						
            <div id="l-inhalt">							
              <div id="skill-bar1" class="bar">								
                <h5 class="skill-caption"></h5>							
              </div>	 							
              <div id="skill-bar2" class="bar bar2">								
                <h5 class="skill-caption"></h5>							
              </div>							
              <div id="skill-bar3" class="bar bar3">								
                <h5 class="skill-caption"></h5>							
              </div>	 							
              <div id="skill-bar4" class="bar bar4">								
                <h5 class="skill-caption"></h5>							
              </div>              
              <div id="skill-bar5" class="bar bar5">								
                <h5 class="skill-caption"></h5>							
              </div>						
            </div>          
          </div>
          <!-- End SkillBar -->				
        </div>			 			
      </div>		
    </section>		
    <!-- End Skill Section -->
                  	
    <!-- Experience Timeline Section --> 		
    <section id="seo-loesungen" class="section-content bg2 timeline-content">			
      <div class="container">				
        <!-- Section title -->  				
        <div class="section-title item_bottom text-center">					
          <h1><b>SEO</b> <i>Lösungen</i></h1>          
          <p class="tagline">Es gibt keinen Königsweg, aber viele unterschiedliche Stellschrauben.</p>
          <div>						
            <span class="line-large"></span>					
          </div>  				
        </div>				
        <!-- End Section title -->
        				
        <div class="new-line">					
          <ol id="timeline">						
            <!-- Timeline item -->						
            <li class="timeline-item">							
              <div class="item_left">								
                <div class="well post">									
                  <div class="post-info bg2 text-center">										
                    <div class="box-inner"> 
                      <i class="fa fa-search"></i>
                    </div>										
                    <h5 class="info-date">Keyword-Recherche</h5>									
                  </div>									
                  <div class="post-body clearfix text-right">										
                    <div class="post-title">											
                      <h4>Schlüsselwörter suchen</h4>                      
                      <h5>Basis der erfolgreichen <br>
Suchmaschinenoptimierung</h5>										
                    </div>										
                    <div class="post-text">											
                      <p>Wissen Sie, mit welchen Suchbegriffen Ihre potenziellen Kunden nach Ihren Produkten oder Dienstleistungen suchen? Sind es die selben Begriffe, die Ihnen spontan einfallen oder bewegen Sie sich auf Ihrer Webseite in einem (Fach-)vokabular, dass eher Berufskollegen als Kunden anspricht? Hier hilft eine sorgfältige Keyword-Recherche, für die Google bereits einige Werkzeuge anbietet. <br>
Auch muss geprüft werden, wie oft die von Ihnen ausgewählten Suchbegriffe auf Google monatlich gesucht werden. Ebenso macht es Sinn, zu überprüfen, auf welche Keywords Ihre direkten Konkurrenten mit Top-Ergebnissen optimiert haben.</p>										
                    </div>                    
                    <div class="arrow-right"></div>									
                  </div>								
                </div>							
              </div>						
            </li>						
            <!-- End Timeline item -->
            						
            <!-- Timeline item -->						
            <li class="timeline-item">							
              <div class="item_right">								
                <div class="well post">									
                  <div class="post-info bg2 text-center">										
                    <div class="box-inner"> 
                      <i class="fa fa-clipboard"></i>
                    </div>										
                    <h5 class="info-date">Content-Recherche</h5>									
                  </div>									
                  <div class="post-body clearfix">										
                    <div class="post-title">											
                      <h4>Inhalte finden</h4>                      
                      <h5>Unverzichtbarer Baustein <br>
der SEO Optimierung</h5>										
                    </div>										
                    <div class="post-text">											
                      <p>Content ist King! Bieten Sie Ihren Besuchern – und damit auch den Suchmaschinen – die gesuchten Inhalte. Suchmaschinen analysieren auch, wie lange Besucher, die von den Suchergebnissen auf Ihre Seite kommen, dort bleiben. <br>
Was können Sie Ihren Kunden an Mehrwert-Inhalten bieten? Finden Sie es heraus und bieten Sie eine Kombination aus Texten, Bildern, Grafiken – alles mit natürlich platzierten Suchbegriffen. Mit Erfahrung und den richtigen SEO-Tools kann ich Sie dabei unterstützen.</p>
                    </div>                    
                    <div class="arrow-left"></div>									
                  </div>								
                </div>							
              </div>						
            </li>						
            <!-- End Timeline item -->
            						
            <!-- Timeline item -->						
            <li class="timeline-item">							
              <div class="item_left">								
                <div class="well post">									
                  <div class="post-info bg2 text-center">										
                    <div class="box-inner"> 
                      <i class="fa fa-list-ol"></i>
                    </div>										
                    <h5 class="info-date">Struktur und Aufbau</h5>									
                  </div>									
                  <div class="post-body clearfix text-right">										
                    <div class="post-title">											
                      <h4>Schema und Arrangement</h4>                      
                      <h5>OnPage-Optimierung als Herzstück <br>
der Webseiten-Optimierung</h5>										
                    </div>										
                    <div class="post-text">											
                      <p>Der Seitentitel oben im Browser, die Seitenbeschreibung für die Suchmaschinen-Ergebnisliste, der Dateiname in der Adresszeile, die für jede Seite einmalige Hauptüberschrift – und viele weitere SEO-Faktoren müssen aufeinander abgestimmt sein und aufeinander aufbauen. <br>
Gibt es Daten auf Ihrer Webseite die direkt in den Google-Suchergebnissen gezeigt werden sollen? Dann stellen Sie den Websuchmaschinen Strukturierte Daten zur Verfügung. Stellen Sie optimierte Bilder, Grafiken, Videos, Listen auf die Seite. </p>										
                    </div>   									
                    <div class="arrow-right"></div>									
                  </div>								
                </div>							
              </div>						
            </li>						
            <!-- End Timeline item -->
            						
            <!-- Timeline item -->						
            <li class="timeline-item">							
              <div class="item_right">								
                <div class="well post">									
                  <div class="post-info bg2 text-center">										
                    <div class="box-inner"> 
                      <i class="fa fa-tachometer"></i>
                    </div>										
                    <h5 class="info-date">Fortwährende Analyse</h5>									
                  </div>									
                  <div class="post-body clearfix">										
                    <div class="post-title">											
                      <h4>Ununterbrochen Prüfen</h4>                      
                      <h5>Die Besucher und die Platzierung <br>
                      in den Suchergebnissen im Blick behalten</h5>										
                    </div>										
                    <div class="post-text">											
                      <p>Was hat wie gewirkt und welche Besucher Ihrer Webseiten sehen sich was wie lange an? Haben Sie viele Nutzer, die auf Ihre Seiten mit dem Mobiltelefon oder einem Tablett zugreifen? Werden einzelne Unterseiten für Suchbegriffe gefunden, mit denen Sie nicht gerechnet haben? Wie entwickeln sich die Besucherzahlen ganz allgemein? <br>
Eine andauernde SEO-Analyse und Beobachtung führt es ans Licht.</p>										
                    </div>									
                  </div>									
                  <div class="arrow-left"></div>								
                </div>							
              </div>						
            </li>						
            <!-- End Timeline item -->					
          </ol>				
        </div>			
        
        
        
        
        
        
        <div class="col-lg-9 item_bottom" style="padding-top:40px;">           
            <div class="edu-new-line">

          
<!--**************************************************************************-->
<!--******* Die nachfolgenden Wörter müssen noch untergebracht werden: *******-->
<!--**************************************************************************-->
          
          <!--Wuppertal Wuppertal Wuppertal Wuppertaler Webdesign Webdesign Such­maschinen­optimierung Such­maschinen­optimierung Typo3 Typo3 Suchmaschinenmarketing Suchmaschinenmarketing Wettbewerb Wettbewerb HTML5 HTML5 HTML5 HTML5 umfangreiche umfangreiche  Marketing Marketing Marketing möchte Mikrodaten Mikrodaten Faktoren möchte AdWords Suchbegriffe--> 
          <div style="float:left;"><img src="images/Webdesign-Suchmaschinenoptimierung.png" width="131" height="110" alt="Webdesign SEO" title="Webdesign SEO"></div>
<h4>Webdesign</h4>
          <p>          
          Auch das <strong>Webdesign</strong> ist bei der Such&shy;maschinen&shy;optimierung ein wichtiger Faktor. Es macht durchaus Sinn, die Benutzerführung zu hinterfragen, um seine Besucher schnell zu den gesuchten Inhalten zu leiten. Auch kann das Webdesign dabei helfen, die Verweildauer der Besucher auf der Webseite zu verlängern. Einen weiteren Sinn hat modernes Webdesign (HTML5) für das erstellen schlanker Webseiten mit kurzen Ladezeiten. Hier kann es auch schon mal Sinn machen, auf ein umfangreiches CMS wie Typo3 zu verzichten, da jede Datenbank-Abfrage Zeit kostet. Auch das registrieren die Spider der Suchmaschinen. 
          </p>
          <div style="float: right; margin-left:10px;"><img src="images/Mikrodaten-SEO.png" width="131" height="110" alt="Mikrodaten SEO" title="Mikrodaten SEO"></div>
          <h4>Mikrodaten</h4>
<p>Einer von weiteren Faktoren der Such&shy;maschinen&shy;optimierung sind <strong>Mikrodaten</strong>: Hier besteht die Möglichkeit, Produkte mit Preis und Erfahrungs&shy;berichten direkt in den Suchergebnissen zu zeigen. Mikrodaten können aber auch für Personen verwendet werden. Diese helfen den Suchmaschinen Personen Profile aus sozialen Netzwerken zuzuordnen. Weitere Mikrodaten gibt es für Veranstaltungen, Bewertungen und Rezepte. Im Webdesign der Seite sind diese Angaben selbstverständlich nicht zu sehen. So können Mikrodaten die Darstellung in der Ergebnisliste deutlich von den Wettbewerbern abheben.
		</p>
          <div style="float:left;"><img src="images/Suchmaschinenmarketing-Wuppertal.png" width="131" height="110" alt="Suchmaschinenmarketing Wuppertal" title="Suchmaschinenmarketing Wuppertal"></div>
          <h4>Such&shy;maschinen&shy;marketing</h4>
<p><strong>Such&shy;maschinen&shy;marketing</strong> (SEM) kann eine Ergänzung zur Such&shy;maschinen&shy;optimierung sein. Hier werden AdWords-Anzeigen zu ausgewählten Suchbegriffen mit einem vorher festgelegten Budget gekauft. Diese Anzeigen erscheinen über und neben den Suchergebnissen. Diese Maßnahme des Marketing wirkt im Gegensatz zur Such&shy;maschinen&shy;optimierung aber nur so lange die Kampagne läuft. Resultate der Suchmaschinenoptimierung bleiben jedoch meist längerfristig bestehen. Im Wettbewerb ist das selbst&shy;verständlich von Vorteil. </p>
          </div>
          </div>
        
        
        
        




<div class="col-lg-3 item_bottom" style="margin-top:20px; padding-top:5px; padding-bottom:5px; background-color:#FFF;">           
            <div class="edu-new-line">

          <h3>Duplicate Content vermeiden</h3>
          <p> Oft entsteht <b>Duplicate Content,</b> also Seiten mit identischen Inhalten, obwohl man einzigartige Texte für seine Webseiten erstellt hat. Google kann die Seiten dafür abstrafen und in den Suchergebnissen nach hinten schieben. Ursache kann z.B. sein, dass das CMS die Seite unter unterschiedlichen Adressen bereitstellt. Oder das der Inhalt der Webseite mit und ohne "www" vor der Internetadresse erscheint. <br>
          Gelöst werden können die Probleme mit <b>301-Weiterleitungen</b> und <b>Canonical Tags.</b> So gibt man der Suchmaschine an, auf welcher Seite die zu indexierenden Inhalte liegen – alle weiteren Vorkommen mit dem Canonical Tag werden dann ignoriert. Ebenso sollte man festlegen, ob das "www" vor der Adresse erscheinen soll oder nicht. 
          </p>

          </div>
          </div>




<div class="col-lg-9 item_bottom" style="padding-top:40px;">           
            <div class="edu-new-line">

          <div style="float:right; margin-left:10px;"><img src="images/Lokales-SEO-Wuppertal.png" width="131" height="110" alt="Lokales SEO" title="Lokales SEO"></div>
<h4>Lokales SEO</h4>
          <p>          
          Die <strong>besonderen Möglichkeiten im lokalen SEO</strong> liegen in dem meist überschaubaren und abgegrenzten Markt. Je nach Branche lässt sich mit vertretbarem Aufwand schon eine gute Such&shy;maschinen&shy;optimierung realisieren. <br>
Ein mit der eigenen Webseite verknüpfter Eintrag bei Google My Business (ehemals Google Places) – vielleicht mit einigen positiven Kunden&shy;bewertungen – mit wichtigen Informationen wie z.B. Öffnungs&shy;zeiten und Leistungs&shy;spektrum bilden die Basis. Dazu ist der Eintrag Voraussetzung für die Platzierung des Unternehmens in der Kartenansicht. 
          </p>

          </div>
          </div>



        
      </div>		
    </section>		
    <!-- End Experience Timeline Section -->	  
         
    <!-- Education Section --> 		
    <section id="suchmaschinenoptimierung-erfolge" class="section-content bg1">			
      <div class="container">				
        <!-- Section title -->				
        <div class="section-title item_bottom text-center">					
          <h1>Erfolgreiche<i> SEO für Sie </i>in Wuppertal</h1>          
          <p class="tagline">Ein paar Beispiele für erfolgreiche Suchmaschinenoptimierung für Unternehmen aus Wuppertal</p>
          <div>						
            <span class="line-large"></span>					
          </div>				
        </div>				
        <!-- End Section title -->
                
        <!-- Container Text -->        
        <div class="col-md-12">        
          <div class="row">								
            <div class="col-md-6 col-sm-12 edu-new-line">
              <!-- Education 1-->                   
              <div class="education item_left">   									 
                <div class="edu-post">                   
                  <h4>Coaching und Organisationsberatung</h4>                   
                  <blockquote>„Coaching Wuppertal“</blockquote>                   
                  <p>Eine neue Webseite für ein Coaching- und Beratungs&shy;unternehmen aus Wuppertal kommt in den Wettbewerb um die besten Positionen auf der ersten Seite der Ergebnis&shy;seite. Ein auf die umfang&shy;reichen fachlichen Inhalte entwickeltes Webdesign, gut aufbereitet und strukturiert führten mit zum Ziel eines erfolg&shy;reichen SEO. Zusätzlich Landingpages und Grafiken für Ergebnisse in der Bilder&shy;suche zu nachgefragten Suchbegriffen.</p>                   
                </div>                   
                <div class="edu-arrow-right"></div>                   
                <div class="edu-grade text-center">                   
                  <strong>Top</strong>                   
                  <h3>1</h3>                   
                  <h5>2012 - 2014</h5>                   
                </div>                   
              </div>	
              <!-- End Education 1-->							
            </div>								
            <div class="col-md-6 col-sm-12 edu-new-line">		
              <!-- Education 2-->							
              <div class="education item_right">   									 
                <div class="edu-post">                   
                  <h4>Essen-Bringdienst</h4>                   
                  <blockquote>„Essen auf Rädern Wuppertal“</blockquote>                   
                  <p>Die neue Webseite eines alt eingesessenen Menü&shy;dienstes aus Wuppertal soll in vielen unterschiedlichen Keyword-Kombinationen ein Top-Ranking erzielen. Hier musste für die Suchmaschinen&shy;optimierung an vielen Stellen geschraubt und Maßnahmen ergriffen werden, damit sie in allen Liefergebieten gut gefunden wird. Heraus&shy;gekommen ist eine umfangreiche Such&shy;maschinen&shy;optimierung mit klug gewählten Such&shy;begriffen.</p>
                </div>                   
                <div class="edu-grade text-center">                   
                  <strong>Top</strong>                   
                  <h3>1</h3>                   
                  <h5>2013 - 2014</h5>                   
                </div>                   
              </div>	
              <!-- End Education 2-->							
            </div>								
            <div class="col-md-6 col-sm-12 edu-new-line">
              <!-- Education 3-->									
              <div class="education item_left">   									 
                <div class="edu-post">                   
                  <h4>Werbeagentur</h4>                   
                  <blockquote>„Werbeagentur Wuppertal“</blockquote>                   
                  <p>Eine Werbeagentur mit Chefbetreuung möchte auch in den Suchergenbissen für Wuppertal ganz oben stehen. Fortwährende Optimierung, regelmäßig neue Inhalte, ein angepasstes Webdesign und stetige Beobachtung brachten die Seite erst dauerhaft in die Top 10 und danach an die Spitze.</p>                   
                </div>                   
                <div class="edu-grade text-center">                   
                  <strong>Top</strong>                   
                  <h3>5</h3>                   
                  <h5>2012 - 2014</h5>                   
                </div>
                <!-- End Education 3-->                   
              </div>								
            </div>								
            <div class="col-md-6 col-sm-12 edu-new-line">
              <!-- Education 4-->									
              <div class="education item_right">   									 
                <div class="edu-post">                   
                  <h4>Magazingestaltung</h4>                   
                  <blockquote>„Editorial Design Wuppertal“</blockquote>                   
                  <p>Neu im Markt und schon im Aufbau wurde mit dem SEO begonnen. Neben dem Wuppertaler Markt wird die Seite auch für Kunden aus Düsseldorf aufbereitet. Eine gute Domain und eine klar definierte Zielgruppe lassen hier noch Platz nach oben für eine weitere Such&shy;maschinen&shy;optimierung. </p>                   
                </div>                   
                <div class="edu-grade text-center">                   
                  <strong>Top</strong>                   
                  <h3>3</h3>                   
                  <h5>2014</h5>                   
                </div>                   
              </div>
              <!-- End Education 4-->								
            </div>							
          </div>        
        </div>        
        <!-- End Container Text -->    	
      </div>    
    </section>   		
    <!-- End Education Section -->
              
    <!-- Parallax Quote Section -->       		
    <div id="two-parallax" class="parallax" style="background-image: url('images/SEO-Check-Wuppertal.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">			
      <div class="parallax-overlay">				
        <div class="section-content">					
          <div class="container item_fade_in text-center">    				
            <!-- Quote title -->						
            <cite>„Suche nicht nach Fehlern, suche nach Lösungen.“</cite>						
            <p class="tagline">- Henry Ford -</p>		  			
            <!-- End Quote title -->					
          </div>				
        </div>			
      </div>		
    </div>		
    <!-- End Parallax Quote Section -->
         		
    <!-- Contact Section --> 		
    <section id="kontakt-adresse" class="section-content bg1">			
      <div class="container">				
        <!-- Section title -->				
        <div class="section-title item_bottom text-center">					
          <h1>Jetzt <i>Kontakt</i> aufnehmen</h1>          
          <p class="tagline"><em>Nutzen Sie mein Angebot einer kostenlosen SEO Erst-Analyse</em></p>					
          <div>						
            <span class="line-large"></span>					
          </div>				
        </div>				
        <!-- End Section title -->			
      </div>
            
      <!-- Google maps -->			
      <div id="map_canvas" class="item_fade_in"></div>		  
      <!-- End Google maps -->
                                                			
      <div class="container">				  
        <div class="row">              
          <div class="col-md-8">                
            <div class="form-respond text-center">
            </div>              	
            <form method="post" name="contactform registration" id="contactform form1" class="validate item_left" role="form" action="" onSubmit="return v.exec()">									                   
              <div class="form-group">										
                <div class="col-md-6">										
                  <label for="name">Name</label>										
                  <input type="text" name="name" id="name" class="form-control input-lg required" placeholder="Ihr Name">										
                </div>										
                <div class="col-md-6">										
                  <label for="firma">Firma</label>										
                  <input type="text" name="firma" id="firma" class="form-control input-lg" placeholder="Ihr Unternehmen">										
                </div>										
                <div class="col-md-6">											
                  <label for="webseite">Webseite</label>										
                  <input type="webseite" name="webseite" id="webseite" class="form-control input-lg" placeholder="Ihre Webseite">										
                </div>									
                <div class="col-md-6">											
                  <label for="keyword">Keyword(s)</label>										
                  <input type="keyword" name="keyword" id="keyword" class="form-control input-lg" placeholder="Ihre wichtigsten Keywords">										
                </div>			
                <div class="col-md-6">											
                  <label for="email">E-Mail</label>										
                  <input type="email" name="email" id="email" class="form-control input-lg required email" placeholder="Ihre E-Mail-Adresse">										
                </div>									                						
<div class="col-md-6">											
                  <label for="telefon">Telefon</label>										
                  <input type="telefon" name="telefon" id="telefon" class="form-control input-lg" placeholder="Ihre Telefonnummer">										
                </div>
              </div>									
              <div class="form-group">										
                <div class="col-md-12">										
                  <label for="message">Nachricht</label>										
                  <textarea name="message" id="message" class="form-control input-lg required" rows="9" placeholder="Ihre Nachricht"></textarea>										
                </div>									
              </div>									
              <div class="form-group">										
                <div class="col-md-12 text-right">											
                  <input type="submit" id="contactForm_submit" class="btn btn-dark" value="Submit">										
                </div>									
              </div>                  
              <input type="hidden" name="subject" value="Contact from your site">								
            </form>							
          </div>							
          <div class="col-md-4 contact-block item_right">
            <!-- Contact Details -->         	 			  
            <h4>Kontakt</h4>				
            <ul class="contact-info">					
              <li>
              <i class="fa fa-map-marker"></i>
              <span>SEO Wuppertal
                <br>Oberstraße 54
                <br>42107 Wuppertal
              </span>
              </li>					
              <li>
              <i class="fa fa-phone"></i>
              <span>0202/455222
              </span>
              </li>          
              <li>
              <i class="fa fa-mobile"></i>
              <span>0157/75722255
              </span>
              </li>					
              <li>
              <i class="fa fa-envelope"></i>
              <span>
                
                
                
                <script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
"\\\\,l=x.length;for(i=0;i<l;i++){if(i>(83+y))y*=2;y%=127;o+=String.fromChar" +
"Code(x.charCodeAt(i)^(y++));}return o;}f(\\\"\\\\7;6#:=7.u+/7+\\\\\\\\005\\" +
"\\\\\\r\\\\\\\\014KFY\\\\\\\\007G\\\\\\\\000\\\\\\\\033\\\\\\\\017\\\\\\\\r" +
"Q1L\\\\\\\\002\\\\\\\\021\\\\\\\\030\\\\\\\\036\\\\\\\\007\\\\\\\\033O\\\\\\"+
"\\037\\\\\\\\031\\\\\\\\036\\\\\\\\026:\\\\\\\\010\\\\\\\\031\\\\\\\\022Swt" +
"rsawrfd'dnxQ,/dxf\\\\\\\\177q(J5K\\\\\\\\\\\\\\\\U;KhnoESVBHy\\\\\\\\004\\\\"+
"\\\\031AGLDl^K@\\\\\\\\035FGCDPDCYU\\\\\\\\024UYI\\\\\\\\002\\\\\\\\020!\\\\"+
"\\\\177`j\\\\\\\\177u}\\\"\\\\,83)\\\"(f};)lo,0(rtsbus.o nruter};)i(tArahc." +
"x=+o{)--i;0=>i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)37=!)31/l(tAedoCrahc.x(" +
"elihw;lo=l,htgnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"                    ;
while(x=eval(x));
//-->
//]]>
</script>

                
                
                
                
              </span>
              </li>					
              <li>
              <i class="fa fa-globe"></i>
              <span>
                <a href="http://www.seo-wuppertal.net/" title="Suchmaschinenoptimierung Wuppertal">www.seo-wuppertal.net</a>
              </span>
              </li>				
            </ul>
            <!-- End Contact Details -->
          </div>              						
        </div>					
        <!-- End form contact -->			
      </div>    
    </section>    
    <!-- End Contact Section -->
        		 		
    <!-- Back to top --> 		
    <!--<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>-->
    		
    <footer class="text-center">		  
      <!-- Footer Container -->		
      <div id="three-parallax" class="parallax" style="background-image: url('images/SEO-Check-Wuppertal.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">			
        <div class="parallax-overlay parallax-background-color">				
          <div class="section-content item_top">					
            <div class="container text-center"><a href="impressum.php" title="Impressum SEO Wuppertal">Impressum &nbsp;</a><a href="datenschutz.php" title="Datenschutz Wuppertaler SEO">Datenschutz</a> &nbsp; &copy; Copyright 2014 by <a href="http://www.goerke.net/" title="Webdesign Wuppertal">Creative Services</a>
            <!--&nbsp;–&nbsp;-->
            <!--<a href=”https://plus.google.com/u/0/114045436215507119999″ rel=”author”>Serge Hendrik Goerke</a>-->
            
              <div class="social-icon">     		
                <!--<a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>        
                <a href="#"><i class="fa fa-twitter-square fa-4x"></i></a>-->        
                <a href="https://plus.google.com/u/0/b/101149254413425563496/101149254413425563496/about?rel=author" title="Google+"><i class="fa fa-google-plus-square fa-4x"></i></a>        
                <!--<a href="#"><i class="fa fa-linkedin-square fa-4x"></i></a>        
                <a href="#"><i class="fa fa-pinterest-square fa-4x"></i></a>        
                <a href="#"><i class="fa fa-vimeo-square fa-4x"></i></a>-->			
              </div>
              <!-- End Footer Social Icon -->					
            </div>				
          </div>			
        </div>		
      </div>		
      <!-- End Footer Container -->		
    </footer>		
  
  <!-- Js Library -->		
  <script type="text/javascript" src="js/modernizr.js"></script>    
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>		
  <script type="text/javascript" src="js/jquery.sticky.js"></script>		
  <script type="text/javascript" src="js/jquery.easing-1.3.pack.js"></script>	 <!-- pot.raus -->	
  <script type="text/javascript" src="js/bootstrap.min.js"></script>		
  <script type="text/javascript" src="js/bootstrap-modal.js"></script>		<!-- pot.raus -->
  <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>		
  <script type="text/javascript" src="js/jquery.appear.js"></script>		
  <script type="text/javascript" src="js/piebar.js"></script>    
  <script type="text/javascript" src="js/jquery.cycle.all.js"></script>		
  <script type="text/javascript" src="js/jquery.maximage.js"></script>    
  <script type="text/javascript" src="js/jquery-countTo.js"></script>	<!-- pot.raus -->	
  <script type="text/javascript" src="js/smoothscroll.js"></script>		
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>    <!-- pot.raus -->
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>		<!-- pot.raus -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>		
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>		
  <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>		<!-- pot.raus -->
  <script type="text/javascript" src="js/config.js"></script>    
  <script type="text/javascript" src="js/script.js"></script>		
  
  
  <!-- Js Library -->	

<?php include_once("owa.php") ?>

<?php include_once("piwik.php") ?>

  </body>
</html>