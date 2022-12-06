app.config(function($routeProvider){

$routeProvider
    .when("/", {
        templateUrl : "./app/views/searchView/search.view.html"
    })
    .when("/signup", {
        templateUrl : "./app/views/loginView/login.view.html"
    })

});