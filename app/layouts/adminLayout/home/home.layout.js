app.directive("home", function(){

    return {

        template : `
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="container">

                <div class="card bg-light mb-5">

                    <div class="card-body shadow">

                        <h4><i class="fa fa-align-left"></i> Highlights</h4>

                        <ul class="nav">

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <div class="card bg-light" style="width:200px;">

                                        <div class="card-body">

                                            <div align="center">

                                                <i class="fa fa-users mb-1" style="font-size:60px;"></i>

                                                <h4>14000 users</h4>

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <div class="card bg-light" style="width:200px;">

                                        <div class="card-body">

                                            <div align="center">

                                                <i class="fa fa-check-square mb-1" style="font-size:60px;"></i>

                                                <h4>20000 Exams</h4>

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <div class="card bg-light" style="width:200px;">

                                        <div class="card-body">

                                            <div align="center">

                                                <i class="fa fa-check-square-o mb-1" style="font-size:60px;"></i>

                                                <h4>19000 Tests</h4>

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link text-dark" style="text-decoration:none;">

                                    <div class="card bg-light" style="width:200px;">

                                        <div class="card-body">

                                            <div align="center">

                                                <i class="fa fa-list mb-1" style="font-size:60px;"></i>

                                                <h4>39000 Results</h4>

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>
                <!-- highlights card -->

                <div class="card bg-light mb-5">

                    <div class="card-body shadow">

                        <h4><i class="fa fa-check-square"></i> Top exams</h4>

                        <div class="card-body">

                            

                        </div>

                    </div>

                </div>
                <!-- top exams card -->

            </div>
        
        </main>
        
        `

    }

});