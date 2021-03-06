<?php
session_start();
    if ( !isset($_SESSION['loggedUser'])) {
         header('Location: /loginAjax.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="js/jquery-latest.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script defer src="fontawesome/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="fontawesome\css/all.css" rel="stylesheet">
    <title>Home</title>

</head>

<body>
    <?php
    echo "tu usuario es " . $_SESSION["loggedUser"] . ".<br>";
    ?>
    <button id="logout">Log Out</button>
    <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
        <svg width="100" height="100" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
    </button>
    <div id="divMenuInfo">
        <a href="" class="aMenu">Home</a>
        <a href="" class="aMenu">Offers</a>
        <a href="" class="aMenu">Places</a>
        <a href="" class="aMenu">Login</a>
        <a href="" class="aMenu">About us</a>
        <a href="" class="aMenu">Contact Us</a>
    </div>
    <div id="dummyHeader">
    </div>

    <div id="divWeb">
        <div id="dummy">
        </div>
        <div id="divHeader">
            <div id="divHeaderPhoto">
                <img src="foto.png" id="imgGallery">
            </div>
            <div id="divHeaderMenu">
                <a href="" class="aHeader">Home</a>
                <a href="" class="aHeader">Offers</a>
                <a href="" class="aHeader">Places</a>
                <a href="" class="aHeader">Login</a>
                <a href="" class="aHeader">About us</a>
                <a href="" class="aHeader">Contact Us</a>
            </div>
        </div>

        <div id="divView">
            <span id="rightArrow">
                <i class="fas fa-angle-double-right"></i>
            </span>
            <span id="leftArrow">
                <i class="fas fa-angle-double-left"></i>
            </span>

            <div class="container" id="divContainer">
                <img src="imagen1.jpg" alt="dedos" id="1" class="centerImg">
                <input type="hidden" value="imagen1.jpg" class="imgOnLoad">
                <input type="hidden" value="imagen2.jpg" class="imgOnLoad">
                <input type="hidden" value="imagen3.jpg" class="imgOnLoad">
                <input type="hidden" value="imagen4.jpg" class="imgOnLoad">
            </div>
            <div id="divTxtImg">
                <p id="pTxt">texto</p>
            </div>
        </div>

        <div id="divTxtInfo">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor perferendis eius nulla enim omnis numquam suscipit facere nobis hic nesciunt tempore maxime debitis quidem, ducimus dolore distinctio. Possimus, quos ullam, ut in corporis officiis velit nulla similique quidem debitis aliquid perspiciatis, eveniet esse vel? Alias magnam labore odit accusantium omnis laudantium quidem culpa asperiores dolorem, sapiente, sequi consequuntur officia adipisci architecto rerum, atque excepturi doloribus quibusdam at debitis. Delectus, voluptatem reprehenderit totam distinctio odit error ullam nostrum asperiores exercitationem sit consequuntur esse nesciunt, quasi ex explicabo? Eaque a nisi in asperiores quod molestiae quas expedita ipsum laudantium animi saepe, accusantium minus repudiandae, nesciunt illum odio. Eius enim quod, est labore deserunt ipsum, recusandae voluptate distinctio, exercitationem reiciendis optio vero minima. Ipsam exercitationem maxime neque natus maiores velit, iure cumque, corporis vel tenetur ea eum ab eius nemo tempore! Iusto impedit aliquam voluptatum nobis, numquam vitae ratione sint adipisci deserunt quod nulla molestias! Culpa cum sequi explicabo rerum necessitatibus labore doloribus minima, sunt obcaecati voluptates, ab facilis maiores animi minus at incidunt porro, id ad! Doloribus minima corporis eveniet illum iure expedita, aspernatur praesentium officia, laudantium voluptatibus deserunt modi dolorem quod porro inventore maxime itaque natus quae fugit molestiae. Totam, facere!</p>
        </div>

        <div id="divFooter">
            <div id="divImgFooter">
                <img src="foto.png" alt="foto" id="imgFooter">
            </div>
            <div id="txtFooter">
                <p class="footer">Home</p>
                <p class="footer">About us</p>
                <p class="footer">Places</p>
                <br>
                <p class="footer">Offers</p>
                <p class="footer">Login</p>
                <p class="footer">Contact Us</p>
            </div>

            <div id="divRightFooter">
                <p class="righttTxtFooter">+598 98 77 33 44</p>
                <p class="righttTxtFooter">info@welcomeToUruguay.com</p>
            </div>
        </div>
        <form action=???/index.php??? method=???POST???>
            Ingrese su nombre <input type=???text??? name=???user??? />
            <button type=???submit???>Continuar</button>
        </form>

    </div>
</body>

</html>
