app.directive("login", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <form ng-controller="login" ng-submit="login()">
                <h3><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h3>
                <h2 class="h3 mb-3 fw-normal">Login</h2>
                
                <div ng-repeat="x in loginStatus">
                    <div class="alert alert-success" style="width:300px" 
                    ng-show="{{ x.loggedIn }}">
                        <h4 class="mb-3">Logged In </h4>
                        <a href="#!dashboard">
                            <button class="btn btn-lg text-light" 
                            style="background-color:#00AAF4;">
                                <small>Click Here To Continue <i class="fa fa-external-link"></i></small>
                            </button>
                        </a>
                    </div>

                    <div class="alert alert-warning" style="width:300px" 
                    ng-show="{{ x.loginError }}">
                        Wrong Email Or Password
                    </div>
                    
                </div>
    
                <div class="form-floating mb-3" style="width:300px">
                    <input type="email" class="form-control" ng-model="user.email" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput"><i class="fa fa-envelope"></i> Email</label>
                </div>

                <div class="form-floating mb-3" style="width:300px">
                    <input type="password" class="form-control" ng-model="user.password" id="floatingInput" placeholder="coding_wizard" required>
                    <label for="floatingInput"><i class="fa fa-lock"></i> Password</label>
                </div>

                <small>
                    <p>Forgot Password, <a href="#!forgotPassword">Click here</a></p>
                </small>

                <input style="width:300px;background-color:#00AAF4;" 
                type="submit" name="loginNow" class="btn btn-lg btn-primary" 
                ng-disabled="login.$invalid" value="Login Now"/>

                <p>Don't have an account, Sign Up <a href="#!signup">here</a></p>

            </form>            

        </div>

        <div class="text-center pt-5 mb-5 text-muted">
            <small>Made with &#128151 and &#x26A1 by Oladele John © 2022</small>
        </div>
        
        `

    }

});