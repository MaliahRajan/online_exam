<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class questionFetch extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function questionFetch($subject_code,$type_code)
	{
      $objResponse = new xajaxResponse();
      $this->load->model('Angular_online_exam_model');
      $questions = $this->Angular_online_exam_model->questionFetch($subject_code,$type_code);
      $formattedQuestions;
      foreach ($questions as $key => $value) {
        $formattedQuestions[$key]['id'] = $key + 1;
        $formattedQuestions[$key]['question'] = $value['questions'];
        $formattedQuestions[$key]['option1'] = $value['option1'];
        $formattedQuestions[$key]['option2'] = $value['option2'];
        $formattedQuestions[$key]['option3'] = $value['option3'];
        $formattedQuestions[$key]['option4'] = $value['option4'];
        $formattedQuestions[$key]['answer'] = 'nill';
      }
      $objResponse->setReturnValue($formattedQuestions);
      return $objResponse;
	}
}





