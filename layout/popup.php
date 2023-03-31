<div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="header-popup">
                    <h5 align="center">Forgot Mail Adress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body center">
                    <div  align="center">
                     
                     <form method="post" action="sms.php">
                        <input type="email" name="popMail" placeholder="Enter Email" style="width: 200px;"><br>
                        <input type="submit" value="Gonder" id="dogrulama" name="btnPop">
                        <p style="color:red;display:none"> Error </p>
                     </form>   

                    </div>  
                </div>
            </div>
        </div>
    </div>