<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class practice extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function practice($subject_code,$type_code)
	{
      $objResponse = new xajaxResponse();
      $this->load->model('Angular_online_exam_model');
      $duration = $this->Angular_online_exam_model->durationFetch($subject_code,$type_code);
      //Seconds Conversion
      if(!empty($duration)){
        $duration = $duration * 60;
      }
      $objResponse->setReturnValue($duration);
      return $objResponse;
	}
}





