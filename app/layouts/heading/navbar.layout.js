app.directive("navbar", function(){

    return {

        template : `
        
            <ul class="nav justify-content-center">

                <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link text-dark" href="#!dashboard">
                        <span><i class="fa fa-home"></i></span>
                        <span>Home</span>
                    </a>
                </li>

                <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link text-dark" href="#!create">
                        <span><i class="fa fa-plus-circle"></i></span>
                        <span>Create</span>
                    </a>
                </li>

                <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link text-dark" href="#!more">
                        <span><i class="fa fa-align-left"></i></span>
                        <span>More</span>
                    </a>
                </li>

            </ul>


        
        `

    }

});