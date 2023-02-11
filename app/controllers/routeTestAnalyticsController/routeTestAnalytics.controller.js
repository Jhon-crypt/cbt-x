app.controller("routeTestAnalytics", function($scope, $routeParams, $http){
    $scope.testExamRefId = $routeParams.testExamId

    $http({
        method : 'post',
        url : "./app/services/testExamIdSessionService/testExamIdSession.service.php",
        data : {
            testExamId : $scope.testExamRefId
        }
    }).then(function(response){

        $scope.result = response.data;

    });

});