app.directive("search", function(){


    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <form ng-controller="searchController" ng-submit="searchTest()">
                <h3><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h3>
                <h2 class="h3 mb-3 fw-normal">Search Test/Exam</h2>
    
                <div class="form-floating mb-3" style="width:300px">
                    <input type="number" class="form-control" id="floatingInput" 
                    ng-model="search" required>
                    <label for="floatingInput"><i class="fa fa-check-square"></i> Enter test/exam code</label>
                </div>
        
                <input style="width:300px;background-color:#00AAF4;" 
                type="submit" name="create" class="btn btn-lg btn-primary mb-3" 
                ng-disabled="searchController.$invalid" value="Search"/>
                       
                <div class="col mb-3" ng-repeat="x in success">

                        <div class="card bg-light" style="width:300px;">

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

                                <div class="alert alert-info">

                                    Copy the test id <font color="blue">({{ x.ref_id }})</font> and share for people to participate

                                </div>

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

                                    <!--
                                    <a class="text-light" href="#!practice/{{ x.ref_id }}" style="text-decoration:none;">
                                        <button class="btn btn-lg text-light" style="background-color:orange">
                                            Practice {{ x.type }} <i class="fa fa-external-link"></i>
                                        </button>
                                    </a>
                                    -->

                                    <a class="text-light" href="#!userInfo/{{ x.ref_id }}" style="text-decoration:none;">
                                        <button class="btn btn-lg text-light" style="background-color:orange">
                                            Practice {{ x.type }} <i class="fa fa-external-link"></i>
                                        </button>
                                    </a>

                                </div>

                            </div>

                        </div>
                        <!-- test/exam cards -->

                    </div>
                
            </form>            

        </div>

        <div class="text-center pt-5 text-muted">
            <small>Made with &#128151 and &#x26A1 by Oladele John © 2022</small>
        </div>
        
        `

    }

});