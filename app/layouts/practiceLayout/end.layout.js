app.directive("end", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <div class="card" style="width:250px;">

                <div class="card-body">
                <div ng-controller="fetchResult">

                    <h3 class="text-success">Test Ended <i class="fa fa-check-circle"></i></h3>

                    <div ng-repeat="x in userResult">
                        <p class="lead">
                            Your score is {{ x.score }}
                        </p>
                    
                        <a class="text-light" href="#!userInfo/{{ x.test_id }}" style="text-decoration:none;">
                            <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                                Retake Test <i class="fa fa-check-square-o"></i>

                            </button>
                        </a>

                    </div>

                </div>
                </div>

            </div>

        </div>
        
        `

    }

});