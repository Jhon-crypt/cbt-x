app.directive("logout", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <h1>You Have Been Logged Out <i class="fa fa-sign-out"></i></h1>

            <a href="#!login" style="text-decoration:none;">
                <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                    Login Again <i class="fa fa-sign-in"></i>

                </button>
            </a>

        </div>
        
        `

    }

});