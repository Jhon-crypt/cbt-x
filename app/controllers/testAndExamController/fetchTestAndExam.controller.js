app.controller('fetchTestAndExam', function ($scope, $http) {

    $http.get("./app/services/testAndExamService/fetchTestAndExam.service.php").then(function(response){

        $scope.result = response.data;

    });

});

//