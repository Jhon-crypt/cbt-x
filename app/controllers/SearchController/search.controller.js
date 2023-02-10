app.controller('searchController', function ($scope, $http) {

    $scope.searchTest = function () {

        $http({ 
            method : 'post',
            url : "./app/services/searchResultService/searchResult.service.php",
            data : {
                searchValue : $scope.search
            }
        }).then(function(response){

        $scope.success = response.data;
            //window.location.href = "#!success"

        });

    }
    

});