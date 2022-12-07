app.directive("successPage", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <h1>Account Created <i class="fa fa-check-circle"></i></h1>

            <a href="#!login" style="text-decoration:none;">
            <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                Login To Continue <i class="fa fa-sign-in"></i>

            </button>
            </a>

        </div>
        
        `

    }

});