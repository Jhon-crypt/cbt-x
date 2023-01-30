app.controller('fetchQuestion4', function ($scope, $http){

    $http.get("./app/services/fetchQuestionsService/fetchQuestionFour.service.php").then(function(response){

        $scope.questionFour = response.data;

    })

});