app.controller('create', function ($scope, $http) {

        $scope.createTestAndExam = function () {

            $http({ 
                method : 'post',
                url : "./app/services/testAndExamService/createTestAndExam.service.php",
                data : $scope.cr,
            }).then(function(response){

                $scope.create = response.data;
                //window.location.href = "#!success"

            });

        }
        

});