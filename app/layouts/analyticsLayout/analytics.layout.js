app.directive("analytics", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5">

            <h1>Test/exam analytics <i class="fa fa-bar-chart"></i></h1>

            <span class="text-muted">
               <i class="fa fa-info-circle"></i> Get detailed info on your created test/exam
            </span>

            <hr>

            <div class="pt-5">

                <h3> 
                    <i class="fa fa-users"></i> Users participated 
                        <span class="badge bg-secondary"> 
                            <span ng-controller="countParticipatedUsers">
                                <span ng-repeat="x in result">{{ x.count }}</span>
                            </span>
                        </span>
                </h3>

                <span class="text-muted">
                    <i class="fa fa-info-circle"></i> People that have taken part in your test/exam 
                </span>

                <hr>

                <ul class="nav" ng-controller="fetchParticipatedUsers">

                    <li class="nav-item" ng-repeat="x in users">

                        <a class="nav-link text-dark" style="text-decoration:none;">

                            <div class="card bg-light" style="width:250px;">

                                <div class="card-body">

                                    <div align="center">

                                        <i class="fa fa-user-circle-o mb-3" style="font-size:50px;"></i> <br>
                                        
                                        <span class="mb-2">{{ x.infoFromUser }}</span><br>

                                        <button class="btn btn-md" style="background-color:orange;">
                                            Score : {{ x.score }}
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

        
        `

    }

});