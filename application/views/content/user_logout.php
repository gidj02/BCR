
    
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