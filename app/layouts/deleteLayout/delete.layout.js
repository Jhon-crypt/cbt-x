app.directive("delete", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <h1 class="text-danger">Test Deleted <i class="fa fa-trash"></i></h1>

            <a href="#!dashboard" style="text-decoration:none;">
                <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                    <i class="fa fa-arrow-circle-left"></i> Back To Home

                </button>
            </a>

        </div>
        
        `

    }

});