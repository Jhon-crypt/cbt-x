app.directive("signup", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <h3><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h3>
                <h2 class="h3 mb-3 fw-normal">Sign Up</h2>

            <form ng-controller="signup" ng-submit="signup()">
    
                <div class="form-floating mb-3" style="width:300px">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required 
                    ng-model="user.email">
                    <label for="floatingInput"><i class="fa fa-envelope"></i> Email</label>
                </div>

                <div class="form-floating mb-3" style="width:300px">
                    <select class="form-select" ng-model="user.gender">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="form-floating mb-3" style="width:300px">
                    <input type="text" class="form-control" id="floatingInput" placeholder="coding_wizard" required 
                    ng-model="user.username">
                    <label for="floatingInput"><i class="fa fa-user-circle-o"></i> Username</label>
                </div>

                <div class="form-floating mb-3" style="width:300px">
                    <input type="password" class="form-control" id="floatingInput" placeholder="coding_w" required 
                    ng-model="user.password">
                    <label for="floatingInput"><i class="fa fa-lock"></i> Password</label>
                </div>

                <p>Already have an account, Login <a href="#!login">here</a></p>
                
                <input style="width:300px;background-color:#00AAF4;" 
                type="submit" name="signUp" class="btn btn-lg btn-primary" 
                ng-disabled="signup.$invalid" value="Sign Up Now"/>
                
                <!--
                <div ng-repeat="x in myData">
                    <p>{{ x.email }}
                </div>
                -->

            </form>            

        </div>

        <div class="text-center pt-5 mb-5 text-muted">
            <small>Made with &#128151 and &#x26A1 by Oladele John © 2022</small>
        </div>
        
        `

    }

});