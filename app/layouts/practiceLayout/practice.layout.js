app.directive("practice", function(){

    return {

        template : `

        <style>

        .jst-hours {
            float: left;
          }
          .jst-minutes {
            float: left;
          }
          .jst-seconds {
            float: left;
          }
          .jst-clearDiv {
            clear: both;
          }
          .jst-timeout {
            color: red;
          }

          .fixedTime{
            position: fixed;
            bottom: 0px;
            right: 0px; 
            padding: 20px;
        }

        </style>
        
        <div class="container pt-4 mb-5" ng-controller="sessionGuard">
        <div ng-repeat="x in sess">

            <div ng-show="{{ x.sessionSet }}">

                <div class="clearfix">

                    <span class="float-start">

                        <h1>Practice test <i class="fa fa-check-square-o"></i></h1>

                            <span class="text-muted">
                                <i class="fa fa-info-circle"></i> Test/exam simulation
                            </span>

                    </span>

                    <span class="float-end">

                        <span class="text-muted">
                            <i class="fa fa-clock-o"></i> Time left
                        </span>

                        <div ng-controller="fetchPracticeTestTime">
                            <div ng-repeat="t in time">
                                <h1 class="timer" data-minutes-left={{ t.timeLimit }}></h1>
                                
                            </div>
                        </div>

                    </span>

                </div>

                <hr>

                <div align="center">

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

                                        <div class="row">

                                            <div class="col">

                                                <label class="text-muted" for="exampleRadio1">Option A</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_a }}</label>

                                            </div>

                                            <div class="col">

                                                <label class="text-muted" for="exampleRadio1">Option B</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_b }}</label>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col">

                                                <label class="text-muted" for="exampleRadio1">Option C</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_c }}</label>


                                            </div>

                                            <div class="col">

                                                <label class="text-muted" for="exampleRadio1">Option D</label><br>
                                                <label class="form-check-label" for="exampleRadio1">{{ x.option_d }}</label>


                                            </div>

                                        </div>
                                        
                                        <br>

                                        <select class="form-control" name="ansForQ1">
                                            <option>Answer</option>
                                            <option>optionA</option>
                                            <option>optionB</option>
                                            <option>optionC</option>
                                            <option>optionD</option>
                                        </select>

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

                <div align="center">

                    <a href="#!end" class="text-light" style="text-decoartion:none;">
                        <button class="btn btn-lg text-light" style="background-color:#00AAf4">

                            Submit Test

                        </button>
                    </a>

                </div>

                <script>

                    $(document).ready(function() {

                        $('.timer').startTimer({
                            onComplete:function(element){
                                //window.location.href = "#!end"
                            }
                        });
    
                    });
            
                </script>

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