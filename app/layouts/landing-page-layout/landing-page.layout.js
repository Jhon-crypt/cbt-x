app.directive("landingPage", function(){

    return {

        template : `
        
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold"><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4 text-center">
                    Cbt-X is simply a platform that simulates the real exam/test situation, Create tests, practice and analyse on the go.
                </p>
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link text-light">
                            <button class="btn btn-lg text-light" style="background:#00AAF4"> Get Started <i class="fa fa-external-link"></i> </button>
                        </a>
                    </li>

                </ul>

            </div>

            <div class="text-center pt-5 text-muted">
                <small>Made with &#128151 by &#x26A1 Oladele John © 2022</small>
            </div>

        </div>
        
        `

    }

});