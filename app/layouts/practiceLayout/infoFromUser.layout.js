app.directive("infoFromUser", function(){

    return{

        template : `
        
        <div class="container pt-5 mt-5">

            <div class="pt-2" align="center">

                <form ng-controller="userInfo" ng-submit="submitUserInfo()">

                    <div align="center">

                        <h2>Provide Required Info</h2>

                    </div>

                    <div class="form-floating mb-3" style="width:300px">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Simple Test" required 
                        ng-model="">
                        <label for="floatingInput"><i class="fa fa-user-circle-o"></i> Matric Number</label>
                    </div>

                    <input style="width:300px;background-color:#00AAF4;" 
                    type="submit" name="create" class="btn btn-lg btn-primary" 
                    ng-disabled="create.$invalid" value="Next"/>
                    

                </form>

            </div>

        </div>
        
        `

    }

})