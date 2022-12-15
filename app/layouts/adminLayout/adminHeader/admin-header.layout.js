app.directive("heading", function(){

    return {

        template : `
        
        <header class="navbar sticky-top flex-md-nowrap p-0 shadow text-light" style="background-color:#00AAF4;">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light" href="#">
                <b>
                    <i class="fa fa-check-square-o"></i> CBT-X <font color="orange">admin</font>
                </b>
            </a>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation" href="#">
                        Sign out
                    </a>
                </div>
            </div>
        </header>


        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#00AAF4;">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" href="#">
                                    <font color="orange"><i class="fa fa-dashboard"></i></font>
                                    Dashboard
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#!users">
                                    <font color="orange"><i class="fa fa-users"></i></font>
                                    Users
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#!exams">
                                    <font color="orange"><i class="fa fa-check-square"></i></font>
                                    Exams
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#!tests">
                                    <font color="orange"><i class="fa fa-check-square-o"></i></font>
                                    Tests
                                </a>
                            </li>

                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between 
                        align-items-center px-3 mt-4 mb-1 text-light">
                            <span>Geek Stuff</span>
                        </h6>
                        
                        <ul class="nav flex-column mb-2 text-light">

                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">
                                    <font color="orange"><i class="fa fa-server"></i></font>
                                    Server
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">
                                    <font color="orange"><i class="fa fa-database"></i></font>
                                    Database
                                </a>
                            </li>
         
                        </ul>
                    </div>
                </nav>

            </div>

        </div>
    
        
        `

    }

});