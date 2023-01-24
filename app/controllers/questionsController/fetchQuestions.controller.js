app.controller('fetchQuestions', function ($scope, $http) {

    $http.get("./app/services/fetchQuestionsService/fetchQuestions.service.php").then(function(response){

        $scope.quest = response.data;

    })

});