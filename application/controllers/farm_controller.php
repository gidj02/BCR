<?php

class Farm_Controller extends MY_Controller{
 
   function __construct()
   {
      parent::__construct();
      $this->load->model('farm_model','',TRUE);

      //This method will have the credentials validation
      $this->load->library('form_validation');
   }
    
   public function input()
   {
      $this->form_validation->set_rules('previouscrop', 'Previous Crop', 'trim|required|xss_clean');
      $this->form_validation->set_rules('climate', 'Climate', 'trim|required|xss_clean');
      $this->form_validation->set_rules('soiltype', 'Soil Type', 'trim|required|xss_clean');
      $this->form_validation->set_rules('month', 'Month', 'trim|required|xss_clean');
    
      if($this->form_validation->run() == FALSE)
      {
   		//Field validation failed.  User redirected to login page
         echo "<script type='text/javascript'>alert('Field Validation Failed.');</script>";
   		$this->render('userpage', 'usernav', NULL);		
      }
      else
      {
   		//Go to private area
   		// redirect('main_controller', 'refresh');
         $data['data'] = array(
            'prevcrop' => $this->input->post('previouscrop'),
            'climate' => $this->input->post('climate'),
            'soiltype' => $this->input->post('soiltype'),
            'month' => $this->input->post('month'),
         );
         // $result = $this->farm_model->getcrops($data);
         // foreach ($result as  $value) {
         //    echo "<script type='text/javascript'>alert('$value->crop_id');</script>";
         // }
         $this->process($data);
      }
   }

   public function process($data)
   {
      // $crop['result'] = array(array());
      // $result = $this->farm_model->getcrops($data);
      // foreach ($result as  $value) {
      //    $crop['result'] = (String)$value->crop;
      //    // echo "<script type='text/javascript'>alert('$value->crop');</script>";
      // }

      $this->render('userresult', 'usernav', $data);
   }

   public function insertdata(){
      $crop = $this->input->post('croplist');
      $id = $this->input->post('id');
      $climate = $this->input->post('climate');
      $soiltype = $this->input->post('soil');

      $data = array(
         'pname' => $crop,
         'pclimate' => $climate,
         'psoiltype' => $soiltype,
         'pdate' => 1,
         'puserid' => $id
         );
      if($this->input->post('input_crop')){
         $this->farm_model->insertdata($data);
         echo "<script type='text/javascript'>alert('Successfully Recorded!');</script>";
      }

      redirect('main_controller', 'refresh');
   }
}
?>