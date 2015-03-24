<!-- Download Section -->
    <section id="login" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div id = "div-login" class="col-lg-8 col-lg-offset-2">
                    <!--Initial display of login division-->
                    <div id = "div-input-choices">
                        <h2>My Farm</h2>
                        <p>Navigate to your farm.</p>
                        <button id = "btn-input" class="btn btn-default btn-lg">Input</button>
                        <button id = "btn-history" class="btn btn-default btn-lg">History</button>
                    </div>  

                    <!--Showed when login button is clicked-->
                    <div id ="div-input-form" style="visibility: hidden; display:none">
                        <?php echo form_open("farm_controller/input"); ?>
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

                    <div id ="div-result" style="visibility: hidden; display:none">
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li><a tabindex="-1" href="#">Regular link</a></li>
                        <li class="disabled"><a tabindex="-1" href="#">Disabled link</a></li>
                        <li><a tabindex="-1" href="#">Another link</a></li>
                        </ul>
                    </div>

                    <!--Showed when register button is clicked-->
                    <div id ="div-history" style="visibility: hidden; display:none">
                        <div class="panel panel-warning">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Farm's history</div>
                         
                            <?php
                                $user_id = $this->session->userdata['logged_in']['id']; 
                                // $condition = "userid =" . "'" . $user_id . "'";
                                // $this->db->select('*');
                                // $this->db->from('season');
                                // $this->db->where($condition);
                                // $query = $this->db->get();
                                echo "<script type='text/javascript'>alert('$user_id!');</script>";
                                $query = $this->db->query("SELECT * from season WHERE userid=".$user_id."");

                                if ($query->num_rows() > 0) {
                                    // Query to insert data in database
                                    echo "
                                    <div class='panel-body'>
                                        <p style='color:black'>This is the table that contains the history of your farm. </br>
                                            It includes the production of your farm, and the factors.</p>
                                    </div>";
                                    echo "
                                    <table class='table' style='color:black; text-align:center;'>";
                                    echo "<tr>
                                        <td>Season</td>
                                        <td>Crop Planted</td>
                                        <td>Climate</td>
                                        <td>Soil Type</td>
                                        <td>Date</td>
                                    </tr>";

                                    while($row = mysql_fetch_array($query)){
                                        echo "<tr>
                                            <td>".$row['seasonid']."</td>
                                            <td>{$row['name']}</td>
                                            <td>{$row['climate']}</td>
                                            <td>{$row['soiltype']}</td>
                                            <td>{$row['date']}</td>
                                        </tr>";
                                    }
                                    echo " </table>";
                                }else {
                                     echo "<div class='panel-body'>
                                        <p style='color:black'>Your farm have no history yet. </br>
                                            Please click the input to start.</p>
                                    </div>";
                                }
                            ?>
                        </div>
                        <button id = "btn-back-history" class="btn btn-default btn-lg">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
