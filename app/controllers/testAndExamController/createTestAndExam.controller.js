app.controller('create', function ($scope, $http) {

        $scope.create = function () {

            $http({ 
                method : 'post',
                url : "./app/services/testAndExamService/createTestAndExam.service.php",
                data : $scope.create,
            }).then(function(response){

                $scope.result = response.data;

            });

        }
        

});