app.controller('fetchPracticeTestTime', function ($scope, $http) {

    $http.get("./app/services/testExamTimeService/testExamTime.service.php").then(function(response){

        $scope.time = response.data;

    })

});