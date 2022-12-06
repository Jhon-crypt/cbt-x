app.config(function($routeProvider){

$routeProvider
    .when("/", {
        templateUrl : "./app/views/signupView/signup.view.html"
    })
    .when("/signup", {
        templateUrl : "./app/views/loginView/login.view.html"
    })

});