app.directive("create", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5" ng-controller="sessionGuard">
        <div ng-repeat="x in sess">

            <div ng-show="{{ x.sessionSet }}">

                <h1>Create <i class="fa fa-plus-circle"></i></h1>

                <span class="text-muted">
                    <i class="fa fa-info-circle"></i> Create test/exams
                </span>

                <hr>

                <div class="pt-2" align="center">

                    <form ng-controller="create" ng-submit="create()">
    
                        <div class="form-floating mb-3" style="width:300px">
                            <input ng-model="create.title" type="text" class="form-control" id="floatingInput" placeholder="Simple Test" required>
                            <label for="floatingInput"><i class="fa fa-mortar-board"></i> Test/exam name</label>
                        </div>

                        <div class="form-floating mb-3" style="width:300px">
                            <select ng-model="create.type" class="form-select">
                                <option>Type</option>
                                <option>Test</option>
                                <option>Exam</option>
                            </select>
                        </div>

                        <div class="form-floating mb-3" style="width:300px">
                            <select ng-model="create.totalQuestion" class="form-select">
                                <option>Questions</option>
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>

                        <div class="form-floating mb-3" style="width:300px">
                            <input ng-model="create.dataFromUser" type="number" class="form-control" id="floatingInput" placeholder="10 minutes" required>
                            <label for="floatingInput"><i class="fa fa-exchange"></i> Info from user</label>
                        </div>

                        <div class="form-floating mb-3" style="width:300px">
                            <input ng-model="create.timeLimit" type="text" class="form-control" id="floatingInput" placeholder="10 minutes" required>
                            <label for="floatingInput"><i class="fa fa-clock-o"></i> Time limit</label>
                        </div>
        
                        <input style="width:300px;background-color:#00AAF4;" 
                        type="submit" name="create" class="btn btn-lg btn-primary" 
                        ng-disabled="create.$invalid" value="Create"/>
                
                
                    </form>

                </div>

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