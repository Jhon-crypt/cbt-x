app.directive("search", function(){


    return {

        template : `
        
        <div class="container pt-5 mt-5" align="center">

            <form>
                <h3><font color="#00AAF4"><i class="fa fa-check-square-o"></i> CBT</font>-<font color="orange">X</font></h3>
                <h2 class="h3 mb-3 fw-normal">Search Test/Exam</h2>
    
                <div class="form-floating mb-3" style="width:300px">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
        
                <button class="btn btn-lg btn-primary" type="submit" style="width:300px;background-color:#00AAF4;">
                    <b>Search</b> <i class="fa fa-search"></i>
                </button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>            

        </div>
        
        `

    }

});