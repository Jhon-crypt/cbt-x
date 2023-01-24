app.controller("routeDeleteQuestion", function($scope, $routeParams, $http){

    $scope.deleteQuestionRefId = $routeParams.questionId

    $http({
        method : 'post',
        url : "./app/services/deleteQuestionService/deleteQuestion.service.php",
        data : {
            deleteQuestionId : $scope.deleteQuestionRefId
        }
    }).then(function(response){

        $scope.result = response.data;

    });


});