app.directive("socialsModal", function(){

    return {

        template : `
        
        <div class="modal fade" id="socialsModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header bg-light">
                    <h4 class="modal-title">
                        <font color="#00AAF4">Socials <i class="fa fa-comments"></i></font>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-light">
                    
                    <h3 class="text-center lead">Follow, Like And Comment Your Feedbacks To Us @</h3>

                    <ul class="nav justify-content-center">

                        <li class="nav-item">

                            <a class="nav-link text-dark" style="text-decoration:none;">

                                <i class="fa fa-envelope" style="font-size:28px"></i>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-dark" style="text-decoration:none;">

                                <i class="fa fa-facebook-square" style="font-size:28px"></i>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-dark" style="text-decoration:none;">

                                <i class="fa fa-twitter-square" style="font-size:28px"></i>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-dark" style="text-decoration:none;">

                                <i class="fa fa-phone" style="font-size:28px"></i>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>
        
        `

    }

});