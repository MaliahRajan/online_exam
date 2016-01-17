<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class resultFetch extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function resultFetch($exam_data)
	{
      $objResponse = new xajaxResponse();
      $this->load->model('Angular_online_exam_model');
      $subject_code = $exam_data['questionPattern'][0];
      $type_code = $exam_data['questionPattern'][1];
      $questions = $this->Angular_online_exam_model->questionFetch($subject_code,$type_code);
      $answer = $this->Angular_online_exam_model->resultFetch($subject_code,$type_code);
      $anwswerSheet = $exam_data['answerSheet'];
      $finalResult;
      $count = 0;
      foreach ($questions as $key => $value) {
        if($anwswerSheet[$key]['question'] == $value['questions'])
        {   
            if($anwswerSheet[$key]['answer'] == $answer[$key]['answer'])
            {
              $count = $count + 1;
            }
            else{
              $count = $count;
            }
            $finalResult[$key]['question'] = $value['questions'];
            $finalResult[$key]['option1'] = $value['option1'];
            $finalResult[$key]['option2'] = $value['option2'];
            $finalResult[$key]['option3'] = $value['option3'];
            $finalResult[$key]['option4'] = $value['option4'];
            $finalResult[$key]['answer'] = $anwswerSheet[$key]['answer'];
            $finalResult[$key]['correctAnswer'] = $answer[$key]['answer'];
        }
        else{
          return;
        }
      }
      $finalResult['score'] = $count;
      $objResponse->setReturnValue($finalResult);
      return $objResponse;
	}
}





