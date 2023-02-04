app.directive("infoFromUser", function(){

    return{

        template : `
        
        <div class="container pt-5 mt-5">

            <div class="pt-2" align="center">

                <div ng-controller="fetchInfoFromUser">
                <div ng-repeat="i in info">

                    <div align="center" class="mb-2">

                        <h2>Provide Required Info</h2>
                        <b><i class="fa fa-user-circle-o"></i> {{ i.infoFromUser }}</b>
                        
                    </div>

                </div>
                </div>

                <form ng-controller="userInfo" ng-submit="submitUserInfo()">

                        <div class="form-floating mb-3" style="width:300px">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Simple Test" required 
                            ng-model="userInfo">
                            <label for="floatingInput"><i class="fa fa-user-circle-o"></i> Type info here</label>
                        </div>

                        <input style="width:300px;background-color:#00AAF4;" 
                        type="submit" name="create" class="btn btn-lg btn-primary" 
                        ng-disabled="userInfo.$invalid" value="Next"/>   

                </form>

            </div>

        </div>
        
        `

    }

})