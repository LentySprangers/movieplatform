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

                    <h1 style="color: red;"><a href="index.php">
                            <img src="assets\img\—Pngtree—cinema popcorn decoration illustration_4514619.png"
                                alt="Movieplatformlogo" width="80" height="60">Movieplatform</a>
                    </h1>
                </div>
                <div class="col-3" style="margin-top: 10px;">
                    <h2>
                        <a href="index.php">Home</a>
                    </h2>

                    <div class="col-3" style="margin-top: 10px;">
                        <h2>
                            <a href="addmovie.php">Add movie</a>
                        </h2>
                    </div>

                    <div id="about-me" class="col m-2">About me

                    </div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;">
                        Made by Lenty Sprangers<br>
                        <a href="aboutme.php">About Lenty Sprangers</a>
                    </div>
                </div>
            </div>
    </body>

</html>
