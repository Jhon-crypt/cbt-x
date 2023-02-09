app.directive("profileModal", function(){

    return {

        template : `
        
        <div class="modal fade" id="profileModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header bg-light">
                        <h4 class="modal-title">
                            <font color="#00AAF4">Profile <i class="fa fa-user-circle"></i></font>
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body bg-light">
                        
                        <div align="center">
                            <i class="fa fa-user-secret" style="font-size:100px;"></i>
                        </div>

                        <div align="center">

                            <h3>@Oladele_Joh</h3>

                            <p class="text-muted"><i class="fa fa-envelope"></i> johnoladele690@gmail.com</p> 

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
        `

    }

});