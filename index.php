<html>

    <?php

include('inc/head.php');

?>

    <body>

        <div class="container">

            <?php

include('inc/header.php');

?>
            <div id="movie-carousel" class="row no-gutters" style="margin: 0 -15px">
                <div class="col">
                    <div class="image-carousel">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <img src="assets\img\102667.jpg" class="img-fluid" alt="joker">
                                    <h1 style="margin-top: -100px; margin-left: 80px">
                                        The Joker
                                    </h1>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets\img\Aquaman-movie-poster-header.jpg" class="img-fluid"
                                        alt="aquaman">
                                    <h1 style="margin-top: -290px; margin-left: 80px">
                                        Aquaman
                                    </h1>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-3 mx-2 my-4" id="side-bar">
                    <p style="text-align: center; margin-top:5px; margin-bottom:5px;">Filter by:</p>
                    <div class="accordion" id="filter-expand">
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
                                data-parent="#filter-expand">
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
                                data-parent="#filter-expand">
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
                                data-parent="#filter-expand">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="movie-overview" class="col mx-2 my-4">
                    <p style="text-align: center; margin-top:5px; margin-bottom:5px;">Populair movies</p>
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
            <?php

include('inc/footer.php');

?>
        </div>



    </body>


</html>
