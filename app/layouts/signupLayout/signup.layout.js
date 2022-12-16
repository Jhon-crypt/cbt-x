app.directive("signup", function(){

    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <form ng-controller="signup">
                <h3><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h3>
                <h2 class="h3 mb-3 fw-normal">Sign Up</h2>
    
                <div class="form-floating mb-3" style="width:300px">
                    <input ng-model="user.email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput"><i class="fa fa-envelope"></i> Email</label>
                </div>

                <div class="form-floating mb-3" style="width:300px">
                    <select ng-model="user.gender" class="form-select">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="form-floating mb-3" style="width:300px">
                    <input ng-model="user.username" type="text" class="form-control" id="floatingInput" placeholder="coding_wizard">
                    <label for="floatingInput"><i class="fa fa-user-circle-o"></i> Username</label>
                </div>


                <div class="form-floating mb-3" style="width:300px">
                    <input ng-model="user.password" type="password" class="form-control" id="floatingInput" placeholder="coding_wizard">
                    <label for="floatingInput"><i class="fa fa-lock"></i> Password</label>
                </div>

                <p>Already have an account, Login <a href="#!login">here</a></p>
                
                <a style="text-decoration:none;">
                <button class="btn btn-lg btn-primary" type="submit" 
                style="width:300px;background-color:#00AAF4;" ng-click="signup()">
                    <b>Sign Up <i class="fa fa-user-circle"></i></b>
                </button>
                </a>

                <div ng-repeat="x in myData">

                    <p>{{ x.email }}</p>
                    <p>{{ x.gender }}</p>
                    <p>{{ x.username }}</p>
                    <p>{{ x.password }}

                </div>
                
            </form>            

        </div>

        <div class="text-center pt-5 mb-5 text-muted">
            <small>Made with &#128151 and &#x26A1 by Oladele John © 2022</small>
        </div>
        
        `

    }

});