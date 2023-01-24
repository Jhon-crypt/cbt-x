app.directive("deleteQuestion", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center" ng-repeat="x in result">

            <h1 class="text-danger">{{ x.statement }}<i class="fa fa-trash"></i></h1>

        </div>
        
        `

    }

});