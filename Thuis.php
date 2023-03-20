<!DOCTYPE html>
<?php 
    require "DBPostProcess.php"; 
    require "CreateTables.php"; 
?>
<html style="font-size: 16px;" lang="nl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <title>Thuis</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Thuis.css" media="screen">
    <script type="text/javascript" src="JSFunctions.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>
<body class="u-body u-xl-mode" data-lang="nl">
<header class="u-align-left u-clearfix u-header u-section-row-container" id="sec-3d37">
    <div class="u-section-rows">
        <div class="u-palette-5-dark-2 u-section-row u-section-row-1" id="sec-46aa">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank"
                       href="https://www.facebook.com/name"><span
                                class="u-icon u-social-icon u-social-facebook u-icon-1">
                            <img src="images/facebook.png">
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span
                                class="u-icon u-social-icon u-social-twitter u-icon-2">
                                <img src="images/twitter.png">
                            </span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank"
                       href="https://www.instagram.com/name"><span
                                class="u-icon u-social-icon u-social-instagram u-icon-3">
                            <img src="images/instgram.png">
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="whatsapp" target="_blank"
                       href="https://www.whatsapp.com/name"><span
                                class="u-icon u-social-icon u-social-whatsapp u-icon-3">
                            <img src="images/whatsapp.png">
                            </svg></span>
                    </a>
                </div>
                <form action="#" method="get" class="u-border-1 u-border-grey-30 u-search u-search-right u-search-1">
                    <button class="u-search-button" type="submit">
                <span class="u-search-icon u-spacing-10 u-text-grey-40">
                <img src="images/search.png" style="height: 18px">
                </span>
                    </button>
                    <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                </form>
                <nav data-position="" class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                        <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
                           href="#" style="padding: 2px 0px; font-size: calc(1em + 4px);">
                            <svg class="u-svg-link" viewBox="0 0 24 24">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                            </svg>
                            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px"
                                 y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item"><a
                                        class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                        href="Thuis.php" style="padding: 10px 20px;">Thuis</a>
                            </li>
                            <li class="u-nav-item"><a
                                        class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                        href="Contact.html" style="padding: 10px 20px;">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                              href="Thuis.php">Thuis</a>
                                    </li>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
                <a href="http://localhost/Site1/Thuis.php" class="u-image u-logo u-image-1" data-image-width="287"
                   data-image-height="162">
                    <img src="images/BASBB.png" class="u-logo-image u-logo-image-1" data-image-width="80">
                </a>
            </div>
        </div>
        <div class="u-section-row" id="sec-37e8">
            <div class="u-clearfix u-sheet u-sheet-2"></div>
        </div>
    </div>
