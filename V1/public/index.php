<!DOCTYPE html>
<html lang="fr">

	<head>
        <!-- Meta -->
		    <meta charset="utf-8">
		    <meta name="author" content="Your Name">
		    <meta name="description" content="Example description">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Link stylesheet css -->
		    <link rel="stylesheet" type="text/css" href="css/lib-crypto_css.css">
            <link rel="stylesheet" type="text/css" href="css/slide.css">
		    <link rel="stylesheet" type="text/css" href="css/media-queries.css">
            <link rel="stylesheet" type="text/css" href="css/font.css">
            <link rel="stylesheet" type="text/css" href="css/animate.css">

        <!-- Favicon -->
		    <link rel="icon" type="image/x-icon" href="media/svg/logo.svg"/>
            <!-- JavaScript -->
                <!-- App -->
                    <script src="javascript/js/app.js"></script>
                <!-- Alert -->
                    <script src="javascript/js/alert.js"></script>
                <!-- javascript -->
                    <script src="javascript/js/javascript.js"></script>
                <!-- nav barre -->
                    <script src="javascript/other/navbarre_script.js"></script>
                <!-- ColorMode -->
                    <script src="javascript/other/colorMode.js"></script>
                <!-- Slide -->
                    <script src="javascript/js/slide.js"></script>

        <!-- Title -->
		    <title>Celia-css || Index PHP</title>
	</head>
	<body>

