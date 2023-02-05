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

                        <div>
                            <div>
                                <h1 class="timer" data-minutes-left=></h1>
                            </div>
                        </div>

                    </span>

                </div>

                <hr>

                <form action="app/services/submitQuestionService/submitQuestion.service.php" method="POST">
                    <question-one></question-one>
                    <question-two></question-two>
                    <question-three></question-three>
                    <question-four></question-four>
                    <question-five></question-five>

                    <div align="center">
                        <button type="submit" class="btn btn-lg btn-primary mb-3"> 
                            Submit
                        </button>
                    </div>
                </form>

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

        </div>

        <div ng-repeat="x in sess">

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