<!-- Download Section -->
    <section id="login" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div id = "div-input-choice" class="col-lg-8 col-lg-offset-2">
                    <!--Initial display of login division-->
                    <div id = "div-choices">
                        <h2>My Farm</h2>
                        <p>Navigate to your farm.</p>
                        <button id = "btn-input" class="btn btn-default btn-lg">Input</button>
                        <button id = "btn-history" class="btn btn-default btn-lg">History</button>
                    </div>  

                    <!--Showed when login button is clicked-->
                    <div id ="div-input-form" style="visibility: hidden; display:none">
                        <?php echo form_open("user_controller/login"); ?>
                            <br><h2>login to BCR</h2>
                            <p>Please enter your situation.</p>
                            <br><?php echo form_input(array("name" => "previouscrop", "placeholder" => "Previous Crop", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_input(array("name" => "climate", "placeholder" => "Climate", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_input(array("name" => "soiltype", "placeholder" => "Soil Type", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_input(array("name" => "month", "placeholder" => "Month", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_submit(array("name" => "user_input", "value" => "Input", "class" => "btn btn-default btn-lg")); ?>
                       <?php echo form_close(); ?>
                            <button id = "btn-back-input" class="btn btn-default btn-lg">Back</button>
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
