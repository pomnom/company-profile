<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="z-depth-2 blue lighten-2">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">
                    <img src="brand-min.png" height="60" width="auto" style="vertical-align: middle">
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="active waves-effect waves-light "><a href="#">Beranda</a></li>
                    <li class="waves-effect waves-light "><a href="#">Produk</a></li>
                    <li class="waves-effect waves-light "><a href="#">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mobile Navbar -->
    <ul id="slide-out" class="sidenav">
        <li class="active"><a href="#">Beranda</a></li>
        <li><a href="#">Produk</a></li>
        <li><a href="#">Tentang Kami</a></li>
    </ul>
    <!-- Parallax -->
    <div class="parallax-container valign-wrapper" style="height: 400px;">
        <div class="section no-pad-bot" style="width: 100%">
            <div class="container">
                <div class="row center">
                    <h1 class="brand">Ini Brand
                    </h1>
                    <h5 class="tag-line">
                        Ini tag-line</h5>
                </div>
            </div>
        </div>
        <div class="parallax" style="filter: brightness(80%)"><img src="parallax-min.jpg" height="1000">
        </div>
    </div>
    <!-- Card -->
    <br>
    <div class="section white">
        <div class="row container" style="margin-bottom: 0%;">
            <h1 class="center-align" style="font-family: Pacifico;">Kenapa Memilih Kami?</h1>
            <div class="col s12 m4">
                <div class="center-align" style="margin: 5PX;">
                        <div class="card-content center-align" id="texthover">
                            <h5><b>Peduli</b></h5>
                            <i class="material-icons large md-48 deep-orange-text text-lighten-4">favorite_border</i>
                            <p class="mb-2 black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil,
                                enim vel!</p>
                        </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="center-align" style="margin: 5PX;">
                    <div class="card-content center-align" id="texthover">
                        <h5><b>Cepat</b></h5>
                        <i class="material-icons large md-48 deep-orange-text text-lighten-4">fast_forward</i>
                        <p class="mb-2 black-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                            sapiente fugit ducimus?</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="center-align" style="margin: 5PX;">
                    <div class="card-content center-align" id="texthover">
                        <h5><b>Aman</b></h5>
                        <i class="material-icons large md-48 deep-orange-text text-lighten-4">security</i>
                        <p class="mb-2 black-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                            ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <footer class="page-footer blue lighten-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Ini Brand</h5>
                    <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Distinctio architecto nobis, ex accusantium asperiores necessitatibus temporibus ut, tenetur
                        repellendus dignissimos eos tempore ducimus qui eum vitae? Ipsam omnis rem tenetur quo, in at
                        debitis, magni perspiciatis obcaecati, maiores officiis temporibus.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">More About Us</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © Brand 2021
            </div>
        </div>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, true);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, 0);
        });
    </script>
</body>

</html>