<?php

namespace App\views;

class adminViews{

    public $admin_page;

    public function displayAdminPage(){

        $this->admin_page = '
        
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

        <style>

            .sidebar {
                position: fixed;
                top: 0;
                /* rtl:raw:
                right: 0;
                */
                bottom: 0;
                /* rtl:remove */
                left: 0;
                z-index: 100; /* Behind the navbar */
                padding: 48px 0 0; /* Height of navbar */
                box-shadow: inset -1px 0 0 #00aaf4;
            }

            .sidebar-sticky {
                position: relative;
                top: 0;
                height: calc(100vh - 48px);
                padding-top: .5rem;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
            }

        </style>

        <body ng-app="app">

            <main>

                <heading></heading>

                <ng-view></ng-view>

            </main>

            <script src="./app/modules/app.module.js"></script>

            <script src="./app/route/admin-route.js"></script>

            <script src="./app/layouts/adminLayout/adminHeader/admin-header.layout.js"></script>

            <script src="./app/layouts/adminLayout/home/home.layout.js"></script>


        ';

    }

}

?>