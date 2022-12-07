app.directive("dashboard", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5">

            <h1>Home <i class="fa fa-home"></i></h1>

            <span class="text-muted">
               <i class="fa fa-info-circle"></i> Tests/exams created
            </span>

            <hr>

            <div class="row">
            
                <div class="col mb-3" ng-repeat="x in cards">

                    <div class="card bg-light" style="width:300px;">

                        <div class="text-light" style="background-color:#00AAF4">

                            <div class="container pt-3 pb-3">

                                <div class="col d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                        <h2><font color="orange"><i class="fa fa-mortar-board"></i></font></h2>
                                    </div>
                                    <div>
                                        <h2>{{ x.title }}</h2>
                                    </div>
                                </div>

                                <hr>

                                <div class="col d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                        <h2><font color="orange"><i class="fa fa-align-left"></i></font></h2>
                                    </div>
                                    <div>
                                        <h2>Description</h2>
                                        <p>{{ x.about }}</p>
                                    </div>
                                </div>

                            </div>
                    

                        </div>

                        <div class="card-body">

                            <div class="clearfix">

                                <span class="float-start">

                                    <i class="fa fa-list-ul"></i> {{ x.question }} questions

                                </span>

                                <span class="float-end">

                                    <i class="fa fa-clock-o"></i> {{ x.timeLimit }} minutes

                                </span>

                            </div>


                            <div class="clearfix">

                                <span class="float-start">

                                    <i class="fa fa-star-o"></i> {{ x.status }}

                                </span>

                                <span class="float-end">

                                    <i class="fa fa-genderless"></i> {{ x.type }}

                                </span>

                            </div>

                            <div class="clearfix">

                                <span class="float-start">

                                    <i class="fa fa-table"></i> {{ x.dateCreated }}

                                </span>

                                <span class="float-end">

                                    <i class="fa fa-clock-o"></i> {{ x.timeCreated }}

                                </span>

                            </div>


                            <p class="text-center text-muted pt-2">
                                Created by {{ x.author }}
                            </p>

                            <div align="center">

                                <button class="btn btn-lg text-light" style="background-color:orange">
                                    Practice {{ x.type }} <i class="fa fa-external-link"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
        `

    }

});