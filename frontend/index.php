<?php
session_start();
if (!isset($_SESSION["dniCliente"])) {
    $dniCliente = "";
}
if (!isset($_SESSION["idUnico"])) {
    $idUnico = "";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>LootClan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <!--FastBootstrap-->
    <script type="module" src="Scripts/QuantityCardShop.js"></script>
    <script type="module" src="Scripts/setUsername.js"></script>



</head>

<body>
    <header>
        <!-- navbar -->

        <nav class="navbar">
            <div
                class="container-fluid d-flex justify-content-center gap-2 justify-content-sm-around justify-content-lg-between mt-3 mx-lg-5 mx-sm-3 ">
                <a class="navbar-brand" href="./index.php">
                    <img src="imgs/icon.png" alt="Logo" width="70" height="50"
                        class="d-inline-block align-text-top">

                </a>
                <div class="d-flex flex-column flex-sm-row gap-5 align-items-center">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#071b65"></rect>
                                <path
                                    d="M5.101,4h-.101c-1.981,0-3.615,1.444-3.933,3.334L26.899,28h.101c1.981,0,3.615-1.444,3.933-3.334L5.101,4Z"
                                    fill="#fff"></path>
                                <path d="M22.25,19h-2.5l9.934,7.947c.387-.353,.704-.777,.929-1.257l-8.363-6.691Z"
                                    fill="#b92932"></path>
                                <path d="M1.387,6.309l8.363,6.691h2.5L2.316,5.053c-.387,.353-.704,.777-.929,1.257Z"
                                    fill="#b92932"></path>
                                <path
                                    d="M5,28h.101L30.933,7.334c-.318-1.891-1.952-3.334-3.933-3.334h-.101L1.067,24.666c.318,1.891,1.952,3.334,3.933,3.334Z"
                                    fill="#fff"></path>
                                <rect x="13" y="4" width="6" height="24" fill="#fff"></rect>
                                <rect x="1" y="13" width="30" height="6" fill="#fff"></rect>
                                <rect x="14" y="4" width="4" height="24" fill="#b92932"></rect>
                                <rect x="14" y="1" width="4" height="30" transform="translate(32) rotate(90)"
                                    fill="#b92932"></rect>
                                <path d="M28.222,4.21l-9.222,7.376v1.414h.75l9.943-7.94c-.419-.384-.918-.671-1.471-.85Z"
                                    fill="#b92932"></path>
                                <path
                                    d="M2.328,26.957c.414,.374,.904,.656,1.447,.832l9.225-7.38v-1.408h-.75L2.328,26.957Z"
                                    fill="#b92932"></path>
                                <path
                                    d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                    opacity=".15"></path>
                                <path
                                    d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                    fill="#fff" opacity=".2"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="32" viewBox="0 0 32 32">
                                        <path fill="#f1c142" d="M1 10H31V22H1z"></path>
                                        <path d="M5,4H27c2.208,0,4,1.792,4,4v3H1v-3c0-2.208,1.792-4,4-4Z"
                                            fill="#a0251e"></path>
                                        <path d="M5,21H27c2.208,0,4,1.792,4,4v3H1v-3c0-2.208,1.792-4,4-4Z"
                                            transform="rotate(180 16 24.5)" fill="#a0251e"></path>
                                        <path
                                            d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                            opacity=".15"></path>
                                        <path
                                            d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                            fill="#fff" opacity=".2"></path>
                                        <path
                                            d="M12.614,13.091c.066-.031,.055-.14-.016-.157,.057-.047,.02-.15-.055-.148,.04-.057-.012-.144-.082-.13,.021-.062-.042-.127-.104-.105,.01-.068-.071-.119-.127-.081,.004-.068-.081-.112-.134-.069-.01-.071-.11-.095-.15-.035-.014-.068-.111-.087-.149-.028-.027-.055-.114-.057-.144-.004-.03-.047-.107-.045-.136,.002-.018-.028-.057-.044-.09-.034,.009-.065-.066-.115-.122-.082,.002-.07-.087-.111-.138-.064-.013-.064-.103-.087-.144-.036-.02-.063-.114-.075-.148-.017-.036-.056-.129-.042-.147,.022-.041-.055-.135-.031-.146,.036-.011-.008-.023-.014-.037-.016,.006-.008,.01-.016,.015-.025h.002c.058-.107,.004-.256-.106-.298v-.098h.099v-.154h-.099v-.101h-.151v.101h-.099v.154h.099v.096c-.113,.04-.169,.191-.11,.299h.002c.004,.008,.009,.017,.014,.024-.015,.002-.029,.008-.04,.017-.011-.067-.106-.091-.146-.036-.018-.064-.111-.078-.147-.022-.034-.057-.128-.046-.148,.017-.041-.052-.131-.028-.144,.036-.051-.047-.139-.006-.138,.064-.056-.033-.131,.017-.122,.082-.034-.01-.072,.006-.091,.034-.029-.047-.106-.049-.136-.002-.03-.054-.117-.051-.143,.004-.037-.059-.135-.04-.149,.028-.039-.06-.14-.037-.15,.035-.053-.043-.138,0-.134,.069-.056-.038-.137,.013-.127,.081-.062-.021-.125,.044-.104,.105-.05-.009-.096,.033-.096,.084h0c0,.017,.005,.033,.014,.047-.075-.002-.111,.101-.055,.148-.071,.017-.082,.125-.016,.157-.061,.035-.047,.138,.022,.154-.013,.015-.021,.034-.021,.055h0c0,.042,.03,.077,.069,.084-.023,.048,.009,.11,.06,.118-.013,.03-.012,.073-.012,.106,.09-.019,.2,.006,.239,.11-.015,.068,.065,.156,.138,.146,.06,.085,.133,.165,.251,.197-.021,.093,.064,.093,.123,.118-.013,.016-.043,.063-.055,.081,.024,.013,.087,.041,.113,.051,.005,.019,.004,.028,.004,.031,.091,.501,2.534,.502,2.616-.001v-.002s.004,.003,.004,.004c0-.003-.001-.011,.004-.031l.118-.042-.062-.09c.056-.028,.145-.025,.123-.119,.119-.032,.193-.112,.253-.198,.073,.01,.153-.078,.138-.146,.039-.104,.15-.129,.239-.11,0-.035,.002-.078-.013-.109,.044-.014,.07-.071,.049-.115,.062-.009,.091-.093,.048-.139,.069-.016,.083-.12,.022-.154Zm-.296-.114c0,.049-.012,.098-.034,.141-.198-.137-.477-.238-.694-.214-.002-.009-.006-.017-.011-.024,0,0,0-.001,0-.002,.064-.021,.074-.12,.015-.153,0,0,0,0,0,0,.048-.032,.045-.113-.005-.141,.328-.039,.728,.09,.728,.393Zm-.956-.275c0,.063-.02,.124-.054,.175-.274-.059-.412-.169-.717-.185-.007-.082-.005-.171-.011-.254,.246-.19,.81-.062,.783,.264Zm-1.191-.164c-.002,.05-.003,.102-.007,.151-.302,.013-.449,.122-.719,.185-.26-.406,.415-.676,.73-.436-.002,.033-.005,.067-.004,.101Zm-1.046,.117c0,.028,.014,.053,.034,.069,0,0,0,0,0,0-.058,.033-.049,.132,.015,.152,0,0,0,.001,0,.002-.005,.007-.008,.015-.011,.024-.219-.024-.495,.067-.698,.206-.155-.377,.323-.576,.698-.525-.023,.015-.039,.041-.039,.072Zm3.065-.115s0,0,0,0c0,0,0,0,0,0,0,0,0,0,0,0Zm-3.113,1.798v.002s-.002,0-.003,.002c0-.001,.002-.003,.003-.003Z"
                                            fill="#9b8028"></path>
                                        <path
                                            d="M14.133,16.856c.275-.65,.201-.508-.319-.787v-.873c.149-.099-.094-.121,.05-.235h.072v-.339h-.99v.339h.075c.136,.102-.091,.146,.05,.235v.76c-.524-.007-.771,.066-.679,.576h.039s0,0,0,0l.016,.036c.14-.063,.372-.107,.624-.119v.224c-.384,.029-.42,.608,0,.8v1.291c-.053,.017-.069,.089-.024,.123,.007,.065-.058,.092-.113,.083,0,.026,0,.237,0,.269-.044,.024-.113,.03-.17,.028v.108s0,0,0,0v.107s0,0,0,0v.107s0,0,0,0v.108s0,0,0,0v.186c.459-.068,.895-.068,1.353,0v-.616c-.057,.002-.124-.004-.17-.028,0-.033,0-.241,0-.268-.054,.008-.118-.017-.113-.081,.048-.033,.034-.108-.021-.126v-.932c.038,.017,.073,.035,.105,.053-.105,.119-.092,.326,.031,.429l.057-.053c.222-.329,.396-.743-.193-.896v-.35c.177-.019,.289-.074,.319-.158Z"
                                            fill="#9b8028"></path>
                                        <path
                                            d="M8.36,16.058c-.153-.062-.39-.098-.653-.102v-.76c.094-.041,.034-.115-.013-.159,.02-.038,.092-.057,.056-.115h.043v-.261h-.912v.261h.039c-.037,.059,.039,.078,.057,.115-.047,.042-.108,.118-.014,.159v.873c-.644,.133-.611,.748,0,.945v.35c-.59,.154-.415,.567-.193,.896l.057,.053c.123-.103,.136-.31,.031-.429,.032-.018,.067-.036,.105-.053v.932c-.055,.018-.069,.093-.021,.126,.005,.064-.059,.089-.113,.081,0,.026,0,.236,0,.268-.045,.024-.113,.031-.17,.028v.401h0v.215c.459-.068,.895-.068,1.352,0v-.186s0,0,0,0v-.108s0,0,0,0v-.107s0,0,0,0v-.107s0,0,0,0v-.108c-.056,.002-.124-.004-.169-.028,0-.033,0-.241,0-.269-.055,.008-.119-.018-.113-.083,.045-.034,.03-.107-.024-.124v-1.29c.421-.192,.383-.772,0-.8v-.224c.575,.035,.796,.314,.653-.392Z"
                                            fill="#9b8028"></path>
                                        <path
                                            d="M12.531,14.533h-4.28l.003,2.572v1.485c0,.432,.226,.822,.591,1.019,.473,.252,1.024,.391,1.552,.391s1.064-.135,1.544-.391c.364-.197,.591-.587,.591-1.019v-4.057Z"
                                            fill="#a0251e"></path>
                                    </svg></a></li>
                            <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="32" viewBox="0 0 32 32">
                                        <path fill="#fff" d="M10 4H22V28H10z"></path>
                                        <path d="M5,4h6V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z"
                                            fill="#092050"></path>
                                        <path d="M25,4h6V28h-6c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z"
                                            transform="rotate(180 26 16)" fill="#be2a2c"></path>
                                        <path
                                            d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                            opacity=".15"></path>
                                        <path
                                            d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                            fill="#fff" opacity=".2"></path>
                                    </svg></a></li>
                            <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="32" viewBox="0 0 32 32">
                                        <path fill="#cc2b1d" d="M1 11H31V21H1z"></path>
                                        <path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z"></path>
                                        <path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z"
                                            transform="rotate(180 16 24)" fill="#f8d147"></path>
                                        <path
                                            d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                            opacity=".15"></path>
                                        <path
                                            d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                            fill="#fff" opacity=".2"></path>
                                    </svg></a></li>
                        </ul>
                    </div>
                    <form class="d-flex busqueda" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Product" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="d-flex gap-5 justify-content-center align-items-center">
                        <div class="d-flex gap-2 justify-content-center align-items-center login">

                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                viewBox="0 0 1024 1024">
                                <path fill="black"
                                    d="M288 320a224 224 0 1 0 448 0a224 224 0 1 0-448 0m544 608H160a32 32 0 0 1-32-32v-96a160 160 0 0 1 160-160h448a160 160 0 0 1 160 160v96a32 32 0 0 1-32 32z" />
                            </svg>
                            <div class="dropdown">
                                <a class="btn fs-5 dropdown-toggle" href="Controllers/Validate.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="userNames">
                                    Login
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Controllers/Validate.php">Login</a></li>
                                    <li><a class="dropdown-item" href="Controllers/Register.php">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="Controllers/ShopCard.php"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                viewBox="0 0 24 24">
                                <path fill="black" fill-rule="evenodd"
                                    d="M7.25 7.13v.37H5.749a.9.9 0 0 0-.892.77L4.64 9.763a30.3 30.3 0 0 0 0 8.79a2.885 2.885 0 0 0 2.557 2.451l.629.066c2.776.288 5.574.288 8.35 0l.63-.066a2.885 2.885 0 0 0 2.556-2.451a30.3 30.3 0 0 0 0-8.79l-.218-1.493a.9.9 0 0 0-.892-.77H16.75v-.37a4.75 4.75 0 1 0-9.5 0m5.56-3.147A3.25 3.25 0 0 0 8.75 7.13v.37h6.5v-.37a3.25 3.25 0 0 0-2.44-3.147M8.75 9a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0zm8 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span class="position-absolute top-10 translate-middle badge rounded-pill bg-success" id="ShopCardQuantity">

                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </nav>
        <!-- Menu -->
        <div class="container mt-5">
            <div class="row d-flex gap-5 justify-content-center">
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="p-2 d-flex gap-2 justify-content-center align-items-center border rounded item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                                <path
                                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="black"
                                    d="M9 2.5a1 1 0 0 1-2 0c0-.552.844-2 1-2s1 1.448 1 2m4 2q0 .026-.003.052c.277.059.53.166.757.31a.5.5 0 0 1 .063-.183c.138-.24 1.082-1.108 1.183-1.049s-.179 1.31-.317 1.549a.5.5 0 0 1-.319.237a2.97 2.97 0 0 1 .418 2.961a1 1 0 0 1-.408.478l.018.004A2 2 0 0 1 16 10.819v1.767l.293-.293a1 1 0 0 1 1.414 1.414L16 15.414V18a1 1 0 0 1 1 1v2a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2v-2a1 1 0 0 1 1-1v-3.586l-1.707-1.707A1 1 0 0 1 7 12V5.866A1 1 0 0 1 7.5 4h1a1 1 0 0 1 .867 1.498l.664 1.328a2.96 2.96 0 0 1 .605-1.41a.5.5 0 0 1-.319-.237c-.138-.24-.419-1.49-.317-1.549s1.045.81 1.183 1.049a.5.5 0 0 1 .063.184c.226-.145.48-.252.757-.311L12 4.5c0-.276.383-1.5.5-1.5s.5 1.224.5 1.5" />
                            </g>
                        </svg>
                        <a class="fs-5" href="Controllers/Products.php">Figures</a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="p-2 d-flex gap-2 justify-content-center align-items-center border rounded item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="-2 -2 24 24">
                            <path fill="black"
                                d="M20 6v5H0V6h6.126a4.002 4.002 0 0 0 7.748 0zm0-2H0l5-4h10zm0 9v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-5h6.126a4.002 4.002 0 0 0 7.748 0zM8.268 13h3.464a2 2 0 0 1-3.464 0m-.002-6.988h3.464a2 2 0 0 1-3.464 0" />
                        </svg>
                        <a class="fs-5" href="Controllers/Products.php">Boxes</a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="p-2 d-flex gap-2 justify-content-center align-items-center border rounded item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 14 14">
                            <path fill="black" fill-rule="evenodd"
                                d="M7.56.33a.48.48 0 0 0-.587.339L4.64 9.377a.48.48 0 0 0 .34.587l6.083 1.63a.48.48 0 0 0 .587-.34l2.335-8.707a.48.48 0 0 0-.34-.588L7.561.33ZM3.433 9.053l1.596-5.955L.356 4.349a.48.48 0 0 0-.34.588l2.335 8.707a.48.48 0 0 0 .587.34l6.084-1.63l.023-.007l-4.39-1.175a1.73 1.73 0 0 1-1.223-2.12Z"
                                clip-rule="evenodd" />
                        </svg>
                        <a class="fs-5" href="Controllers/Products.php">Cards</a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="p-2 d-flex gap-2 justify-content-center align-items-center border rounded item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 16 16">
                            <path fill="black" fill-rule="evenodd"
                                d="M3.76 2H6v.473c.005.01.026.059.102.147c.103.12.265.263.473.4c.422.277.952.48 1.425.48s1.004-.203 1.425-.48c.208-.137.37-.28.474-.4c.075-.088.096-.137.101-.147V2h2.24l2.312 2.89l-1.237 4.327l-1.815-.908V14h-7V8.309l-1.815.908l-1.237-4.328z"
                                clip-rule="evenodd" />
                        </svg>
                        <a class="fs-5" href="Controllers/Products.php">Clothes</a>
                    </div>
                </div>


            </div>
        </div>
    </header>
    <main>

        <!--Info Section-->
        <section id="info">
            <!--Title-->
            <div class="container-fluid pt-5 text-center">
                <h1 class="fs-1 fw-bold">Explore our TCG’s collection and find what you are always looking for.</h1>
            </div>
            <!--Products-->
            <div class="container-fluid mt-5 ps-md-5 pe-md-5">
                <div class="row mt-5 text-center text-lg-start">
                    <div class="col-12 col-xxl-6 ">
                        <h2 class="fs-2 fw-bold ms-lg-5">Best Products</h2>
                        <div class="row pt-3 pt-xl-1 d-flex justify-content-md-start ps-xl-5">
                            <div class="col-12 col-sm-6 d-flex justify-content-center">
                                <div class="card d-flex mb-3 ms-lg-5 best">
                                    <div class="row g-0 p-3">
                                        <div class="col-md-4">
                                            <img src="imgs/charizard ‹ PkmnCards.jpeg" class="card-img-top rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Charizard Card</h5>
                                                <p class="card-text subtitle">Especial card of charizard, limited collection.
                                                </p>
                                                <p class="card-text"><small class="fs-2 fw-bold">7.99€</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 d-flex justify-content-center">
                                <div class="card mb-3 ms-lg-5 best">
                                    <div class="row g-0 p-3">
                                        <div class="col-md-4">
                                            <img src="imgs/goku.jpeg" class="card-img-top rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Goku - SSJ BLUE </h5>
                                                <p class="card-text subtitle">Especial card of Goku SSJ BLUE, limited collection.
                                                </p>
                                                <p class="card-text"><small class="fs-2 fw-bold">10.99€</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-md-start ps-xl-5">
                            <div class="col-12 col-sm-6 d-flex justify-content-center">
                                <div class="card mb-3 ms-lg-5 best">
                                    <div class="row g-0 p-3">
                                        <div class="col-md-4">
                                            <img src="imgs/dragonBlanco.jpeg" class="card-img-top rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Amethyst - Eyes Twiligth Dragon</h5>
                                                <p class="card-text subtitle">Especial card, limited collection.
                                                </p>
                                                <p class="card-text"><small class="fs-2 fw-bold">15.99€</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 d-flex justify-content-center">
                                <div class="card mb-3 ms-lg-5 best">
                                    <div class="row g-0 p-3">
                                        <div class="col-md-4">
                                            <img src="imgs/darkrai.jpeg" class="card-img-top rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Darkrai Card</h5>
                                                <p class="card-text subtitle">Especial card of Darkrai, limited collection.
                                                </p>
                                                <p class="card-text"><small class="fs-2 fw-bold">25.99€</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xxl-6">
                        <div class="d-flex justify-content-center img-principal">
                            <img src="imgs/logo.png" alt="img-principal">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--News-->
        <section>
            <div class="container-fluid mt-5 pt-5 ps-5 pe-5 text-wrap">
                <h2 class="fs-2 fw-bold text-center text-lg-start ms-lg-5">News</h2>
                <div class="row ms-lg-5 gy-2">
                    <div class="col-12 col-sm-6 col-xxl-2">
                        <div class="card product">
                            <img src="imgs/new2.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center subtitle">Dragon Ball TCG - Raging Roar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-2">
                        <div class="card product">
                            <img src="imgs/new.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center subtitle">One Piece TCG - The Best</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-2">
                        <div class="card product">
                            <img src="imgs/new3.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center subtitle">Pokemon TCG - Lost Origin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-2">
                        <div class="card product">
                            <img src="imgs/new4.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center subtitle">Yugioh TCG - V Japanese</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-2">
                        <div class="card product">
                            <img src="imgs/new5.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center subtitle">Yugioh TCG - Legacy of Destruction </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-2">
                        <div class="card product">
                            <img src="imgs/new6.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center subtitle">Magic TCG - Foundations</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Tip Section-->
        <section id="tip">
            <div class="container-fluid mt-5 pt-5 ps-5 pe-5 text-wrap">
                <h2 class="fs-2 fw-bold text-center text-lg-start ms-lg-5">Tips for Rate your collection</h2>
                <div class="row d-flex gap-3 gap-md-2 gap-xl-0 pt-5 ps-md-5 pe-md-5">
                    <div class="col-12 col-xl-4">
                        <div class="p-2 d-flex gap-2 border rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24">
                                <path fill="black" fill-rule="evenodd"
                                    d="M20 4H4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1M4 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm2 5h2v2H6zm5 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2zm-3 4H6v2h2zm2 1a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2h-6a1 1 0 0 1-1-1m-2 3H6v2h2zm2 1a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2h-6a1 1 0 0 1-1-1"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="d-flex flex-column">
                                <p class="fs-5 fw-bold">Organizate your collection</p>
                                <p class="fs-6 subtitle">Organize your cards by type, rarity, and condition</p>
                                <p class="fs-6 subtitle">Research the current value of your cards on specialised sites.</p>
                                <p class="fs-6 subtitle">Carefully assess the condition of each card.</p>
                                <p class="fs-6 subtitle">Consider professional grading for the most valuable cards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class=" p-2 d-flex gap-2 border rounded h-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24">
                                <path fill="black"
                                    d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14" />
                            </svg>
                            <div class="d-flex flex-column gap-2">
                                <p class="fs-5 fw-bold ">Resources</p>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">TCGPlayer</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">CardMarket</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">PriceCharting</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">eBay</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="p-2 d-flex gap-2 border rounded h-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24">
                                <path fill="black"
                                    d="M9 10a3.04 3.04 0 0 1 3-3a3.04 3.04 0 0 1 3 3a3.04 3.04 0 0 1-3 3a3.04 3.04 0 0 1-3-3m3 9l4 1v-3.08A7.54 7.54 0 0 1 12 18a7.54 7.54 0 0 1-4-1.08V20m4-16a5.78 5.78 0 0 0-4.24 1.74A5.78 5.78 0 0 0 6 10a5.78 5.78 0 0 0 1.76 4.23A5.78 5.78 0 0 0 12 16a5.78 5.78 0 0 0 4.24-1.77A5.78 5.78 0 0 0 18 10a5.78 5.78 0 0 0-1.76-4.26A5.78 5.78 0 0 0 12 4m8 6a8 8 0 0 1-.57 2.8A7.8 7.8 0 0 1 18 15.28V23l-6-2l-6 2v-7.72A7.9 7.9 0 0 1 4 10a7.68 7.68 0 0 1 2.33-5.64A7.73 7.73 0 0 1 12 2a7.73 7.73 0 0 1 5.67 2.36A7.68 7.68 0 0 1 20 10" />
                            </svg>
                            <div class="d-flex flex-column gap-2">
                                <p class="fs-5 fw-bold">Rates Services</p>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">PSA</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">Beckett Grading Services</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">CGC</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="#" class="fs-6 subtitle">SGC</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FAQs and Comunity-->
                <div class="row gx-5">
                    <div class="col-12 col-lg-6 mt-5">
                        <h2 class="fs-2 fw-bold text-lg-start text-center ms-lg-5">FAQs</h2>
                        <div class="accordion accordion-flush border rounded ms-lg-5 mt-5" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        What payment methods do you accept?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body subtitle">We accept a wide variety of payment methods, including credit and debit
                                        cards (Visa, Mastercard, American Express), bank transfers, and secure payments via platforms like PayPal.
                                        We also accept prepaid cards and selected cryptocurrencies, depending on availability.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Is it safe to make payments on your website?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body subtitle">Yes, the safety of our customers is our top priority.
                                        Our website uses SSL (Secure Socket Layer) encryption technology to protect
                                        your personal and payment information. Additionally, we work with trusted and well-known payment processors to ensure secure transactions.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Can I cancel my order after payment?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body subtitle">Yes, you can cancel your order as long as it has not been shipped. If you wish to cancel,
                                        please contact us as soon as possible through our customer service.
                                        If the order has already been shipped, we won't be able to process a cancellation, but you can request a return following our return policy.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-5">
                        <h2 class="fs-2 fw-bold text-lg-start text-center">Our Communnity</h2>
                        <div class="row mt-4 gy-4">
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-1">
                                            <div class="avatar" noprofile>
                                                <p>DB</p>
                                            </div>
                                            <h5 class="card-title">@Danibreadd</h5>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted">See my Collection</h6>

                                        <div class="d-flex align-items-center gap-1">
                                            <a href="#" class="fs-6 subtitle">Link</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-1">
                                            <div class="avatar" noprofile>
                                                <p>
                                                    AL
                                                </p>
                                            </div>
                                            <h5 class="card-title">@Alberto_ret</h5>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted">I am happy with my new card</h6>

                                        <div class="d-flex align-items-center gap-1">
                                            <a href="#" class="fs-6 subtitle">Link</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-1">
                                            <div class="avatar" noprofile>
                                                <p>
                                                    OP
                                                </p>
                                            </div>
                                            <h5 class="card-title">@Oscar_PCZ</h5>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted">LootClan is so TOP!</h6>

                                        <div class="d-flex align-items-center gap-1">
                                            <a href="#" class="fs-6 subtitle">Link</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-1">
                                            <div class="avatar" noprofile>
                                                <p>
                                                    SE
                                                </p>
                                            </div>
                                            <h5 class="card-title">@sergio_fan1221</h5>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted">See my New Figure</h6>

                                        <div class="d-flex align-items-center gap-1">
                                            <a href="#" class="fs-6 subtitle">Link</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-1">
                                            <div class="avatar" noprofile>
                                                <p>
                                                    CA
                                                </p>
                                            </div>
                                            <h5 class="card-title">@Carlos_loffy</h5>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted">The quality is perfect</h6>

                                        <div class="d-flex align-items-center gap-1">
                                            <a href="#" class="fs-6 subtitle">Link</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-1">
                                            <div class="avatar" noprofile>
                                                <p>
                                                    RU
                                                </p>
                                            </div>
                                            <h5 class="card-title">@Ruben_super13</h5>
                                        </div>

                                        <h6 class="card-subtitle mb-2 text-muted">I will always trust lootclan</h6>

                                        <div class="d-flex align-items-center gap-1">
                                            <a href="#" class="fs-6 subtitle">Link</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.9rem" height="0.9rem"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Category Section-->
        <section>
            <div class="container-fluid mt-5">
                <div class="row">
                    <h1 class="fs-1 fw-bold text-center mt-5">Categories</h1>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="imgs/pokemon_category.png" alt="pokemon_category" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="imgs/yugi_category.png" alt="yugi_category" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="imgs/db_category.png" alt="db_category" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="imgs/op_category.png" alt="op_category" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="imgs/magic_category.png" alt="magic_category" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="imgs/funko_category.png" alt="funko_category" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid w-100 mt-5 pt-5">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h2 class="fs-2 fw-bold">🚚Delivery in 24/48 HOURS</h2>
                    </div>
                </div>

            </div>
        </section>
        <!--Alert-->
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"
            style="position: fixed; right: 20px; bottom: 20px;">
            <div class="toast-header">
                <strong class="me-auto" style="color: #69E277;">Welcome!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                🎁 Thank you for joining us! As a new customer, we will give you a 10% discount coupon on your first
                purchase.
                Use the code <strong>LootStart</strong> at checkout and enjoy this special offer.
            </div>
        </div>



    </main>
    <footer style="position: relative; width: 100%; bottom: 0; top: 225px;">
        <!-- place footer here -->
        <div class="container-fluid w-100 border-top border-3 border-dark mt-5">
            <div class="row pt-3">
                <div class="d-flex flex-column flex-sm-row justify-content-center p-3 justify-content-sm-around align-items-center">
                    <a href="">Contact us</a>
                    <a href="">Delivery Politics</a>
                    <a href="">Devolutions Politics</a>
                    <a href="">Privacity Politics</a>
                    <a href="">Service Termines</a>
                    <a href="">Legal Advice</a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="d-flex justify-content-center gap-3">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em">
                                    <title>Instagram</title>
                                    <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                                </svg>
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em">
                                    <title>Facebook</title>
                                    <path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                                </svg>
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em">
                                    <title>X</title>
                                    <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex justify-content-center">
                            <p>Av.Acequia, 72 46164 Pedralba, Valencia, España.</p>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row pt-3">
                <div class="d-flex flex-column flex-sm-row p-3 gap-md-5 gap-1 justify-content-center align-items-center">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em" fill="#003087">
                        <title>PayPal</title>
                        <path d="M7.016 19.198h-4.2a.562.562 0 0 1-.555-.65L5.093.584A.692.692 0 0 1 5.776 0h7.222c3.417 0 5.904 2.488 5.846 5.5-.006.25-.027.5-.066.747A6.794 6.794 0 0 1 12.071 12H8.743a.69.69 0 0 0-.682.583l-.325 2.056-.013.083-.692 4.39-.015.087zM19.79 6.142c-.01.087-.01.175-.023.261a7.76 7.76 0 0 1-7.695 6.598H9.007l-.283 1.795-.013.083-.692 4.39-.134.843-.014.088H6.86l-.497 3.15a.562.562 0 0 0 .555.65h3.612c.34 0 .63-.249.683-.585l.952-6.031a.692.692 0 0 1 .683-.584h2.126a6.793 6.793 0 0 0 6.707-5.752c.306-1.95-.466-3.744-1.89-4.906z" />
                    </svg>
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em" fill="#1A1F71">
                        <title>Visa</title>
                        <path d="M9.112 8.262L5.97 15.758H3.92L2.374 9.775c-.094-.368-.175-.503-.461-.658C1.447 8.864.677 8.627 0 8.479l.046-.217h3.3a.904.904 0 01.894.764l.817 4.338 2.018-5.102zm8.033 5.049c.008-1.979-2.736-2.088-2.717-2.972.006-.269.262-.555.822-.628a3.66 3.66 0 011.913.336l.34-1.59a5.207 5.207 0 00-1.814-.333c-1.917 0-3.266 1.02-3.278 2.479-.012 1.079.963 1.68 1.698 2.04.756.367 1.01.603 1.006.931-.005.504-.602.725-1.16.734-.975.015-1.54-.263-1.992-.473l-.351 1.642c.453.208 1.289.39 2.156.398 2.037 0 3.37-1.006 3.377-2.564m5.061 2.447H24l-1.565-7.496h-1.656a.883.883 0 00-.826.55l-2.909 6.946h2.036l.405-1.12h2.488zm-2.163-2.656l1.02-2.815.588 2.815zm-8.16-4.84l-1.603 7.496H8.34l1.605-7.496z" />
                    </svg>
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em" fill="#EB001B">
                        <title>MasterCard</title>
                        <path d="M11.343 18.031c.058.049.12.098.181.146-1.177.783-2.59 1.238-4.107 1.238C3.32 19.416 0 16.096 0 12c0-4.095 3.32-7.416 7.416-7.416 1.518 0 2.931.456 4.105 1.238-.06.051-.12.098-.165.15C9.6 7.489 8.595 9.688 8.595 12c0 2.311 1.001 4.51 2.748 6.031zm5.241-13.447c-1.52 0-2.931.456-4.105 1.238.06.051.12.098.165.15C14.4 7.489 15.405 9.688 15.405 12c0 2.31-1.001 4.507-2.748 6.031-.058.049-.12.098-.181.146 1.177.783 2.588 1.238 4.107 1.238C20.68 19.416 24 16.096 24 12c0-4.094-3.32-7.416-7.416-7.416zM12 6.174c-.096.075-.189.15-.28.231C10.156 7.764 9.169 9.765 9.169 12c0 2.236.987 4.236 2.551 5.595.09.08.185.158.28.232.096-.074.189-.152.28-.232 1.563-1.359 2.551-3.359 2.551-5.595 0-2.235-.987-4.236-2.551-5.595-.09-.08-.184-.156-.28-.231z" />
                    </svg>
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em" fill="#000000">
                        <title>Apple Pay</title>
                        <path d="M2.15 4.318a42.16 42.16 0 0 0-.454.003c-.15.005-.303.013-.452.04a1.44 1.44 0 0 0-1.06.772c-.07.138-.114.278-.14.43-.028.148-.037.3-.04.45A10.2 10.2 0 0 0 0 6.222v11.557c0 .07.002.138.003.207.004.15.013.303.04.452.027.15.072.291.142.429a1.436 1.436 0 0 0 .63.63c.138.07.278.115.43.142.148.027.3.036.45.04l.208.003h20.194l.207-.003c.15-.004.303-.013.452-.04.15-.027.291-.071.428-.141a1.432 1.432 0 0 0 .631-.631c.07-.138.115-.278.141-.43.027-.148.036-.3.04-.45.002-.07.003-.138.003-.208l.001-.246V6.221c0-.07-.002-.138-.004-.207a2.995 2.995 0 0 0-.04-.452 1.446 1.446 0 0 0-1.2-1.201 3.022 3.022 0 0 0-.452-.04 10.448 10.448 0 0 0-.453-.003zm0 .512h19.942c.066 0 .131.002.197.003.115.004.25.01.375.032.109.02.2.05.287.094a.927.927 0 0 1 .407.407.997.997 0 0 1 .094.288c.022.123.028.258.031.374.002.065.003.13.003.197v11.552c0 .065 0 .13-.003.196-.003.115-.009.25-.032.375a.927.927 0 0 1-.5.693 1.002 1.002 0 0 1-.286.094 2.598 2.598 0 0 1-.373.032l-.2.003H1.906c-.066 0-.133-.002-.196-.003a2.61 2.61 0 0 1-.375-.032c-.109-.02-.2-.05-.288-.094a.918.918 0 0 1-.406-.407 1.006 1.006 0 0 1-.094-.288 2.531 2.531 0 0 1-.032-.373 9.588 9.588 0 0 1-.002-.197V6.224c0-.065 0-.131.002-.197.004-.114.01-.248.032-.375.02-.108.05-.199.094-.287a.925.925 0 0 1 .407-.406 1.03 1.03 0 0 1 .287-.094c.125-.022.26-.029.375-.032.065-.002.131-.002.196-.003zm4.71 3.7c-.3.016-.668.199-.88.456-.191.22-.36.58-.316.918.338.03.675-.169.888-.418.205-.258.345-.603.308-.955zm2.207.42v5.493h.852v-1.877h1.18c1.078 0 1.835-.739 1.835-1.812 0-1.07-.742-1.805-1.808-1.805zm.852.719h.982c.739 0 1.161.396 1.161 1.089 0 .692-.422 1.092-1.164 1.092h-.979zm-3.154.3c-.45.01-.83.28-1.05.28-.235 0-.593-.264-.981-.257a1.446 1.446 0 0 0-1.23.747c-.527.908-.139 2.255.374 2.995.249.366.549.769.944.754.373-.014.52-.242.973-.242.454 0 .586.242.98.235.41-.007.667-.366.915-.733.286-.417.403-.82.41-.841-.007-.008-.79-.308-.797-1.209-.008-.754.615-1.113.644-1.135-.352-.52-.9-.578-1.09-.593a1.123 1.123 0 0 0-.092-.002zm8.204.397c-.99 0-1.606.533-1.652 1.256h.777c.072-.358.369-.586.845-.586.502 0 .803.266.803.711v.309l-1.097.064c-.951.054-1.488.484-1.488 1.184 0 .72.548 1.207 1.332 1.207.526 0 1.032-.281 1.264-.727h.019v.659h.788v-2.76c0-.803-.62-1.317-1.591-1.317zm1.94.072l1.446 4.009c0 .003-.073.24-.073.247-.125.41-.33.571-.711.571-.069 0-.206 0-.267-.015v.666c.06.011.267.019.335.019.83 0 1.226-.312 1.568-1.283l1.5-4.214h-.868l-1.012 3.259h-.015l-1.013-3.26zm-1.167 2.189v.316c0 .521-.45.917-1.024.917-.442 0-.731-.228-.731-.579 0-.342.278-.56.769-.593z" />
                    </svg>
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1.5em" heigth="1.5em" fill="#4285F4">
                        <title>Google Pay</title>
                        <path d="M3.963 7.235A3.963 3.963 0 00.422 9.419a3.963 3.963 0 000 3.559 3.963 3.963 0 003.541 2.184c1.07 0 1.97-.352 2.627-.957.748-.69 1.18-1.71 1.18-2.916a4.722 4.722 0 00-.07-.806H3.964v1.526h2.14a1.835 1.835 0 01-.79 1.205c-.356.241-.814.379-1.35.379-1.034 0-1.911-.697-2.225-1.636a2.375 2.375 0 010-1.517c.314-.94 1.191-1.636 2.225-1.636a2.152 2.152 0 011.52.594l1.132-1.13a3.808 3.808 0 00-2.652-1.033zm6.501.55v6.9h.886V11.89h1.465c.603 0 1.11-.196 1.522-.588a1.911 1.911 0 00.635-1.464 1.92 1.92 0 00-.635-1.456 2.125 2.125 0 00-1.522-.598zm2.427.85a1.156 1.156 0 01.823.365 1.176 1.176 0 010 1.686 1.171 1.171 0 01-.877.357H11.35V8.635h1.487a1.156 1.156 0 01.054 0zm4.124 1.175c-.842 0-1.477.308-1.907.925l.781.491c.288-.417.68-.626 1.175-.626a1.255 1.255 0 01.856.323 1.009 1.009 0 01.366.785v.202c-.34-.193-.774-.289-1.3-.289-.617 0-1.11.145-1.479.434-.37.288-.554.677-.554 1.165a1.476 1.476 0 00.525 1.156c.35.308.785.463 1.305.463.61 0 1.098-.27 1.465-.81h.038v.655h.848v-2.909c0-.61-.19-1.09-.568-1.44-.38-.35-.896-.525-1.551-.525zm2.263.154l1.946 4.422-1.098 2.38h.915L24 9.963h-.965l-1.368 3.391h-.02l-1.406-3.39zm-2.146 2.368c.494 0 .88.11 1.156.33 0 .372-.147.696-.44.973a1.413 1.413 0 01-.997.414 1.081 1.081 0 01-.69-.232.708.708 0 01-.293-.578c0-.257.12-.47.363-.647.24-.173.54-.26.9-.26Z" />
                    </svg>
                </div>
            </div>
            <div class="row pt-2">
                <div class="d-flex justify-content-center">
                    <p class="subtitle">2024, Daniel Pamblanco Mestre Proyecto 1º Trimestre</p>
                </div>
            </div>
        </div>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script>
        // Espera a que el DOM esté completamente cargado
        document.addEventListener('DOMContentLoaded', function() {
            var toastEl = document.querySelector('.toast');
            var toast = new bootstrap.Toast(toastEl);
            toast.show(); // Muestra el toast
        });
    </script>
</body>

</html>