app.directive("setQuestions", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5" ng-controller="sessionGuard">
        <div ng-repeat="x in sess">

            <div ng-show="{{ x.sessionSet }}">

                <h1>Set Questions <i class="fa fa-list-alt"></i></h1>

                <span class="text-muted">
                    <i class="fa fa-info-circle"></i> Set questions for the test/exams created
                </span>

                <hr>

                <div align="center">

                    <ul class="nav justify-content-center">

                        <li class="nav-item">

                            <a class="nav-link text-light text-decoration-none">

                                <button class="btn btn-md text-light" 
                                style="background-color:#00AAF4" 
                                data-bs-toggle="modal" 
                                data-bs-target="#setQuestionsModal">
        
                                    <b>Create questions <i class="fa fa-plus-circle"></i></b>
         
                                </button>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-light text-decoration-none" href="#!deleteAllQuestions/delete">

                                <button class="btn btn-danger btn-md text-light">
        
                                    <b>Delete All <i class="fa fa-trash"></i></b>
         
                                </button>

                            </a>

                        </li>

                    </ul>

                </div>
    
                <div class="pt-4 mt-4">

                    <div ng-controller="fetchQuestions">
                    <ul class="nav flex-column">

                        <li class="nav-item" ng-repeat="x in quest">

                        <div ng-show="{{ x.notEmptyStatus }}">

                            <a class="nav-link text-dark" style="text-decoration:none;">

                                <div class="d-flex shadow p-4 mb-4 bg-light">

                                    <div class="flex-grow-1 ms-3">
                                                
                                        <h5><i class="fa fa-question-circle"></i> Question {{ x.id }}</h5>

                                        <hr>

                                        <p class="text-muted">
                        
                                            {{ x.question_title }} 
                        
                                        </p>

                                        <div class="row g-3">

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option A</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_a }}</label> 

                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option B</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_b }}</label>

                                            </div>

                                        </div>

                                        <br>

                                        <div class="row g-3">

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option C</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_c }}</label>

                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option D</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_d }}</label>

                                            </div>

                                        </div>

                                        <br>

                                        <select class="form-control">
                                            <option>Correct option ({{ x.correct_answer }})</option>
                                        </select>

                                        <input type="hidden" name="correctAnsforq1" value=''>

                                        <input type="hidden" name="q1Id" value=''>

                                        <div align="center" class="mt-3">

                                            <a class="text-decoration-none" href="#!deleteQuestions/{{ x.id }}">
                                                <button class="btn btn-md btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </a

                                        </div>

                                        <br>

                                    </div>

                                </div>

                            </a>

                        </div>    

                        </li>

                    </ul>

                    <div ng-repeat="x in quest">

                        <div ng-show="{{ x.emptyStatus }}">

                            <div class="pt-3 text-muted" align="center">

                                <h1>Empty Questions <i class="fa fa-ban"></i></h1>

                            </div>

                        </div>

                    </div>

                    </div>
                

                </div>
                <!-- end of question -->

            </div>

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