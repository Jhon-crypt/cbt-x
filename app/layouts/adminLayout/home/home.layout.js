app.directive("home", function(){

    return {

        template : `

        <style>

        .nav-scroller {
            position: relative;
            z-index: 2;
            
            overflow-y: hidden;
          }
          
          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            color: rgba(255, 255, 255, .75);
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }
          

        </style>
        
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

                        <div class="card-body pt-4">

                            <div class="nav-scroller">

                                <nav class="nav nav-underline" aria-label="Secondary navigation">
                                    <a class="nav-link text-white" href="#">

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

                                                <div class="mt-2 mb-2" align="center">

                                                    <div class="dropdown">

                                                        <button class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown">

                                                            Settings <i class="fa fa-cogs"></i>

                                                        </button>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#!analytics">
                                                                <i class="fa fa-bar-chart"></i> {{ x.type }} analytics</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#!setQuestions">
                                                                <i class="fa fa-list-alt"></i> Set questions</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#!delete">
                                                                <i class="fa fa-trash"></i> Delete {{ x.type }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <p class="text-center text-muted pt-2">
                                                    Created by @{{ x.author }}
                                                </p>

                                                <div align="center">

                                                    <a class="text-light" href="#!practice" style="text-decoration:none;">
                                                        <button class="btn btn-lg text-light" style="background-color:orange">
                                                            Practice {{ x.type }} <i class="fa fa-external-link"></i>
                                                        </button>
                                                    </a>

                                                </div>

                                            </div>

                                        </div>
                                        <!-- test/exam cards -->


                                    </a>
                                </nav>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- top exams card -->

            </div>
        
        </main>
        
        `

    }

});