app.controller("routeDeleteAllQuestion", function($scope, $routeParams, $http){

    $scope.deleteQuestionQuery = $routeParams.deleteQuery

    $http({
        method : 'post',
        url : "./app/services/deleteQuestionService/deleteAllQuestion.service.php",
        data : {
            deleteQuery : $scope.deleteQuestionQuery
        }
    }).then(function(response){

        $scope.deleteResult = response.data;

    });

});