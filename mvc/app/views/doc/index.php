<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Planor
    </title>
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <h1 style="text-align: center">Plant Web Organizer</h1>
    </header>

    <section>
        <h1>Autori</h1>
        <h3>Munteanu Cristian</h3>
        <h3>Savin Rares-Emil</h3>
        <h3>Sipoteanu Tiberiu-Constantin</h3>
        <h3>Sursa cod</h3>
        <dd><a href="https://github.com/tsipoteanu99/PlanOr/tree/master">Sursa GIT</a></dd>

    </section>

    <section>
        <h1>PlanOr (Plant Web Organizer) [B]</h1>
        <h2>Cerinta proiectului:</h2>
        <p>Sa se implementeze o aplicatie Web de tip ierbar digital, oferind suport pentru organizarea colectiilor reprezentarilor grafice ale plantelor presate si atributelor aferente. Pe baza facilitatilor de cautare multi-criteriala, se vor genera, recomanda si partaja albume tematice – e.g., plante medicinale, flori din zona montana si altele. Se vor genera statistici diverse disponibile in formate deschise – minimal, CSV si PDF. Se va crea, de asemenea, un clasament al celor mai populare plante colectate, disponibil si ca flux de date RSS.</p>
    </section>

    <section>
        <h3><b>Etapele dezvoltarii proiectului</b></h3>
        1. Design/Arhitectura proiect<br>
        2. Creare pagini front-end <br>
        3. Creare baza de date si tabele<br>
        4. Implementare scripturi PHP back-end<br>
        5. Adaugare functionalitati AJAX si JavaScript<br>
        6. Testing<br>
    </section>

    <section>
        <h2>Functionalitatile implementate ale fiecarei persoane</h2>
        <br>
        <h3>Munteanu Cristian</h3>
        <h4>Frontend:</h4>
        1.Pagina Login<br>
        2.Pagina Home<br>
        3.Pagina Register<br>
        <h3>Savin Rares-Emil</h3>
        <h4>Frontend:</h4>
        1.Pagina generala de setari si paginile derivate<br>
        2.Pagina de topuri<br>
        3.Imbunatatiri la pagina de register<br>
        4.Paginile de Search Users si Search Albums<br>
        5.Responsiveness<br>
        6.Creare documentatie<br>
        <h4>Baze de date:</h4>
        1.Crearea arhitecturii bazei de date, crearea tabelelor si relatiilor dintre tabele<br>
        <h4>Backend:</h4>
        1.Functionalitatea Login<br>
        2.Functionalitatea Register<br>
        3.Functionalitatile aferente setarilor(adaugare nume, schimbari parola, adresa de e-mail)<br>
        4.Functionalitatea cautarii de albume<br>
        5.Functionalitatea de adaugare like-uri la fotografii<br>
        6.Luarea de date aferente fotografiilor, albumelor si numarului de like-uri pentru pagina de profil<br>
        7.Integrare front-back la login, register, setari(si toate paginile aferente), pagina pozelor<br>
        8.Implicare si la:
        <ul>
            <li>Structura MVC</li>
            <li>Functionalitate adaugare poze in album</li>
        </ul>
        <h3>Sipoteanu Tiberiu-Constantin</h3>
        <h4>Frontend:</h4>
        1.Pagina profile<br>
        2.Pagina albumelor<br>
        3.Pagina fotografiilor<br>
        4.Paginile de Search Users si Search Albums<br>
        5.Meniul de navigatie(navbar)<br>
        6.Responsiveness<br>
        7.Creare Documentatie<br>
        <h4>Baze de date</h4>
        1.Adaugare de campuri, necesare implementarii unor functionalitati, la anumite tabele, dupa crearea arhitecturii generale<br>
        <h4>Backend</h4>
        1.Structura generala MVC<br>
        2.Salvarea datelor la logare<br>
        3.Functionalitatea adaugare album<br>
        4.Functionalitatea adaugare poze in album<br>
        5.Functionalitatea adaugare tag-uri<br>
        6.Functionalitate cautare albume<br>
        7.Integrare front-back la paginile profil, album, informatii fotografie<br>
        8.Implicare si la:
        <ul>
            <li>Functionalitate login</li>
        </ul>
    </section>
    <section>
        <h2>Ghid de utilizare</h2>
        1.Utilizatorul trebuie sa se inregistreze. Daca un camp nu este completat va primi o eroare.
        Apoi se verifica daca datele sunt valide. Nu se pot creea mai multe conturi cu acelasi username sau e-mail. Dupa inregistrare
        se va directiona catre pagina de login. <br>
        2.In pagina de login se verifica daca combinatia de username si parola este valida. In caz negativ se afiseaza mesajul
        'combinatia username, parola este gresita' si aveti posibilitate de logare din nou, iar in caz pozitiv sunteti trimisi pe pagina de home a site-ului.<br>
        3.In pagina home, se gaseste meniul care in functie de dorinta te duce pe pagina aleasa cu functionalitatea ei. Pe aceasta pagina
        sunt prezentate principalele functionalitati ale site-ului.<br>
        4.In pagina Profilul meu se gasesc informatiile generale ale user-ului, statistici pentru albume, fotografii si aprecieri, albumele user-ului, el folosindu-se tot de aceasta pagina pentru adaugarea albumelor noi<br>
        5.Pagina fiecarui album afiseaza fotografiile aferente acestuia, user-ul putand sa adauge tag-uri pentru album sau sa vada informatiile unei fotografii. De asemenea, de aici se adauga fotografiile noi.<br>
        6.Pagina fotografiilor aduce cateva informatii generale la fotografii si numarul de aprecieri ale acestora, iar user-ul poate sa lase aprecieri fotografiei.<br>
        7.Pe pagina de search albums, se pot gasi albumele cu tag-urile cautate de catre utilizator<br>
        8.Pe pagina de topuri se pot vedea cele mai apreciate albume<br>
        9.Pe pagina setarilor, se pot schimba datele utilizatorului: numele, prenumele, parola, adresa de e-mail.<br>
    </section>
    <section>
        <h2>Tehnologii utilizate</h2>
        <ul>
            <li><a href="https://en.wikipedia.org/wiki/HTML" target="_blank">HTML5 </a></li>
            <li><a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">CSS</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">Javascript</a></li>
            <li> <a href="https://www.php.net/" target="_blank">PHP</a></li>
            <li> <a href="https://www.mysql.com/" target="_blank">MySQL</a></li>
            <li><a href="https://www.w3schools.com/xml/ajax_intro.asp" target="_blank">AJAX</a></li>
        </ul>
    </section>
    <section>
        <h2>Servicii folosite:</h2>
        <ul>
            <li><a href="https://github.com/" target="_blank">Github</a></li>
            <li><a href="https://www.apachefriends.org/" target="_blank">XAMPP</a></li>
        </ul>
    </section>
    <section>
        <h2>Bibliografie</h2>
        <ul>
            <li><a href="https://www.w3schools.com/" target="_blank">https://www.w3schools.com</a><br></li>
            <li><a href="https://www.youtube.com/watch?v=zvt8ff3d63Q/" target="_blank">https://www.youtube.com/watch?v=zvt8ff3d63Q</a><br></li>
            <li><a href="https://www.youtube.com/watch?v=RRcN1i7xcZE" target="_blank">https://www.youtube.com/watch?v=RRcN1i7xcZE</a><br></li>
            <li><a href="https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD/" target="_blank">https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD</a><br></li>
            <li><a href="https://www.youtube.com/watch?v=JaRq73y5MJk" target="_blank">https://www.youtube.com/watch?v=JaRq73y5MJk</a><br></li>
            <li><a href="https://stackoverflow.com/" target="_blank">https://stackoverflow.com/</a></li>
            <li><a href="https://www.quora.com/How-do-I-create-a-PHP-button-to-run-a-script-on-a-click" target="_blank">https://www.quora.com/How-do-I-create-a-PHP-button-to-run-a-script-on-a-click</a></li>
            <li><a href="https://www.youtube.com/watch?v=82hnvUYY6QA&fbclid=IwAR3jRZbIC5rb-7QrLQdE_vz8aaGk-l6puh3iu2bZfshCb_5zHH--WszkPEk" target="_blank">https://www.youtube.com/watch?v=82hnvUYY6QA&fbclid=IwAR3jRZbIC5rb-7QrLQdE_vz8aaGk-l6puh3iu2bZfshCb_5zHH--WszkPEk</a></li>
            <li><a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_dropdown_navbar" target="_blank">https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_dropdown_navbar</a></li>
            <li><a href="https://www.php.net/manual/en/features.file-upload.put-method.php" target="_blank">https://www.php.net/manual/en/features.file-upload.put-method.php</a></li>
            <li><a href="https://stackoverflow.com/questions/6805570/how-do-i-access-php-rest-api-put-data-on-the-server-side/6805587#6805587" target="_blank">https://stackoverflow.com/questions/6805570/how-do-i-access-php-rest-api-put-data-on-the-server-side/6805587#6805587</a></li>
    </section>