<!-- Download Section -->
    <section id="login" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div id = "div-login" class="col-lg-8 col-lg-offset-2">
                    <!--Initial display of login division-->
                    <div id = "div-choices">
                        <h2>login to BCR</h2>
                        <p>Know the Best Crop Rotation for you Farm.</p>
                        <button id = "btn-login" class="btn btn-default btn-lg">Log In</button>
                        <button id = "btn-register" class="btn btn-default btn-lg">Register</button>
                    </div>  

                    <!--Showed when login button is clicked-->
                    <div id ="div-login-form" style="visibility: hidden; display:none">
                        <?php echo form_open("user_controller/login"); ?>
                            <br><h2>login to BCR</h2>
                            <p>Know the Best Crop Rotation for you Farm.</p>
                            <br><?php echo form_input(array("name" => "username", "placeholder" => "Username", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_password(array("name" => "password", "placeholder" => "Password", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_submit(array("name" => "user_login", "value" => "Login", "class" => "btn btn-default btn-lg")); ?>
                            &nbsp;<button id = "btn-back" class="btn btn-default btn-lg">Back</button>
                       <?php echo form_close(); ?>
                    </div>

                    <!--Showed when register button is clicked-->
                    <div id ="div-register-form" style="visibility: hidden; display:none">
                        <form method="post">
                            <br><h2>register to BCR</h2>
                            <p>Know the Best Crop Rotation for you Farm.</p>
                        <br><input type = "text" class = "form-control" placeholder = "username" aria-describedby = "basic-addon2">
                            <br><input type = "text" class = "form-control" placeholder = "password" aria-describedby = "basic-addon2">
                            <br><input type = "text" class = "form-control" placeholder = "email" aria-describedby = "basic-addon2">
                            <br><input type = "text" class = "form-control" placeholder = "contact" aria-describedby = "basic-addon2">
                            <br><input type = "submit" id = "btn-register-submit" class="btn btn-default btn-lg" value="Register">
                            &nbsp;<button id = "btn-back" class="btn btn-default btn-lg">Back</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
