app.directive("end", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <div class="card" style="width:250px;">

                <div class="card-body">

                    <h3 class="text-success">Test Ended <i class="fa fa-check-circle"></i></h3>

                    <p class="lead">Your score is 12</p>

                    <a href="#!dashboard" style="text-decoration:none;">
                        <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                        Retake Test <i class="fa fa-check-square-o"></i>

                        </button>
                    </a>

                </div>

            </div>

        </div>
        
        `

    }

});