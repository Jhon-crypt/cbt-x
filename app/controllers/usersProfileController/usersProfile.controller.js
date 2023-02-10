app.controller('userProfile', function ($scope, $http) {

    $http.get("./app/services/usersProfileService/usersProfile.service.php").then(function(response){

        $scope.result = response.data;

    });

});