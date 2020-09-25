<html>

    <head>
        <style>
        .grid-container {
            display: grid;
            width: 80%;
            margin: 0 auto;
            grid-template-columns: auto auto auto;
            grid-gap: 10px;
            background-color: #2196F3;
            padding: 10px;
        }

        .header-bar {
            background-color: grey;
            display: inline-block;

            grid-column-start: 1;
            grid-column-end: 4;
        }

        .filters {
            grid-column-start: 1;
            grid-row-start: 2;
            grid-row-end: 3;
        }

        .movie-overview {
            grid-column-start: 2;
            grid-row-start: 4;
            grid-row-end: 4;
        }

        .search-bar {
            width: 200px;
            float: left;
        }

        .login {
            width: 100px;
            float: right;
        }

        .language {
            width: 100px;
            float: right;
        }

        .menu-bar {
            background-color: pink;
            grid-column-start: 1;
            grid-column-end: 4;
            grid-row-start: 3;
            grid-row-end: 3;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column: 1 / 5;
        }

        .menu-bar h2 {
            margin: 0;
        }

        </style>
    </head>

    <body>
        </div>
        <div class="grid-container">
            <div class="header-bar">
                <div class="search-bar">Search</div>
                <div class="language">Language</div>
                <div class="login">Login</div>
            </div>
            <div class="menu-bar">
                <h2>LOGO</h2>
                <h2>
                    <a href="#">About me</a>
                </h2>
                <h2>
                    <a href="#">Add movie</a>
                </h2>
            </div>
        </div>
        <div class="movie-carousel">

        </div>

        <div class="filters">filters</div>
        <div class="movie-overview">overview</div>
    </body>

</html>
