<!-- login/register Section -->
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
                        <?php echo form_open("user_controller/user_login"); ?>
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
                        <?php echo form_open("user_controller/user_registration"); ?>     
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                    <input name = "txtusername" type = "text" class = "form-control" placeholder = "username" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtpassword" type = "text" class = "form-control" placeholder = "password" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                    <input name = "txtfirst" type = "text" class = "form-control" placeholder = "first name" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtlast" type = "text" class = "form-control" placeholder = "last name" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                    <input name = "txtemail" type = "text" class = "form-control" placeholder = "email" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtcontact" type = "text" class = "form-control" placeholder = "contact number" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                    <input name = "txtage" type = "text" class = "form-control" placeholder = "age" aria-describedby = "basic-addon2">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input name = "txtgender" type = "text" class = "form-control" placeholder = "gender" aria-describedby = "basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" style="color:red">&#x2717</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                          <!--   <div class="col-lg-6">
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
                              </div><!-- /btn-group
                            </div><!-- /input-group -->
                          <!-- </div>/.col-lg-6 --> 
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