app.controller('fetchResult', function ($scope, $http) {

    $http.get("./app/services/fetchUserResultService/fetchUserResult.service.php").then(function(response){

        $scope.userResult = response.data;

    })

});