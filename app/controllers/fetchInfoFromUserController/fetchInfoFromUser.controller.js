app.controller('fetchInfoFromUser', function ($scope, $http) {

    $http.get("./app/services/fetchInfoFromUserService/fetchInforFromUser.service.php").then(function(response){

        $scope.info = response.data;

    })

});