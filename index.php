<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
        #search-bar {
            background-color: gray;
        }

        #menu-bar {
            background-color: pink;
        }

        #movie-carousel {

            background-color: red;
        }

        .image-carousel {
            background-color: white;
            height: 200px;
        }

        #side-bar {
            background-color: grey;
        }

        </style>

    </head>

    <body>
        <div class="container">
            <div id="search-bar" class="row">
                <div class="col-9">
                    <h5>Search</h5>
                </div>
                <div class="col">
                    <h5> Language</h5>
                </div>
                <div class="col">
                    <h5>Login</h5>
                </div>
            </div>

            <div id="menu-bar" class="row">
                <div class="col-6">
                    <h1>LOGO</h1>
                </div>
                <div class="col-3">
                    <h2>
                        <a href="#">About me</a>
                    </h2>
                </div>
                <div class="col-3">
                    <h2>
                        <a href="#">Add movie</a>
                    </h2>
                </div>
            </div>
            <div id="movie-carousel" class="row ">
                <div class="col">
                    <div class="image-carousel">

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-3" id="side-bar">sidebar</div>
                <div class="col-9">overview
                    <div class="row">
                        <?php 
 for ($i=0; $i < 20; $i++) { 
   ?>
                        <div class="col-2"> <img class="img-fluid" src="assets\img\thor.jpg" alt="thor"></div>
                        <?php
 }                   ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
1
