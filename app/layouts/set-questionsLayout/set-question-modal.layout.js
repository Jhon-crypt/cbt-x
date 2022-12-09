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
                        
                        <form>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" rows="7" id="floatingAbout" placeholder="Question"></textarea>
                                <label for="floatingAbout" class="text-dark"><i class="fa fa-question-circle"></i> Question</label>
                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A">
                                        <label for="floatingInput">Option A</label>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A">
                                        <label for="floatingInput">Option B</label>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A">
                                        <label for="floatingInput">Option C</label>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="option A">
                                        <label for="floatingInput">Option D</label>
                                    </div>

                                </div>

                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select">
                                    <option>Correct Option</option>
                                    <option>Option A</option>
                                    <option>Option B</option>
                                    <option>Option C</option>
                                    <option>Option D</option>
                                </select>
                            </div>

                            <div align="center">

                                <button class="btn btn-lg btn-primary" type="submit" style="background-color:#00AAF4;">
                                    <b>Create <i class="fa fa-plus-circle"></i></b>
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
        
        `

    }

});