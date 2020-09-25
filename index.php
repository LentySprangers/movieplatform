<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
        body {
            background-image: url("assets/img/159889584805467782.gif");
            background-attachment: fixed;
        }

        #search-bar {
            background-color: gray;
        }

        .searchfield {
            margin-top: auto;
            width: 100px;
            background-color: grey;
        }

        .searchfield:hover {
            color: red;
        }

        #menu-bar {
            background-color: darkgrey;

        }

        #movie-carousel {
            background-color: grey;
            max-height: 350px;
            overflow: hidden;
        }


        #side-bar {
            background-color: grey;
        }

        .movie-poster {
            margin: 10px;
        }

        .movie-poster-img:hover {
            border: red solid 2px;
        }

        #side-bar,
        #movie-overview {
            background-color: #3B3B3B;
        }

        a {
            text-decoration: none;
            color: red;
        }

        a:hover {
            text-decoration: underline;
            color: red;
        }

        p {
            color: white;
            font-size: large;
        }

        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <div class="container" style="background-color: grey;">
            <div id="search-bar" class="row">
                <div class="col-9">


                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                style="margin-top: 10px;">Search...</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" style="margin-top: 10px;">
                    </div>
                </div>
                <div class="col" style="margin-top: 10px;">
                    <h5>Language</h5>
                </div>
                <div class="col" style="margin-top: 10px;">
                    <h5>Login</h5>
                </div>
            </div>

            <div id="menu-bar" class="row">
                <div class="col-6" style="margin-top: 10px;">

                    <h1 style="color: red;">
                        <img src="assets\img\—Pngtree—cinema popcorn decoration illustration_4514619.png"
                            alt="Movieplatformlogo" width="80" height="60">Movieplatform
                    </h1>
                </div>
                <div class="col-3" style="margin-top: 10px;">
                    <h2>
                        <a href="addmovie.php">Add movie</a>
                    </h2>
                </div>
                <div class="col-3" style="margin-top: 10px;">
                    <h2>
                        <a href="aboutme.php">About me</a>
                    </h2>
                </div>
            </div>
            <div id="movie-carousel" class="row no-gutters" style="margin: 0 -15px">
                <div class="col">
                    <div class="image-carousel">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets\img\102667.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets\img\Aquaman-movie-poster-header.jpg" class="img-fluid" alt="...">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-3 m-2" id="side-bar">
                    <p style="text-align: center;">Filter by:</p>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Genre
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Horror
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Comedy
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Romance
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Thriller
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Drama
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Animation
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Actor/actress
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Director
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="movie-overview" class="col m-2">Populair movies
                <div class="row justify-content-center">
                    <?php 
                        for ($i=0; $i < 28; $i++) { 
                        ?>
                    <div class="col-3 text-center movie-poster" style="max-width: 170px;">
                        <a href="thor.php">
                            <img class="img-fluid movie-poster-img" src="assets\img\thor.jpg" alt="Thor">
                        </a>
                        <span style="color: white"><a href="thor.php">Thor</a></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col" style="text-align: center;">
                Made by Lenty Sprangers<br>
                <a href="aboutme.php">About Lenty Sprangers</a>
            </div>
        </div>
        </div>
    </body>

</html>
