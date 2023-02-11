app.controller('fetchParticipatedUsers', function ($scope, $http) {

    $http.get("./app/services/fetchTestParticipatedUsersService/fetchTestParticipatedUsers.service.php").then(function(response){

        $scope.users = response.data;

    });

});