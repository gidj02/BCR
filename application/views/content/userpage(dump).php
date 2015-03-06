    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">B.C.R</h1>
                        <p class="intro-text">Welcome to your B.C.R. profile<br>Make your farm perfect!</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About BCR</h2>
                <p>BCR is a decision support system for best crop rotation. <br> What is crop rotation? <a target = "_blank" href="http://en.wikipedia.org/wiki/Crop_rotation">See Here</a>. <br>It will help you to choose crops for your farm.</p>
                <p>BCR helps you to manage your farm, just login and provide information of your farm. See <a href="#">Farm data requirements!</a></p>
                <p>Just agree to our terms and agreement and enjoy using B</p>
            </div>
        </div>
    </section>

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

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
 <!--    <h2>Contact Us</h2>
    <p>Feel free to email us to provide some feedback on our services, for your inquiries and questions we are willing to answer you!</p>
    <p><a href="mailto:feedback@startbootstrap.com">bcrproject@gmail.com</a> -->
    <!-- </p> -->
                        <!--Showed when login button is clicked-->
        <div id ="div-logout-confirm" style="visibility: hidden; display:none">
            <?php echo form_open("main_controller/logout"); ?>
                <br><h2>Are you sure to logout your Account?</h2>
                <p>See you! Till the next time.</p>
                <br>   
                <br><?php echo form_submit(array("name" => "user_logout", "value" => "Logout", "class" => "btn btn-default btn-lg")); ?>
           <?php echo form_close(); ?>
                <button id = "btn-back-logout" class="btn btn-default btn-lg"> Back </button>
        </div>

        <!--Showed when register button is clicked-->
        <div id ="div-logout">
                <br><h2>Logout your account</h2>
                <p>Feel free to email us to provide some feedback on our services, for your inquiries <br> 
                and questions we are willing to answer you! <br>
                </p>
                <p><a href="mailto:feedback@startbootstrap.com">bcrproject@gmail.com</a></p>
                <br>
                <button id = "btn-logout" class="btn btn-default btn-lg">Log Out</button>
        </div>
    </section>

     <!-- Map -
     <div>
    <section id="contact" class="ontainer content-section text-center">
        <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed" width="100%" frameborder="0" height="100%"></iframe>
        <br>
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        
    </section>
    </div>

    <!--<?php //include("template/maps.php'); ?>-->
    
