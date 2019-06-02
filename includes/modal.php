<?php

include("database/database.php");

  

?>
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img style="size:auto" class="img-circle" id="img_logo" src="media/admin.jpg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form method="post">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
							<label>
				    		<input id="login_username" name="emaill" class="form-control" type="text" placeholder="Username " required>
							</label>
							<label>
				    		<input id="login_password" name="passs" class="form-control" type="password" placeholder="Password" required>
							</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" name="loggin" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	   
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
					
					<?php

       if(isset($_POST['loggin']))
          {
           $email=$_POST['emaill'];$pass=$_POST['passs'];

             $database->admin($email,$pass);


           }
?> 
    		
                    
                  
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>