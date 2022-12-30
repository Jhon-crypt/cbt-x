app.controller('sessionGuard', function ($scope, $http) {

$http({
        method : 'get',
        url : "./app/services/sessionGuardService/session-guard.service.php"
    }).then(function(response){

        $scope.sess = response.data;

    });

});