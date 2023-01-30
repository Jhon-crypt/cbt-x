app.controller('fetchQuestion1', function ($scope, $http){

    $http.get("./app/services/fetchQuestionsService/fetchQuestionOne.service.php").then(function(response){

        $scope.questionOne = response.data;

    })

});