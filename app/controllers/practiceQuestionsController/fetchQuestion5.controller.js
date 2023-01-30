app.controller('fetchQuestion5', function ($scope, $http){

    $http.get("./app/services/fetchQuestionsService/fetchQuestionFive.service.php").then(function(response){

        $scope.questionFive = response.data;

    })

});