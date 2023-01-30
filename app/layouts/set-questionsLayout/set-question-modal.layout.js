app.directive("setQuestionModal", function(){

    return {

        template : `

        <div class="modal fade" id="setQuestionsModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header bg-light">
                        <h4 class="modal-title">
                            <font color="#00AAF4">Create question <i class="fa fa-plus-circle"></i></font>
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body bg-light">
                        
                        <form ng-controller="setQuestionsForm" ng-submit="setQuestion()">

                            <div ng-repeat="q in result">

                                <div align="center">

                                    <div class="alert alert-success" style="width:300px" 
                                    ng-show="{{ q.successStatus }}">
                                        {{ q.message }}
                                    </div>

                                    <div class="alert alert-warning" style="width:300px" 
                                    ng-show="{{ q.errorStatus }}">
                                        {{ q.message }}
                                </div>

                                </div>

                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" rows="7" id="floatingAbout" placeholder="Question" required 
                                ng-model="sq.title"></textarea>
                                <label for="floatingAbout" class="text-dark"><i class="fa fa-question-circle"></i> Question</label>
                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A" required 
                                        ng-model="sq.optionA">
                                        <label for="floatingInput">Option A</label>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A" required 
                                        ng-model="sq.optionB">
                                        <label for="floatingInput">Option B</label>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A" required 
                                        ng-model="sq.optionC">
                                        <label for="floatingInput">Option C</label>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A" reuired 
                                        ng-model="sq.optionD">
                                        <label for="floatingInput">Option D</label>
                                    </div>

                                </div>

                                <div ng-controller="routeTestExamId">
                                    
                                </div>

                            </div>

                            <div class="form-floating mb-3">
                                <label for="correctOption"> Select correct option</label>
                                <select id="correctOption" class="form-select" ng-model="sq.correctOption">
                                    <option>Correct Option</option>
                                    <option>option_a</option>
                                    <option>option_b</option>
                                    <option>option_c</option>
                                    <option>option_d</option>
                                </select>
                            </div>

                            <div align="center">

                                <input style="width:300px;background-color:#00AAF4;" 
                                type="submit" name="setQuestion" class="btn btn-lg btn-primary" 
                                value="Create"/>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
        
        `

    }

});