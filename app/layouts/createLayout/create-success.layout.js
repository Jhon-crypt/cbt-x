app.directive("createSuccess", function(){

    return {

        template : ` 
        
        <div class="container pt-5 mt-5" align="center">

            <h1>Test Created <i class="fa fa-check-circle"></i></h1>

            <a href="#!setQuestions" style="text-decoration:none;">
            <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                Set Your Questions <i class="fa fa-list-alt"></i>

            </button>
            </a>

        </div>
        
        
        `

    }

});