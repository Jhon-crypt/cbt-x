<?php

namespace App\views;

class views{

    public $index_page;

    public function displayIndexPage(){

        $this->index_page = '
        
    <!doctype html>

    <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Oladele John, JohnOx">
            <title>CBT-X</title>

            <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

            <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

            <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

            <link rel="manifest" href="site.webmanifest">

            <!-- Bootstrap core CSS -->
            <link href="./app/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link rel="stylesheet" href="./app/assets/font-awesome/css/font-awesome.min.css">

            <link rel="stylesheet" href="./app/assets/angular-loading-bar-master/angular-loading-bar-master/build/loading-bar.css" 
            type="text/css" media="all">

            <!-- JavaScript Bundle with Popper -->
            <script src="./app/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

            <!-- angular Js -->
            <script src="./app/assets/angular-1.8.2/angular.min.js"></script>

            <script src="./app/assets/angular-1.8.2/angular-route.min.js"></script>

            <script src="./app/assets/angular-loading-bar-master/angular-loading-bar-master/build/loading-bar.min.js"></script>

        </head>

        <body ng-app="app">

            <main>

                <heading></heading>

                <ng-view></ng-view>

            </main>

            <script src="./app/modules/app.module.js"></script>

            <script src="./app/route/route.js"></script>

            <script src="./app/layouts/heading/heading.layout.js"></script>

            <script src="./app/layouts/searchLayout/search.layout.js"></script>

        </body>
    
    </html>
        
        ';

    }

}

?>