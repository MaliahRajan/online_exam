<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class instructions extends CI_Controller
{
	
  function __construct()
  {
    parent::__construct();
    parent::registerXajax();
  }
    
	function instructions()
	{
      $smarty = new TestSmarty();
      $objResponse = new xajaxResponse();
      $template = $smarty->fetch('instructions.tpl');
      $objResponse->setReturnValue($template);
      return $objResponse;
	}
}





