<html>

    <head>
        <style>
        /*   .grid-container {
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
            grid-column-start: 1;
            grid-column-end: 4;
            grid-row-start: 3;
            grid-row-end: 3;

        }*/
        .parent {
            display: grid;
            width: 80%;
            margin: 0 auto;
            grid-template-columns: 0.3fr 1fr;
            grid-template-rows: 2.5fr 6fr 25fr 100fr;
            grid-column-gap: 2px;
            grid-row-gap: 2px;
        }

        .div1 {
            background-color: grey;
            grid-area: 1 / 1 / 2 / 3;

        }

        .div2 {
            background-color: blue;
            grid-area: 2 / 1 / 3 / 3;
        }

        .div3 {
            background-color: grey;
            grid-area: 3 / 1 / 4 / 3;
        }

        .div4 {
            background-color: blue;
            grid-area: 4 / 1 / 5 / 2;
        }

        .div5 {
            background-color: grey;
            grid-area: 4 / 2 / 5 / 3;
        }

        </style>
    </head>

    <body>
        <div class="parent">
            <div class="div1">search </div>
            <div class="div2">menu </div>
            <div class="div3"> hallo</div>
            <div class="div4">filters </div>
            <div class="div5">overview </div>
        </div>

        <!-- </div>
        <div class="grid-container">
            <div class="header-bar">
                <div class="search-bar">Search</div>
                <div class="language">Language</div>
                <div class="login">Login</div>

            </div>
            <div class="menu-bar">Movieplatform</div>

            <div class="filters">filters</div>
            <div class="movie-overview">overview</div> -->
    </body>

</html>
