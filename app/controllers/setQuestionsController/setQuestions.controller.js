app.controller('setQuestionsForm', function ($scope, $http){

    $scope.setQuestion = function () {

        $http({
            method : 'post',
            url : "./app/services/setQuestionsService/setQuestions.service.php",
            data : $scope.sq,
        }).then(function(response){

            $scope.result = response.data;
            window.location.reload();

        });

    }

});