<?php
    // Start the session
    session_start();

    if (!isset($_SESSION["user"])){
        //Set Refresh header using PHP.
        header( "refresh:0;url=notloggedin.php" );
    }
?>


<!DOCTYPE html>
<html lang="nl">

<head>
  <title>Pepsi Logo</title>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML,CSS,JavaScript,">
  <meta name="author" content="Fleur Schmidt">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pepsi.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
  <!-- <link rel="stylesheet" href="css/style-501.css"> -->

  <!--Everything necessary for nav-->
  <link rel="stylesheet" href="css/style.css">
  <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet">
  <script src="js/nav.js"></script>

  <!--fonts-->
  <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="interview.php" id="previous" onclick="changePage(this.value);">&lt;</button>
        <select onchange="changePage(this.options[this.selectedIndex].value);">
            <option disabled selected value=""> -- Select -- </option>
            <option value="cover.php">Cover</option>
            <option value="about.php">About</option>
            <option value="ad-adobe.php">Adobe CC</option>
            <option value="museum.php">Nazidesign</option>
            <option value="minimalism.php">Minimalisme</option>
            <option value="sos.php">Style over Substance</option>
            <option value="50s.php">Design in de 50s</option>
            <option value="ad-studeren.php">Studeren?</option>
            <option value="interview.php">Interview</option>
            <option value="pepsi.php">Evolutie van Pepsi</option>
            <option value="flat.php">Skeuomorphism vs Flat</option>
            <option value="grunge.php">Grunge Design</option>
            <option value="colofon.php">Colofon</option>
        </select>
        <button value="flat.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/brads.png" class="brads" alt="bradsdrink">

      </div>
      <div class="textbrad">Het Brad’s Drink-logo was een blauw woordmerk tegen een witte achtergrond. Het lettertype
        was
        vet en vrij sierlijk, een kenmerk dat het Pepsi-logo een tijdje zou vasthouden, zelfs na het veranderen van
        kleuren en bekend te worden als Pepsi-Cola.</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/first.png" class="first" alt="first logo">
        <div class="ken">
          <h3>kenmerken & veranderingen</h3>
          <p>Nieuwe naam voor het drankje</p>
          <p>logo volgt het soort scripttypografie dat in die tijd erg populair was</p>
          <p>stekelige versieringen in het lettertype</p>
          <p>De letterpieken, werden langer, hoekige pieken staken uit de boven- en onderkant van de letters.</p>
        </div>
      </div>
      <div class="textfirst">Op 28 augustus 1898 werd besloten de naam van Brad's Drink te veranderen in Pepsi-Cola.
        Hierboven zie je het eerste Pepsi-Cola-logo dat werd gemaakt/gebruikt.
        Toen Brad's Drink Pepsi-Cola werd, veranderde de hoofdkleur van het logo in een opvallend rood. Een ding dat
        niet veranderde, was de merknaam van Pepsi-Cola als gezondheidshulpmiddel. Gedurende deze tijd was de slogan
        van
        Pepsi-Cola “Exhilarating, Invigorating, Aids Digestion.”
      </div>

    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1905.svg" class="second" alt="1905">
        <div class="ken">
          <h3>kenmerken & veranderingen</h3>
          <p>het logo werd wat zachter en dikker.</p>
          <p>De spikes trokken zich terug en de letters werden net iets breder.</p>
          <p>het logo behield zijn golvende, zwierige vorm.</p>
          <p>In deze versie van het logo strekt zich een lange banner uit vanaf de bovenkant van de "C" in Cola</p>
        </div>
      </div>
      <div class="textsec">Van 1905-1940 onderging het Pepsi-logo veranderingen die relatief mild lijken in
        vergelijking
        met hoe anders het er later uit zou zien. Elk progressief herontwerp hielp om het logo soepeler en moderner te
        maken, en je ziet dat het bij elke wijziging herkenbaarder wordt.
      </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1906.svg" class="second" alt="1906">
        <div class="kenfour">
          <h3>kenmerken & veranderingen</h3>
          <p>De stekelige serifs keerden terug.</p>
          <p>Het woord "Pepsi" verschoof naar een helling, waardoor het logo meer energie kreeg.</p>
          <p>Het woord 'drankje' is toegevoegd aan de bovenste banner van de C, waarmee een call-to-action in het logo
            is ingebouwd.</p>
        </div>
      </div>
      <div class="textten">Slechts een jaar later (1906) veranderde het logo opnieuw. Het was nog steeds rood, het was
        nog
        steeds golvend en het leek nog steeds veel op het logo van een ander colamerk. De herhaling van het
        Pepsi-Cola-logo in 1906 maakte de letters weer dikker en verdichtte het woordmerk, waardoor de letters "P" en
        "C" net iets groter waren dan de rest van de letters.
        Pepsi heeft nog een paar andere belangrijke wijzigingen aangebracht (zie hierboven). Dit was ook de laatste
        keer
        dat er een dubbele punt zat tussen de woorden Pepsi en Cola.
      </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1940.png" class="third" alt="1940">
        <div class="thirdtext">
          <h3>kenmerken & veranderingen</h3>
          <p>De tekst is dunner geworden</p>
          <p>het logo is minder gecondenseerd </p>
        </div>
      </div>
      <div class="texteleven">Het is nu 1940 en Pepsi Cola is uitgegroeid tot een internationaal merk. Het logo uit
        1940,
        net
        als de eerdere Pepsi-Cola-logo's, werd gedaan met klassieke letters. De letters Pepsi Cola zijn verwerkt in
        een
        rechthoekige doos met een geheel witte achtergrond. De letters zijn in het rood ontworpen.

        Het contrast tussen wit en rood gaf het logo dus zijn eigenheid. Maar een andere reden waarom het logo rode en
        witte kleuren had, was om steun te betuigen aan de inspanningen van Amerika in de Tweede Wereldoorlog. Door
        deze
        steun verloor het logo tot op zekere hoogte zijn krullen.
      </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">6 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/5060.png" class="fourth" alt="1950 & 1960">
        <div class="sixp">
          <h3>kenmerken & veranderingen</h3>
          <p>Een flesdop werd verwerkt in het logo</p>
          <p>De kleur blauw werd toegevoegd aan het logo</p>
          <p>het swoopy, swirly rode lettertype is weg</p>
          <p>Het woord 'Cola' word verwijderd uit het logo</p>
        </div>
      </div>
      <div class="textsix">In de jaren vijftig en zestig werd de flesdop verwerkt in het ontwerp van Pepsi, en dit
        werd
        uiteindelijk de basis voor de Globe die we tegenwoordig kennen. Tegenwoordig denken we dat Pepsi blauw is. Het
        is het 'blauwe team' en het 'rode team' van Coca Cola, maar vóór 1950 hadden Pepsi en de kleur blauw geen
        relatie - totdat ze hun flesdoplogo onthulden. Het woordmerk bleef hetzelfde, maar nu op een tastbaar canvas,
        in
        plaats van zwevend in de ruimte. In de golf van patriottisme die volgde op de Tweede Wereldoorlog, was het
        logisch dat het logo rood, wit en blauw was.

        1961 was het begin van de advertentiecampagne 'Pepsi Generation'. In 1962 werden er twee bull's eyes
        toegevoegd
        aan het woord Pepsi, dat werd toegevoegd om de dominantie van het bedrijf op de wereldwijde frisdrankmarkt uit
        te drukken. Sinds 1958 was Pepsi een drankje geworden 'voor degenen die jong denken', wat impliceert dat
        Coca-Cola bedoeld was voor degenen die dat niet deden, degenen die vastzaten in oude denkwijzen en niet
        verbonden waren met de jeugdcultuur van die tijd. 1964 was het jaar waarin Pepsi Diet Pepsi introduceerde,
        waardoor drinkers een nog lichtere frisdrankoptie kregen zonder suiker.
      </div>
    </div>


    <div class="mySlides fade">
      <div class="numbertext">7 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1973.png" class="fifth" alt="1973">
        <div class="seventhtext">
          <h3>kenmerken & veranderingen</h3>
          <p>Voor het eerst in de geschiedenis van het merk had het logo een gekleurde achtergrond.</p>
          <p>Het lettertype bleef ongewijzigd, maar kromp om binnen de omtrek van de wereld te passen.</p>
          <p>Het woord pepsi kreeg een blauwe kleur.</p>
        </div>
        <div class="textseven">
          In 1973 merkte het bedrijf dat mensen moderniteit en nieuwe technologieën omarmden en dat het passend was om
          een
          minimalistisch logo-ontwerp te hebben om het er netjes en duidelijk uit te laten zien.
          De overstap naar een minimalistische look ziet er misschien vrij eenvoudig uit. Maar Pepsi deed meer dan de
          randen van de dop verwijderen.

          In 1975 besloot Pepsi dat het tijd was om met de Pepsi Challenge de marktdominantie van Coke te verminderen.
          De
          Pepsi Challenge was een campagne die Pepsi in 1975 lanceerde om de wereld te bewijzen dat hun frisdrank
          beter
          smaakte dan Coca Cola. In winkelcentra en andere drukke voetgangerszones zouden voorbijgangers worden
          gevraagd
          om blinde smaaktesten van cola en pepsi uit te voeren en te zeggen wat hun voorkeur had. Volgens Pepsi gaven
          mensen de voorkeur aan hun frisdrank boven de concurrent.</div>
      </div>
    </div>


    <div class="mySlides fade">
      <div class="numbertext">8 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1987.jpg" class="sixth" alt="1987">
        <div class="eighthp">
          <h3>kenmerken & veranderingen</h3>
          <p>Een flesdop werd verwerkt in het logo</p>
          <p>De kleur blauw werd toegevoegd aan het logo</p>
          <p>het swoopy, swirly rode lettertype is weg</p>
          <p>Het woord 'Cola' word verwijderd uit het logo</p>
        </div>
      </div>
      <div class="texteighth">In 1987 gaf Pepsi het wereldlogo een kleine opknapbeurt. En hoewel het lijkt op een
        relatief
        kleine wijziging, is er eigenlijk één grote verandering gebeurd met deze update.

        (((Binnen een paar jaar stapte Pepsi van dit logo af en maakte er nog een, maar het was niet de laatste keer
        dat
        de wereld het dit logo zou zien. In 2009 introduceerde Pepsi Pepsi Throwback, een versie van de frisdrank
        gemaakt met echte suiker in plaats van fructose-glucosestroop.)))

      </div>
    </div>


    <div class="mySlides fade">
      <div class="numbertext">9 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1991.png" class="seventh" alt="1991">
        <div class="kennine">
          <h3>kenmerken & veranderingen</h3>
          <p>Pepsi en de wereldbol werden voor het eerst gescheiden in dit logo</p>
          <p>Het woord 'Pepsi' was nu cursief gedrukt</p>
        </div>
      </div>
      <div class="text">In 1991 veranderde Pepsi hun logo opnieuw, het was weer een dramatische verandering. gespannen
        over de bovenkant van het logo in blauw vind je nu 'pepsi', de wereldbol bereikte de rechterbenedenhoek van
        het
        logo. In de ruimte onder de tekst en naast de wereldbol vinden we nu een rode balk die doet denken aan de rode
        banner op eerdere versies van het logo.
        Met de scheiding van het woord 'Pepsi' en de cirkel, werden plotseling veel andere dingen mogelijk en in de
        afgelopen 20 jaar hebben we de meeste veranderingen gezien in de cirkel en de relatie van die cirkel en het
        woord 'Pepsi '.

        In april 1996 lanceerde Pepsi het ‘Project Blue’, waarbij Pepsi de achtergrondkleur op het label veranderde in
        blauw op verschillende internationale markten buiten de Verenigde Staten. De lancering omvatte uitgebreide
        publiciteitsstunts zoals een Air France Concorde-vliegtuig geschilderd in de nieuwe blauwe kleuren en een
        banner
        op het Mir-ruimtestation.
      </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">10 / 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/1998.png" class="eighth" alt="1998">
        <div class="kenten">
          <h3>kenmerken & veranderingen</h3>
          <p>kleuren werden omgedraaid waardoor de tekst wit werd en de achtergrond blauw </p>
          <p>De globe werd bewegend gemaakt waardoor hij net onder het woordmerk kwam te staan</p>
          <p>Het logo kreeg diepte en de achtergrond kleur kreeg een kleur verloop</p>
        </div>
      </div>
      <div class="text">Ook in 1998 probeerde het bedrijf iets nieuws, ze keerden de kleuren op het logo om. In plaats
        van blauwe tekst op een witte achtergrond, kreeg het een blauwe achtergrond met het woord "Pepsi" in het wit.
        Het rood was van de achtergrond verdwenen en de globe bewoog op en neer om net onder het woordmerk te zitten.
        En
        in tegenstelling tot andere versies van het logo kreeg dit ontwerp diepte, dit ontwerp had ook een verloop op
        de
        achtergrond. Voor het eerst sinds Pepsi de wereld begon te gebruiken, was het niet geschetst, maar stond het
        daar gewoon, tegen de blauwe achtergrond.
        Leuk weetje: in 1998 vierde het bedrijf zijn 100-jarig bestaan
        Pepsi lanceerde in 1999 een nieuwe slogan en merkcampagne: "The Joy of Cola." Met een geheel nieuwe jingle en
        een reeks commercials was het merk klaar voor het nieuwe millennium.
      </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">11/ 11</div>
      <div class="box">
        <img src="img/fleur/pepsi/36.png" class="nine" alt="2003 & 2006">
        <img src="img/fleur/pepsi/814.png" class="ten" alt="2008 & 2014">
        <div class="keneleven">
          <h3>kenmerken & veranderingen</h3>
          <p>In 2003 werd er gekozen voor een moderner serif lettertype</p>
          <p>De letters kregen een lichtgrijze kleur om het meer driedimensionaal te maken</p>
          <p>De linkerbenedenhoek van het logo werd de lichtbron</p>
          <p>De wereld bol en het woord kregen een lichtblauwe omlijning</p>
          <p>In 2006 veranderde het logo compleet en werd de wereldbol vervangen door een koud glas frisdrank met
            druppels op het oppervlak</p>
          <p>In 2008 veranderde het logo van een 3D ontwerp in een 2D
            logo</p>
          <p>Het lettertype veranderde in een lettertype zonder serif en hoofdletters</p>
        </div>
      </div>
      <div class="textfudge">Op 4 februari 2003 werd het logo opnieuw vernieuwd, met een iets moderner en
        serif-lettertype,
        de letters kregen ook een lichtgrijze tint om het meer driedimensionaal te maken en ook de Pepsi-wereld werd
        meer driedimensionaal. Het achtergrondverloop veranderde om de linkerbenedenhoek de lichtbron te maken in
        plaats
        van de wereldbol, zowel de wereldbol als het woordmerk waren lichtblauw omlijnd om ze tegen de achtergrond te
        laten springen.
        Pepsi's logo-ontwerp uit 2006 "leek" op wie ze waren als een cool frisdrankmerk, Pepsi behaalde hun plaats als
        het coole frisdrankmerk in de cola-oorlogen. In 2006 zag het logo er letterlijk cool uit.
        Dit logo veranderde de nu volledig driedimensionale bol in een koud glas frisdrank met glinsterende
        druppeltjes
        condens die zich op het oppervlak verzamelden. Het lettertype is hetzelfde gebleven als in de versie van 2003.
        De
        versie van 2006 was cool, maar tegen 2008 was het tijd voor een nieuwe verandering.
        Deze keer stond Pepsi
        voor een grote verandering. Ze hebben een geheel nieuw logo gemaakt.
      </div>
      <div class="texttaart"> Pepsi betaalde Arnell Group ongeveer een
        miljoen dollar om hun volgende logo te ontwerpen.
        De 3D-wereld was weer 2D. Het Pepsi-lettertype waar de wereld van hield was verdwenen en in plaats daarvan,
        een
        lettertype zonder serifs en zonder hoofdletters.
        De wereldbol van het logo van 2008 had drie banddiktes, één voor gewone Pepsi, één voor Diet Pepsi en één voor
        Pepsi Max.
        Het nieuwe logo had witte contouren en de wervelingen in de hele wereld waren gemaakt om eruit te zien als een
        glimlach.
        Niet iedereen glimlachte echter als de wervelingen in dit logo. Velen noemden het veel te simpel en zelfs lui.
        Anderen noemden het goedkoop en zielloos. Nadat Arnell Group in het openbaar de wetenschap achter het logo had
        besproken, zoals hun gebruik van de gulden snede om de perfecte hoek voor de wereld te bepalen en deze te
        vergelijken met de Mona Lisa, noemden critici het pretentieus en belachelijk. Ondanks de grotendeels negatieve
        publieke reactie op het herontwerp, stond Pepsi bij hun keuze om een nieuwe naam te geven en in 2014 het logo
        enigszins aan te passen, waarbij de blauwe omtrek over de hele wereld werd verwijderd.
      </div>
    </div>




















    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
      <span class="dot" onclick="currentSlide(9)"></span>
      <span class="dot" onclick="currentSlide(10)"></span>
      <span class="dot" onclick="currentSlide(11)"></span>

    </div>
  </div>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

</body>

</html>