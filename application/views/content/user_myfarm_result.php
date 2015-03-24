<!-- Download Section -->
    <section id="login" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div id = "div-login" class="col-lg-8 col-lg-offset-2">
                    <div id ="div-result">
                        <h2>Crops Suited For Your Farm.</h2>
                        <p>These crops are applicable for current situation,</br> please choose one.</p>
                        <?php 
                        $this->load->library('session');
                         // $user_id = $this->session->userdata();
                        $user_id = $this->session->userdata['logged_in']['id'];
                        // if(isset($_POST['input_crop']))
                        // {
                        //     "<script type='text/javascript'>alert('asds');</script>";
                        //     $insert = array(
                        //         'name' => $crop,
                        //         'climate' => $data['climate'],
                        //         'soiltype' => $data['soiltype'],
                        //         'data' => $date(),
                        //         'userid' => $session_data['id']
                        //      );
                        //     $this->db->insert('season', $insert);
                        //     // $this->db->query("call insertseason('$crop', 
                        //     //     '$data[climate]'
                        //     //     '$data[soiltype]',
                        //     //     '$session_data[id]')");
                        // }
                        
                        // $pass['pass'] = array(
                        //          'climate' => $data['climate'],
                        //          'soiltype' => $data['soiltype'],
                        //          'userid' => $user_id);

                        echo form_open("farm_controller/insertdata");                                
                                 $query = $this->db->query("call main_process('$data[prevcrop]', 
                                '$data[climate]',
                                '$data[soiltype]',
                                '$data[climate]')");
                            echo "<select name = 'croplist' style='color:black' id='croplist'>";
                                

                                foreach($query->result() as $row){
                                        // echo "<script type='text/javascript'>alert('$row->crop');</script>";
                                        echo "<option value=$row->crop style='color:black'>$row->crop</option>";
                                }                                
                                ?>
                            </select>
                            <br><br>
                            <input type="hidden" name="climate" value=<?php echo $data['climate']; ?>/>
                            <input type="hidden" name="soil" value=<?php echo $data['soiltype']; ?> />
                            <input type="hidden" name="id" value=<?php  echo $user_id; ?> />
                            <?php echo form_submit(array("name"=>"input_crop", "value"=>"Select Crop", "class"=>"btn btn-default btn-lg")); ?>
                         
                            </form>
                            <button id = "btn-back-crop" class="btn btn-default btn-lg">Back</button>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