</header>
<section class="u-clearfix u-section-1" id="sec-9ca7">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
            <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1"
                       id="tab1" onclick="TabSwitcher(1)" role="tab" aria-controls="tab-0da5" aria-selected="true">Klant
                        tabel</a>
                </li>
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2"
                       id="tab2" onclick="TabSwitcher(2)" role="tab" aria-controls="tab-14b7" aria-selected="false">Leveranciers
                        tabel</a>
                </li>
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3"
                       id="tab3" onclick="TabSwitcher(3)" role="tab" aria-controls="tab-2917" aria-selected="false">Inkoop
                        order</a>
                </li>
                <li class="u-tab-item u-tab-item-4" role="presentation">
                    <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4"
                       id="tab4" onclick="TabSwitcher(4)" role="tab" aria-controls="link-tab-93fc"
                       aria-selected="false">verkoop oder</a>
                </li>
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5"
                       id="tab5" onclick="TabSwitcher(5)" role="tab" aria-controls="tab-977a" aria-selected="false">Artikel
                        tabel</a>
                </li>
            </ul>


            <div>
                <!---------------------------------------------KLANTTABEL----------------------------------------------------->
                <div class="hidden" id="tab1content">
                    <div class="u-container-layout u-container-layout-1">
                        <h6 class="u-text u-text-default u-text-4">Zoek hier via&nbsp; ID of ?
                        </h6>

                        <!---------------------------SEARCH BAR------------------------>
                        <form action="Thuis.php" method="post"
                              class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
                            <button class="u-search-button" type="submit">
                                <span class="u-search-icon u-spacing-10">
                                  <img src="images/search.png" style="height: 18px;">
                                </span>
                            </button>
                            <input type="hidden" name="search">
                            <input class="u-search-input" name="KlantSearch" value="" placeholder="Search">
                        </form>
                        <!---------------------------SEARCH BAR------------------------>

                        <div class="u-expanded-width u-table u-table-responsive u-table-1">
                            <table class="u-table-entity">
                                <tbody class="u-table-alt-grey-5 u-table-body">
                                <tr style="height: 38px;">
                                    <!--<td class="u-table-cell">Rij</td>-->
                                    <td></td>
                                    <td class="u-table-cell"> Klantid</td>
                                    <td class="u-table-cell"> Klantnaam</td>
                                    <td class="u-table-cell"> KlantEmail</td>
                                    <td class="u-table-cell">KlantAdres</td>
                                    <td class="u-table-cell">KlantPostcode</td>
                                    <td class="u-table-cell">KlantWoonplaats</td>
                                    <td></td>
                                    <td>
                                        <button class="Create-button" onclick="ShowCreateMenu()"
                                                onmouseover="SetCorrectElements_klant('KlantHiddenCreate', 'CreateButtonKlant')"
                                                id="CreateButtonKlant">Create
                                        </button>
                                    </td>
                                </tr>

                                <!--THIS TR WILL ONLY SHOW IF THE BUTTON (id=CreateButton) IS CLICKED-->
                                <tr id="KlantHiddenCreate">
                                    <form action="Thuis.php" method="post">
                                        <td></td>
                                        <td></td>
                                        <td><input type="text" name="naam" placeholder="Klantnaam" >
                                        </td>
                                        <td><input type="text" name="email" placeholder="Klantemail"
                                            ></td>
                                        <td><input type="text" name="adres" placeholder="Klantadres"
                                                   ></td>
                                        <td><input type="text" name="postcode" placeholder="Klantpostcode"
                                                   ></td>
                                        <td><input type="text" name="plaats" placeholder="Klantwoonplaats"
                                                   ></td>
                                        <td><input type="hidden" name="createklant"
                                                   placeholder="You shouldn't be seeing this" value="1"></td>
                                        <td>
                                            <button class="Create-button">Save</button>
                                        </td>
                                    </form>
                                </tr>
                                <!--END CREATE FORM -->
                                </tbody>
                                <?php
                                if (isset($_POST["KlantSearch"])) {
                                    KlantSearch($_POST["KlantSearch"]);
                                } else {
                                    CreateKlantTable();
                                }
                                //CREATE THE KLANT TABEL EN ALLE KNOPPEN//?>
                            </table>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------KLANTTABEL----------------------------------------------------->

                <!---------------------------------------------LEVERANCIERTABEL----------------------------------------------->
                <div class="hidden" id="tab2content">
                    <div class="u-container-layout u-container-layout-2">
                        <h6 class="u-text u-text-default u-text-4">Zoek hier via&nbsp; ID of ?
                        </h6>

                        <!---------------------------SEARCH BAR------------------------>
                        <form action="Thuis.php" method="post"
                              class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-2">
                            <button class="u-search-button" type="submit">
                                <span class="u-search-icon u-spacing-10">
                                  <img src="images/search.png" style="height: 18px;">
                                </span>
                            </button>
                            <input class="u-search-input" name="LeveranSearch" value="" placeholder="Search">
                        </form>
                        <!---------------------------SEARCH BAR------------------------>

                        <div class="u-expanded-width u-table u-table-responsive u-table-2">
                            <table class="u-table-entity">
                                <tbody class="u-table-alt-grey-5 u-table-body">
                                <tr style="height: 38px;">
                                    <!--<td class="u-table-cell">Rij</td>-->
                                    <td></td>
                                    <td class="u-table-cell">Levid</td>
                                    <td class="u-table-cell">levNaam</td>
                                    <td class="u-table-cell">levContact</td>
                                    <td class="u-table-cell">levAmail</td>
                                    <td class="u-table-cell">levAdres</td>
                                    <td class="u-table-cell">levPostcode</td>
                                    <td class="u-table-cell">levWoonplaats</td>
                                    <td></td>
                                    <td>
                                        <button class="Create-button" onclick="ShowCreateMenu()"
                                                onmouseover="SetCorrectElements_leverancier('LeverancierHiddenCreate', 'CreateButtonLeverancier')"
                                                id="CreateButtonLeverancier">Create
                                        </button>
                                    </td>
                                </tr>

                                <!--THIS TR WILL ONLY SHOW IF THE BUTTON (id=CreateButton) IS CLICKED-->
                                <tr id="LeverancierHiddenCreate">
                                    <form action="Thuis.php" method="post">
                                        <td></td>
                                        <td></td>
                                        <td><input type="text" name="naam" placeholder="levnaam" >
                                        </td>
                                        <td><input type="text" name="contact" placeholder="levcontact"
                                                   ></td>
                                        <td><input type="text" name="email" placeholder="levemail" >
                                        </td>
                                        <td><input type="text" name="adres" placeholder="levadres" >
                                        </td>
                                        <td><input type="text" name="postcode" placeholder="levpostcode"
                                                   ></td>
                                        <td><input type="text" name="plaats" placeholder="levwoonplaats"
                                                   ></td>
                                        <td><input type="hidden" name="createleverancier"
                                                   placeholder="You shouldn't be seeing this" value="1"></td>
                                        <td>
                                            <button class="Create-button">Save</button>
                                        </td>
                                    </form>
                                </tr>
                                <!--END CREATE FORM -->
                                </tbody>
                                <?php
                                if (isset($_POST["LeveranSearch"])) {
                                    echo "today is the day";
                                    LeverancierSearch($_POST["LeveranSearch"]);
                                } else {
                                    CreateLeverancierTable();
                                }
                                //CREATE THE KLANT TABEL EN ALLE KNOPPEN//?>
                            </table>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------LEVERANCIERTABEL----------------------------------------------->

                <!---------------------------------------------INKOOPTABEL---------------------------------------------------->
                <!----------Dhr.Allen----------->
                <div class="hidden" id="tab3content">
                    <div class="u-container-layout u-container-layout-3">
                        <h6 class="u-text u-text-default u-text-4">Zoek hier via&nbsp; ID of ?
                        </h6>

                        <!---------------------------SEARCH BAR------------------------>
                        <form action="Thuis.php" method="post" class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
                            <button class="u-search-button" type="submit">
                                <span class="u-search-icon u-spacing-10">
                                  <img src="images/search.png" style="height: 18px;">
                                </span>
                            </button>
                            <input class="u-search-input" name="InkoopSearch" value="" placeholder="Search">
                        </form>
                        <!---------------------------SEARCH BAR------------------------>

                        <div class="u-expanded-width u-table u-table-responsive u-table-3">
                            <table class="u-table-entity">
                                <tbody class="u-table-alt-grey-5 u-table-body">
                                <tr style="height: 38px;">
                                    <!--<td class="u-table-cell">Rij</td>-->
                                    <td></td>
                                    <td class="u-table-cell">InkoopOrder ID</td>
                                    <td class="u-table-cell">Leverancier ID</td>
                                    <td class="u-table-cell">Artikel ID</td>
                                    <td class="u-table-cell">InkoopOrderDatum</td>
                                    <td class="u-table-cell">inkOrdBestAantal</td>
                                    <td class="u-table-cell">InkoopOrderStatus</td>
                                    <td></td>
                                    <td>
                                        <button class="Create-button" onclick="ShowCreateMenu()"
                                            onmouseover="SetCorrectElements_inkoop('InkoopHiddenCreate', 'CreateButtonInkoop')"
                                            id="CreateButtonInkoop">Create
                                        </button>
                                    </td>
                                </tr>

                                <!--THIS TR WILL ONLY SHOW IF THE BUTTON (id=CreateButton) IS CLICKED-->
                                <tr id="InkoopHiddenCreate">
                                    <form action="Thuis.php" method="post">
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="number" placeholder="levid" ></td>
                                        <td><input type="number" name="number" placeholder="artid" ></td>
                                        <td><input type="date" name="date" placeholder="InkoopOrderDatum" ></td>
                                        <td><input type="date" name="date" placeholder="Bestel Aantal" ></td>
                                        <td><input type="text" name="status" placeholder="InkoopOrderStatus" ></td>
                                        <td><input type="hidden" name="createinkooporder" placeholder="No see" value="1" ></td>
                                        <td>
                                            <button class="Create-button">Save</button>
                                        </td>
                                    </form>
                                </tr>
                                <!--END CREATE FORM -->
                                </tbody>
                                <?php
                                if (isset($_POST["InkoopSearch"])) {
                                    InkoopOrderSearch($_POST["InkoopSearch"]);
                                } 
                                else { CreateInkoopOrderTable(); }
                                //CREATE THE KLANTINKOOP TABEL EN OVERIGE VEREISTEN//?>
                            </table>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------INKOOPTABEL---------------------------------------------------->

                <!---------------------------------------------VERKOOPTABEL---------------------------------------------------->
                <div class="hidden" id="tab4content">
                    <div class="u-container-layout u-container-layout-4">
                        <h6 class="u-text u-text-default u-text-4">Zoek hier via&nbsp; ID of ?
                        </h6>
                        <form action="#" method="get"
                              class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-4">
                            <button class="u-search-button" type="submit">
                    <span class="u-search-icon u-spacing-10">
                       <img src="images/search.png" style="height: 18px;">
                    </span>
                            </button>
                            <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                        </form>
                        <div class="u-expanded-width u-table u-table-responsive u-table-4">
                            <table class="u-table-entity">
                                <tbody class="u-table-alt-grey-5 u-table-body">
                                <tr style="height: 51px;">
                                    <td class="u-table-cell">Rij</td>
                                    <td class="u-table-cell"> VerkOrdId</td>
                                    <td class="u-table-cell"> KlantId</td>
                                    <td class="u-table-cell"> KlantId</td>
                                    <td class="u-table-cell">VerkOrdDatum</td>
                                    <td class="u-table-cell">VerkOrdBestAantal</td>
                                    <td class="u-table-cell">VerkOrdStatus</td>
                                    <td class="u-table-cell u-table-cell-128"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------VERKOOPTABEL---------------------------------------------------->

                <!---------------------------------------------ARTIKELTABEL---------------------------------------------------->
                <div class="hidden" id="tab5content">
                    <div class="u-container-layout u-container-layout-5">
                        <h6 class="u-text u-text-default u-text-4">Zoek hier via&nbsp; ID of ?
                        </h6>
                        <form action="#" method="get"
                              class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-5">
                            <button class="u-search-button" type="submit">
                    <span class="u-search-icon u-spacing-10">
                       <img src="images/search.png" style="height: 18px;">
                    </span>
                            </button>
                            <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                        </form>
                        <div class="u-expanded-width u-table u-table-responsive u-table-5">
                            <table class="u-table-entity">
                                <tbody class="u-table-alt-grey-5 u-table-body">
                                <tr style="height: 51px;">
                                    <td class="u-table-cell">Rij</td>
                                    <td class="u-table-cell"> ArtId</td>
                                    <td class="u-table-cell"> ArtOmschrijving</td>
                                    <td class="u-table-cell"> ArtInkoop</td>
                                    <td class="u-table-cell">ArtVerkoop</td>
                                    <td class="u-table-cell">ArtVoorraad</td>
                                    <td class="u-table-cell">ArtMinVoorraad</td>
                                    <td class="u-table-cell">ArtMaxVoorraad</td>
                                    <td class="u-table-cell">ArtLocatie</td>
                                    <td class="u-table-cell">LevId</td>
                                    <td class="u-table-cell u-table-cell-171"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------ARTIKELTABEL---------------------------------------------------->
            </div>
        </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ff6f">
    <div>
        <div>
            <div>
                <h2>Contact Us</h2>
                <p>Boodschappenservice Bas Brengt Boodschappen</p>
                <div style="display: block">
                    <p> U kunt met ons GRATIS contact opnemen</p>
                    <a href="" style="display: inline-flex;"><span class="u-icon"><img src="images/call.png"
                                                                                       style="height: 15px">
                    </span>&nbsp;0800 11 11 216
                    </a>
                    <a href="" style="display: inline-flex;"><span class="u-file-icon u-icon u-icon-2"><img
                                    src="images/email.png" style="height: 15px">
                    </span>&nbsp;​ ommoord@basbootschap.nl
                    </a>
                </div>
                <div style="display: inline-flex;">
                    <a class="u-social-url" title="facebook" target="_blank"
                       href="https://www.facebook.com/name"><span
                                class="u-icon u-social-icon u-social-facebook u-icon-1">
                            <img src="images/facebook.png">
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span
                                class="u-icon u-social-icon u-social-twitter u-icon-2">
                                <img src="images/twitter.png">
                            </span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank"
                       href="https://www.instagram.com/name"><span
                                class="u-icon u-social-icon u-social-instagram u-icon-3">
                            <img src="images/instgram.png">
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="whatsapp" target="_blank"
                       href="https://www.whatsapp.com/name"><span
                                class="u-icon u-social-icon u-social-whatsapp u-icon-3">
                            <img src="images/whatsapp.png">
                            </svg></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="https://nicepage.one" target="_blank">
        <span>Website Builder</span>
    </a>.
