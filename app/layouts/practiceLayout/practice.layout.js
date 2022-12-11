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
        
        <div class="container pt-4 mb-5">

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

                    <h1 class="timer" data-minutes-left="1"></h1>

                </span>

            </div>

            <div class="fixedTime">
                <small>
                    <h3 class="timer text-light bg-primary rounded" data-minutes-left="1"></h3>
                </small>
            </div>

            <hr>

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
                                        <option>Answer</option>
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

            <div align="center">

                <a href="#!end" class="text-light" style="text-decoartion:none;">
                    <button class="btn btn-lg text-light" style="background-color:#00AAf4">

                        Submit Test

                    </button>
                </a>

            </div>

        </div>

        <script>

            $(document).ready(function() {

                $('.timer').startTimer({
                    onComplete:function(element){
                        window.location.href = "#!end"
                    }
                  });
    
            });
            
        </script>
        
        `

    }

});