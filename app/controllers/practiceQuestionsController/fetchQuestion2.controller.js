app.controller('fetchQuestion2', function ($scope, $http){

    $http.get("./app/services/fetchQuestionsService/fetchQuestionTwo.service.php").then(function(response){

        $scope.questionTwo = response.data;

    })

});