</section>

</body>
</html>

<script>
    if (sessionStorage.getItem("CurrentTab")) {
        TabSwitcher(sessionStorage.getItem("CurrentTab"))
    } else {
        TabSwitcher(1);
    }

    function TabSwitcher(tab) {
        sessionStorage.setItem("CurrentTab", tab);
        switch (parseInt(tab)) {
            case 1:
                document.getElementById("tab1").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1 active");
                document.getElementById("tab2").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2");
                document.getElementById("tab3").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3");
                document.getElementById("tab4").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4");
                document.getElementById("tab5").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5");

                document.getElementById("tab1content").removeAttribute("class", "hidden");
                document.getElementById("tab2content").setAttribute("class", "hidden");
                document.getElementById("tab3content").setAttribute("class", "hidden");
                document.getElementById("tab4content").setAttribute("class", "hidden");
                document.getElementById("tab5content").setAttribute("class", "hidden");
                break;
            case 2:
                document.getElementById("tab1").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1");
                document.getElementById("tab2").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2 active");
                document.getElementById("tab3").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3");
                document.getElementById("tab4").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4");
                document.getElementById("tab5").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5");

                document.getElementById("tab1content").setAttribute("class", "hidden");
                document.getElementById("tab2content").removeAttribute("class", "hidden");
                document.getElementById("tab3content").setAttribute("class", "hidden");
                document.getElementById("tab4content").setAttribute("class", "hidden");
                document.getElementById("tab5content").setAttribute("class", "hidden");
                break;
            case 3:
                document.getElementById("tab1").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1");
                document.getElementById("tab2").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2");
                document.getElementById("tab3").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3 active");
                document.getElementById("tab4").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4");
                document.getElementById("tab5").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5");

                document.getElementById("tab1content").setAttribute("class", "hidden");
                document.getElementById("tab2content").setAttribute("class", "hidden");
                document.getElementById("tab3content").removeAttribute("class", "hidden");
                document.getElementById("tab4content").setAttribute("class", "hidden");
                document.getElementById("tab5content").setAttribute("class", "hidden");
                break;
            case 4:
                document.getElementById("tab1").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1");
                document.getElementById("tab2").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2");
                document.getElementById("tab3").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3");
                document.getElementById("tab4").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4 active");
                document.getElementById("tab5").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5");

                document.getElementById("tab1content").setAttribute("class", "hidden");
                document.getElementById("tab2content").setAttribute("class", "hidden");
                document.getElementById("tab3content").setAttribute("class", "hidden");
                document.getElementById("tab4content").removeAttribute("class", "hidden");
                document.getElementById("tab5content").setAttribute("class", "hidden");
                break;
            case 5:
                document.getElementById("tab1").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1");
                document.getElementById("tab2").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2");
                document.getElementById("tab3").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3");
                document.getElementById("tab4").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4");
                document.getElementById("tab5").setAttribute("class", "u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5 active");

                document.getElementById("tab1content").setAttribute("class", "hidden");
                document.getElementById("tab2content").setAttribute("class", "hidden");
                document.getElementById("tab3content").setAttribute("class", "hidden");
                document.getElementById("tab4content").setAttribute("class", "hidden");
                document.getElementById("tab5content").removeAttribute("class", "hidden");
                break;
        }
    }
</script>