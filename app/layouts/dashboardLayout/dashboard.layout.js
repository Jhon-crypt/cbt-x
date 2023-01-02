app.directive("dashboard", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5" ng-controller="sessionGuard">
        <div ng-repeat="x in sess">

            <div ng-show="{{ x.sessionSet }}">

                <h1>Home <i class="fa fa-home"></i></h1>

                <span class="text-muted">
                    <i class="fa fa-info-circle"></i> Tests/exams created
                </span>

                <hr>

                <div ng-controller="fetchTestAndExam">
                <div class="row">
            
                    <div class="col mb-3" ng-repeat="x in result">

                        <div class="card bg-light" style="width:300px;" ng-show="{{ x.notEmptyStatus }}">

                            <div class="text-light" style="background-color:#00AAF4">

                                <div class="container pt-3 pb-3">

                                    <div class="col d-flex align-items-start">
                                        <div class="flex-shrink-0 me-3">
                                            <h2><font color="orange"><i class="fa fa-mortar-board"></i></font></h2>
                                        </div>
                                        <div>
                                            <h2 style="white-space:nowrap;overflow:hidden;
                                            text-overflow:ellipsis;width:200px">{{ x.title }}</h2>
                                        </div>
                                    </div>


                                </div>
                    

                            </div>

                            <div class="card-body">

                                <div class="clearfix">

                                    <span class="float-start">

                                        <i class="fa fa-list-ul"></i> {{ x.total_questions }} questions

                                    </span>

                                    <span class="float-end">

                                        <i class="fa fa-clock-o"></i> {{ x.time_limit }} minutes

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

                                        <i class="fa fa-table"></i> {{ x.date_created }}

                                    </span>

                                    <span class="float-end">

                                        <i class="fa fa-clock-o"></i> {{ x.time_created }}

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
                                            <li><a class="dropdown-item" href="#!setQuestions/{{ x.ref_id }}">
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

                    </div>

                </div>

                <div ng-repeat="x in result">

                    <div ng-show="{{ x.emptyStatus }}">

                        <div class="pt-3 text-muted" align="center">

                            <h1>Empty Test/Exams <i class="fa fa-ban"></i></h1>

                            <a href="#!create" style="text-decoration:none;">
                                <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                                    Create Test/Exam <i class="fa fa-plus-circle"></i>

                                </button>
                            </a>

                        </div>

                    </div>

                </div>

                </div>

            </div>
            <!-- session check -->

            <div ng-show="{{ x.sessionNotSet }}">

                <div class="pt-5 mt-5" align="center">

                    <h1>You Have Been<br> Logged Out <i class="fa fa-sign-out"></i></h1>

                    <a href="#!login" style="text-decoration:none;">
                        <button class="btn btn-lg text-light" style="background-color:#00AAF4">

                            Login Again <i class="fa fa-sign-in"></i>

                        </button>
                    </a>

                </div>

            </div>
        </div>
        </div>
        
        `

    }

});