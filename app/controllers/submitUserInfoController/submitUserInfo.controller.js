app.controller('userInfo', function ($scope, $http) {

    $scope.submitUserInfo = function () {

        $http({ 
            method : 'post',
            url : "./app/services/submitUserInfoService/submitUserInfo.service.php",
            data : {
                userInfo : $scope.userInfo
            }
        }).then(function(response){

            $scope.success = response.data;
            //window.location.href = "#!success"

        });

    }
    

});