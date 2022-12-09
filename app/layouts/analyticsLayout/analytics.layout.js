app.directive("analytics", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5">

            <h1>Test/exam analytics <i class="fa fa-bar-chart"></i></h1>

            <span class="text-muted">
               <i class="fa fa-info-circle"></i> Get detailed info on your created test/exam
            </span>

            <hr>

            <div align="center">

                <div class="card bg-light" ng-repeat="x in cards" style="">

                    <div class="text-light" style="background-color:#00AAF4">

                        <div class="container pt-3 pb-3">
                        
                            <h4>
                                <i class="fa fa-mortar-board"></i> {{ x.title }}
                            </h4>

                            <hr>

                            <h4><i class="fa fa-align-left"></i> Description</h4>

                            <p> 
                                {{ x.about }}
                            </p>
                            
                        
                        </div>

                    </div>

                    <div class="card-body">

                        <ul class="nav justify-content-center">

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-list-ul"></i> {{ x.question }} questions

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-clock-o"></i> {{ x.timeLimit }} minutes

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-clock-o"></i> {{ x.timeLimit }} minutes

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-star-o"></i> {{ x.status }}

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-genderless"></i> {{ x.type }}

                                </a>

                            </li>

                            <i class="fa fa-genderless"></i> {{ x.type }}

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        
        `

    }

});