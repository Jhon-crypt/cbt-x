app.directive("more", function(){

    return {

        template : `
        
        <div class="container pt-4 mb-5">

            <h1>More <i class="fa fa-align-left"></i></h1>

            <span class="text-muted">
               <i class="fa fa-info-circle"></i> More stuffs that could not contain the navigation
            </span>

            <hr>

            <ul class="list-group list-group-flush">

                <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#profileModal">

                    <i class="fa fa-user-circle-o"></i> Profile

                </li>

                <li class="list-group-item">

                    <i class="fa fa-question-circle"></i> Help me

                </li>

                <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#settingsModal">

                    <i class="fa fa-cogs"></i> Settings

                </li>

                <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#socialsModal">

                    <i class="fa fa-comments-o"></i> Contact and Socials

                </li>

                <li class="list-group-item">

                    <i class="fa fa-legal"></i> Terms and Conditions

                </li>

                <li class="list-group-item">

                    <a class="text-danger" href="#!logout" style="text-decoration:none;">
                        <i class="fa fa-sign-out"></i> Logout, come back soon
                    </a>

                </li>

            </ul>

        </div>

        <div class="text-center pt-5 text-muted">
            <small>Made with &#128151 and &#x26A1 by Oladele John © 2022</small>
        </div>
        
        `

    }

});