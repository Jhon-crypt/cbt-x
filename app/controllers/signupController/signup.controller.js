app.controller('signup', function ($scope, $http) {

    $scope.signup = function () {

        $http({ 
            method : 'post',
            url : "./app/services/signupService/signup.service.php",
            data : $scope.user,
        }).then(function(response){
            $scope.myData = response.data;
        });

    }

});