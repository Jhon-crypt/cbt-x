app.controller('login', function ($scope, $http) {

        $scope.login = function () {

            $http({ 
                method : 'post',
                url : "./app/services/loginService/login.service.php",
                data : $scope.user,
            }).then(function(response){
                
                $scope.loginStatus = response.data;

            });

        }

});