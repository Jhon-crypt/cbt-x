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

                    <button class="btn btn-md text-light" 
                    style="background-color:#00AAF4" 
                    data-bs-toggle="modal" 
                    data-bs-target="#setQuestionsModal">

                        <b>Create questions <i class="fa fa-plus-circle"></i></b>
 
                    </button>

                </div>
    
                <div class="pt-4 mt-4">

                    <ul class="nav flex-column">

                        <li class="nav-item" ng-repeat="x in question">

                            <a class="nav-link text-dark" style="text-decoration:none;">

                                <div class="d-flex shadow p-4 mb-4 bg-light">

                                    <div class="flex-grow-1 ms-3">

                                        <h5><i class="fa fa-question-circle"></i> Question {{ x.number }}</h5> 

                                        <hr>

                                        <p class="text-muted">
                        
                                            {{ x.title }} 
                        
                                        </p>

                                        <div class="row g-3">

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option A</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.optionA }}</label> 

                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option B</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.optionB }}</label>

                                            </div>

                                        </div>

                                        <br>

                                        <div class="row g-3">

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option C</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.optionC }}</label>

                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-muted" for="exampleRadio1">Option D</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.optionD }}</label>

                                            </div>

                                        </div>

                                        <br>

                                        <select class="form-control" name="ansForQ1">
                                            <option>Correct option</option>
                                            <option>optionA</option>
                                            <option>optionB</option>
                                            <option>optionC</option>
                                            <option>optionD</option>
                                        </select>

                                        <input type="hidden" name="correctAnsforq1" value='.$encoded_correct_option.'>

                                        <input type="hidden" name="q1Id" value='.$question_id.'>

                                        <br>

                                    </div>

                                </div>

                            </a>

                        </li>

                    </ul>
                

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