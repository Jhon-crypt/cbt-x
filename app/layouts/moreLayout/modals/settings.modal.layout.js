app.directive("settingsModal", function(){

    return {

        template : `
        
        <div class="modal fade" id="settingsModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header bg-light">
                    <h4 class="modal-title">
                        <font color="#00AAF4">Settings <i class="fa fa-cogs"></i></font>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-light">
                    
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#editProfile" aria-expanded="false" aria-controls="collapseTwo">
                               <i class="fa fa-edit me-1"></i> Edit Profile
                            </button>
                        </h4>
                        <div id="editProfile" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control mb-1" id="floatingInput" placeholder="Edit Username">
                                    <label for="floatingInput" class="text-dark"><i class="fa fa-user"></i> Username</label>
                                    <button class="btn btn-outline-primary">Update <i class="fa fa-user"></i></button>
                                </div>

                                <div class="form-floating mb-3">
                                <input type="email" class="form-control mb-1" id="floatingInput" placeholder="Edit email">
                                <label for="floatingInput" class="text-dark"><i class="fa fa-envelope"></i> Email</label>
                                <button class="btn btn-outline-primary">Update <i class="fa fa-envelope"></i></button>
                            </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- edit profile accordion -->

                     <div class="accordion-item">
                        <h4 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#security" aria-expanded="false" aria-controls="collapseTwo">
                               <i class="fa fa-lock me-1"></i> Security
                            </button>
                        </h4>
                        <div id="security" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control mb-1" id="floatingInput" placeholder="Edit password">
                                    <label for="floatingInput" class="text-dark"><i class="fa fa-lock"></i> Password</label>
                                    <button class="btn btn-outline-primary">Update <i class="fa fa-lock"></i></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- edit profile accordion -->

                </div>

            </div>

        </div>

    </div>
        
        `

    }

});