app.controller('fetchQuestion3', function ($scope, $http){

    $http.get("./app/services/fetchQuestionsService/fetchQuestionThree.service.php").then(function(response){

        $scope.questionThree = response.data;

    })

});