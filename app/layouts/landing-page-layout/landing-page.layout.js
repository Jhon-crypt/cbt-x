app.directive("landingPage", function(){

    return {

        template : `
        
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold"><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4 text-center">
                    Cbt-X is designed to give students and others a platform to adequately prepare and simulates the real exam/test situation, 
                    Tests/exams can be conducted simultaneously for multiple candidates irrespective of their locations and also auto-grading
                    easily to save time in evaluating large answers.
                </p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-light">
                            <button class="btn btn-lg text-light" style="background:#00AAF4"> Sign up <i class="fa fa-user-circle-o"></i> </button>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light">
                            <button class="btn btn-lg text-light" style="background:#00AAF4"> Practise test/exam <i class="fa fa-check-square-o"></i> </button>
                        </a>
                    </li>

                </ul>

            </div>

            <div class="text-center pt-5 text-muted">
                <small>Made with &#128151 by &#x26A1 Oladele John and STA © 2022</small>
            </div>

        </div>
        
        `

    }

});