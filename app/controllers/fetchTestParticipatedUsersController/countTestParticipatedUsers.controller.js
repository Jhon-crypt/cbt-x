app.controller('countParticipatedUsers', function ($scope, $http) {

    $http.get("./app/services/fetchTestParticipatedUsersService/countTestParticipatedUsers.service.php").then(function(response){

        $scope.result = response.data;

    });

});