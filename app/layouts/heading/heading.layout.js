app.directive("heading", function(){

    return {

        template : `
        
        <nav class="navbar navbar-light">

            <div class="container">

                <a class="navbar-brand" href="#">

                    <b>
                        <font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font>
                    </b>
                
                </a>

                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <font color="orange"><i class="fa fa-navicon"></i></font>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample01">

                    <ul class="navbar-nav me-auto mb-2">

                        <li class="nav-item">
                            <a class="nav-link active" href="#!login">
                                <font color="orange"><i class="fa fa-sign-in"></i></font> Login
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#!signup">
                                <font color="orange"><i class="fa fa-user-circle-o"></i></font> Signup
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#/!">
                            <font color="orange"><i class="fa fa-search"></i></font> Search test/exam
                            </a>
                        </li>


                    </ul>

                </div>

            </div>
        </nav>
        
        `

    }

});