<!-- General-->
	<header class="flex-center" >
        <nav class="flex-center"">
            <div class="marges-10">
                <a href="#">
                    <img src="" alt="logo" class="marges-5">
                    <h1 class="marges-5">Celia-css</h1>
                </a>
            </div>
            <div class="side-nav">
                <a href="#">
                    <button class="home button btn-active text-active">
                        Home
                    </button>
                </a>
                <a href="exemple.html">
                    <button class="btn-nav button">
                        Service
                    </button>
                </a>
                <a href="exemple.html">
                    <button class="btn-nav button">
                        Contact
                    </button>
                </a>
        
                <a href="exemple.html">
                    <button class="btn-nav button">
                        About &rarr;
                    </button>
                </a>
            </div>

                <button class="burger" id="myBtn" onclick="toggleSplitburger(this)">
                    <span class="spanBurger" id="myBtn">        </span>
                    <span class="spanBurger" id="myBtn">        </span>
                    <span class="spanBurger" id="myBtn">        </span>
                </button>

                <div class="modal-menu" id="myModal" hidden>
                    <div>
                        <button class="close-modal button btn-danger marges-5" id="close" onclick="closeModal(this)">
                            <p class="marges-center">
                                &times; <br />
                                close menu
                            </p>
                        </button>
                    </div>
                    <div class="nav-modal">
                        <div class="nav-modal">
                            <a href="exemple.html">
                                <button class="button btn-active text-active marges-5">
                                    Home
                                </button>
                            </a>
                            <a href="exemple.html">
                                <button class="btn-nav button marges-5">
                                    Service
                                </button>
                            </a>
                            <a href="exemple.html">
                                <button class="btn-nav button marges-5">
                                    Contact
                                </button>
                            </a>
                            <a href="exemple.html">
                                <button class="btn-nav button marges-5">
                                    About &rarr;
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

        </nav>
    </header>

    <div class="bg-size bg-two-color">
        <span class="effect-1"></span>
    </div>

        <div class="flex">
            <p class="marges-5">
                Lorem ipsum, <br />
                dolor sit amet consectetur adipisicing elit. <br />
                Suscipit in voluptatum asperiores quo illo, <br />
                iste minus. <br />
                Nisi, <br />
                ratione ex quisquam deleniti ducimus tempore natus alias ut dolor molestiae, <br />
                et voluptates. <br />
            </p>
            <p class="marges-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                Voluptate veritatis reiciendis iusto, <br />
                ipsam mollitia, <br />
                voluptatum placeat adipisci quidem ducimus consequatur voluptatem, <br />
                fugit earum deserunt deleniti cumque aliquam non repudiandae vero. <br />
            </p>
        </div>


        <div class="slide-show-container">
            <div>
                <div class="slides">
                    <img src="media/images/" alt="image" id="slide">
                </div>
                <div>
                    <button class="next" onclick="ChangeSlide(-1)">
                        <span class="next-span">&rarr;</span>
                    </button>
                    <button class="prev" onclick="ChangeSlide(1)">
                        <span class="prev-span">&larr;</span>
                    </button>
                </div>
            </div>
            <div>
                <span class="circle-dot" onclick="(this)"></span>
                <span class="square-dot" onclick="(this)"></span>
                <span class="rectangle-dot" onclick="(this)"></span>
            </div>
        </div>

        <div class="container">
            <!-- ABOUT -->
            <div class="grid-container marges-5">
                <p>
                    Lorem ipsum, <br />
                    dolor sit amet consectetur adipisicing elit. <br />
                    Suscipit in voluptatum asperiores quo illo, <br />
                    iste minus. <br />
                    Nisi, <br />
                    ratione ex quisquam deleniti ducimus tempore natus alias ut dolor molestiae, <br />
                    et voluptates. <br />
                </p>
            </div>
            <div class="grid-container marges-5">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                    Voluptate veritatis reiciendis iusto, <br />
                    ipsam mollitia, <br />
                    voluptatum placeat adipisci quidem ducimus consequatur voluptatem, <br />
                    fugit earum deserunt deleniti cumque aliquam non repudiandae vero. <br />
                </p>
            </div>
        </div>

        <div class="flex">
            <!-- SERVICE -->
            <div class="card-fluid-transparent">
                <img src="media/" class="img-square">
                <img src="media/" class="img-circle">
                <img src="media/" class="img-square-h">
                <img src="media/" class="img-square-l">
            </div>
            <div class="card-fluid-transparent">
                <img src="media/" class="img-fluid">
            </div>
        </div>

        <div class="contact marges">
            <h2 class="w-377 marges-center">Contact</h2>
            <div class="">
                <!-- CONTACT -->
                    <p class="marges-5">
                        Tel.: <br />
                        Mail.: <br />
                        Adresse.: <br />
                    </p>
            </div>
            <div>
                <form class="form bg-five-color">
                    <input type="text" placeholder="1er input" class="input bg-seven-color">
                    <input type="text" placeholder="2em input" class="input bg-seven-color">
                    <input type="text" placeholder="3em input" class="input bg-seven-color">
                    <input type="text" placeholder="4em input" class="input bg-seven-color">
                    <input type="text" placeholder="5em input" class="input bg-seven-color">
                    <input type="text" placeholder="6em input" class="input bg-seven-color">
                    <input type="text" placeholder="7em input" class="input bg-seven-color">
                    <input type="text" placeholder="8em input" class="input bg-seven-color">
                    <textarea name="" id=""  placeholder="Message" class="textarea bg-seven-color"></textarea>
                        <div class="send">
                            <input type="submit" value="Envoyer" class="button send">
                        </div>
                </form>
            </div>
        </div>

	<footer class="flex-center marges flex">
        <!-- BUTTON MODE -->
            <button class="button-mode box-shadow marges" onclick="darkmode(this)">Dark-mode</button>
            <button class="button-mode box-shadow marges" onclick="lightmode(this)">Light-mode</button>

            <button class="button-mode box-shadow marges" onclick="graymode(this)">Gray-mode</button>
            <button class="button-mode box-shadow marges" onclick="bluemode(this)">Blue-mode</button>

            <button class="button-mode box-shadow marges" onclick="redmode(this)">Red-mode</button>
            <button class="button-mode box-shadow marges" onclick="brownmode(this)">Brown-mode</button>

            <button class="button-mode box-shadow marges" onclick="yellowmode(this)">Yellow-mode</button>
            <button class="button-mode box-shadow marges" onclick="greenmode(this)">Green-mode</button>

            <button class="button-mode box-shadow marges" onclick="cyanmode(this)">Cyan-mode</button>
            <button class="button-mode box-shadow marges" onclick="magentamode(this)">Magenta-mode</button>

            <button class="button-mode box-shadow marges" onclick="beigemode(this)">Beige-mode</button>
            <button class="button-mode box-shadow marges" onclick="violetmode(this)">Violet-mode</button>

            <button class="button-mode box-shadow marges" onclick="goldmode(this)">Gold-mode</button>
            <button class="button-mode box-shadow marges" onclick="silvermode(this)">Silver-mode</button>
    </footer>

	</body>
</html>