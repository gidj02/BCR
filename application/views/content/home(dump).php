    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">B.C.R</h1>
                        <p class="intro-text">Best Crop Rotation.<br>Make your farm perfect!</p>
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
                <p>Just agree to our terms and agreement and enjoy using B.C.R.</p>
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
                        <?php echo validation_errors(); ?>
                        <?php echo form_open("verifylogin_controller"); ?>
                            <br><h2>Login to BCR</h2>
                            <br><?php echo form_input(array("name" => "username", "placeholder" => "Username", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_password(array("name" => "password", "placeholder" => "Password", "class" => "form-control", "aria-describedby" => "basic-addon2")); ?>
                            <br><?php echo form_submit(array("name" => "user_login", "value" => "Login", "class" => "btn btn-default btn-lg")); ?>
                       <?php echo form_close(); ?>
                            <button id = "btn-back-login" class="btn btn-default btn-lg"> Back </button>
                    </div>

                    <!--Showed when register button is clicked-->
                    <div id ="div-register-form" style="visibility: hidden; display:none">
                        <br><h2>register to BCR</h2>
                        <p>Know the Best Crop Rotation for you Farm.</p>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open("verifylogin_controller"); ?>     
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                    <input name = "txtusername" type = "text" class = "form-control" placeholder = "username" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtpassword" type = "text" class = "form-control" placeholder = "password" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                    <input name = "txtfirst" type = "text" class = "form-control" placeholder = "first name" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtlast" type = "text" class = "form-control" placeholder = "last name" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                    <input name = "txtemail" type = "text" class = "form-control" placeholder = "email" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtcontact" type = "text" class = "form-control" placeholder = "contact number" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                    <input name = "txtage" type = "text" class = "form-control" placeholder = "age" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder = "choose gender" readonly="readonly">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                  <li><a href="#">Male</a></li>
                                  <li><a href="#">Female</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Other Please Specify</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
<!--                             <br><input name = "txtgender" type = "text" class = "form-control" placeholder = "gender" aria-describedby = "basic-addon2"> -->
                            <br><input type = "submit" id = "btn-register-submit" class="btn btn-default btn-lg" value="Register">
                        </form>
                            <button id = "btn-back-register" class="btn btn-default btn-lg">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <p>Feel free to email us to provide some feedback on our services, for your inquiries and questions we are willing to answer you!</p>
                <p><a href="mailto:feedback@startbootstrap.com">bcrproject@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

     <!-- Map -->
   <!--   <div>
    <section id="contact" class="ontainer content-section text-center">
        <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed" width="100%" frameborder="0" height="100%"></iframe>
        <br>
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        
    </section>
    </div> -->

    <!--<?php //include("template/maps.php'); ?>-->
    
