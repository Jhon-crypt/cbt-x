app.directive("questionFour", function(){

    return {

        template : `
        
        <div class="pt-4 mt-4">

            <div ng-controller="fetchQuestion4">
                <ul class="nav flex-column">

                    <li class="nav-item" ng-repeat="x in questionFour">

                        <div>

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

                                        <label for="question">Select answer below</label>
                                        <select id="question" class="form-control" name="question4">
                                            <option>Answer</option>
                                            <option>optionA</option>
                                            <option>optionB</option>
                                            <option>optionC</option>
                                            <option>optionD</option>
                                        </select>

                                        <input type="hidden" name="question4Ans" value="{{ x.correct_answer }}">

                                        <br>

                                    </div>

                                </div>

                            </a>

                        </div>

                    </li>

                </ul>

            </div>
                
        </div>
        
        `

    }

});