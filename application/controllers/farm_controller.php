<?php

class Farm_Controller extends MY_Controller{
 
   function __construct()
   {
      parent::__construct();
      $this->load->model('user_model','',TRUE);

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
   		$this->render('userpage', 'usernav');		
      }
      else
      {
   		//Go to private area
   		// redirect('main_controller', 'refresh');
         $data = array(
            'prevcrop' => $this->input->post('previouscrop'),
            'climate' => $this->input->post('climate'),
            'soiltype' => $this->input->post('soiltype'),
            'month' => $this->input->post('month'),
         );

         $this->process($data);
      }
   }

   public function process($data)
   {

   }
}
?>