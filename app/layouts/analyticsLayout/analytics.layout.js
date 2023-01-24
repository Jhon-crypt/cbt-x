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

                <div class="card bg-light" ng-repeat="x in cards" style="width:350px;">

                    <div class="text-light" style="background-color:#00AAF4">

                        <div class="container pt-3 pb-3">
                        
                            <h2>
                                <i class="fa fa-mortar-board"></i> {{ x.title }}
                            </h2>

                            <hr>
                        
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

                                    <i class="fa fa-star-o"></i> {{ x.status }}

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-genderless"></i> {{ x.type }}

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-table"></i> {{ x.dateCreated }}

                                </a>

                            </li>
                            
                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <i class="fa fa-clock-o"></i> {{ x.timeCreated }}

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="pt-5">

                <h1><i class="fa fa-users"></i> Users participated <span class="badge bg-secondary">20</i> </h1>

                <span class="text-muted">
                    <i class="fa fa-info-circle"></i> People that have taken part in your test/exam
                </span>

                <hr>

                <ul class="nav">

                    <li class="nav-item" ng-repeat="x in users">

                        <a class="nav-link text-dark" style="text-decoration:none;">

                            <div class="card bg-light" style="width:250px;">

                                <div class="card-body">

                                    <div align="center">

                                        <img class="d-block mx-auto mb-2" src="./app/images/nftt.png"
                                        style="object-fit:cover;border:1px solid black;height:100px;border-radius:50px;width:100px;">

                                        <span class="mb-2">{{ x.username }}</span><br>

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