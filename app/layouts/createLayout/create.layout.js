app.directive("create", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5">

            <h1>Create <i class="fa fa-plus-circle"></i></h1>

            <span class="text-muted">
               <i class="fa fa-info-circle"></i> Create test/exams
            </span>

            <hr>

            <div class="pt-2" align="center">

                <form>
    
                    <div class="form-floating mb-3" style="width:300px">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Simple Test">
                        <label for="floatingInput"><i class="fa fa-mortar-board"></i> Test/exam name</label>
                    </div>

                    <div class="form-floating mb-3" style="width:300px">
                        <select class="form-select">
                            <option>Type</option>
                            <option>Test</option>
                            <option>Exam</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3" style="width:300px">
                        <select class="form-select">
                            <option>Questions</option>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3" style="width:300px">
                        <input type="number" class="form-control" id="floatingInput" placeholder="10 minutes">
                        <label for="floatingInput"><i class="fa fa-clock-o"></i> Time limit</label>
                    </div>
        
                    <a href="#!createSuccess" style="text-decoration:none;">
                        <button class="btn btn-lg btn-primary" type="submit" style="width:300px;background-color:#00AAF4;">
                            <b>Create <i class="fa fa-plus-circle"></i></b>
                        </button>
                    </a>
                
                </form>

            </div>

        </div>
        
        `

    }

});