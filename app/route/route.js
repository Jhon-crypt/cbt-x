app.config(function($routeProvider){

$routeProvider
    .when("/", {
        templateUrl : "./app/views/searchView/search.view.html"
    })
    .when("/signup", {
        templateUrl : "./app/views/signupView/signup.view.html"
    })
    .when("/login", {
        templateUrl : "./app/views/loginView/login.view.html"
    })
    .when("/success", {
        templateUrl : "./app/views/signupView/success.view.html"
    })
    .when("/dashboard", {
        templateUrl : "./app/views/dashboardView/dashboard.view.html"
    })
    .when("/create", {
        templateUrl : "./app/views/createView/create.view.html"
    })

});