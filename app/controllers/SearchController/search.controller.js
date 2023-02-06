app.controller('searchController', function ($scope, $http) {

    $scope.searchTest = function () {

        $http({ 
            method : 'post',
            url : "",
            data : {
                searchTest : $scope.searchTest
            }
        }).then(function(response){

            $scope.success = response.data;
            //window.location.href = "#!success"

        });

    }
    

});