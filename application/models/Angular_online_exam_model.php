 <?php

	class Angular_online_exam_model extends CI_Model {

	        public function __construct()
	        {
	                $this->load->database();
	        }
	        public function getMenu($groupId)
			{	
				$finalMenu = array();
				$this->db->select('menu_id');
				$menuSql = "SELECT DISTINCT
								   mgm.menu_group_mapping_id,
								   m.menu_id,
								   m.menu_icon,
								   m.menu_name,
								   m.xajax_script
							FROM   
								   menu m,
								   menu_group_mapping mgm 
							WHERE  
								   m.menu_id = mgm.menu_id
							AND
								   mgm.group_id = ".$groupId."
							AND
								   mgm.status = 'y'
							AND    
								   m.status = 'y'";

				$query = $this->db->query($menuSql);
				$mainMenu =  $query->result_array();

				$subMenuSql = "SELECT DISTINCT

									  smgm.sub_menu_group_mapping_id, 
									  sm.sub_menu_id, 
									  sm.sub_menu_icon, 
									  sm.sub_menu_name, 
									  sm.xajax_script
							   FROM 
							   		  sub_menu sm,
							   		  sub_menu_group_mapping smgm,
							   		  menu_sub_menu_mapping msmm

							   WHERE 
							   		  sm.sub_menu_id = smgm.sub_menu_id

							   AND 
							   		  smgm.group_id = ".$groupId."
							   AND 
							   		  smgm.status = sm.status = msmm.status
							   AND 
							   		  msmm.menu_id = ";

				foreach ($mainMenu as $menukey => $menuValue) 
				{
					$finalMenu[$menukey]['menu_group_mapping_id'] = $menuValue['menu_group_mapping_id'];
					$finalMenu[$menukey]['menu_id'] = $menuValue['menu_id'];
					$finalMenu[$menukey]['menu_icon'] = $menuValue['menu_icon'];
					$finalMenu[$menukey]['menu_name'] = $menuValue['menu_name'];
					$finalMenu[$menukey]['xajax_script'] = $menuValue['xajax_script'];
					$Sql = $subMenuSql.$mainMenu[$menukey]['menu_id'];
					$query = $this->db->query($Sql);
					$subMenu =  $query->result_array();
					if(empty($subMenu))
					{
						$finalMenu[$menukey]['subMenu'] = 'N';
					}
					else
					{
						$finalMenu[$menukey]['subMenu'] = $subMenu;
					}
				}
				return $finalMenu;
			}
			public 	function searchArray($arrayValues, $field, $value)
			{
				foreach($arrayValues as $key => $array)
			    {
			      if ($array[$field] === $value)
			      {
			         return $key;
			      }

			    }
			}
			public function getConfig()
			{
				$query = $this->db->get_where('config', array('status' => 'y'));
				$configValues =  $query->result_array();
				return $configValues;
			}
	        public function login($userName,$password)
	        {
	        	$this->db->select('Name');
	        	$this->db->select('group_id');
				$query = $this->db->get_where('login', array('userName' => $userName,'password' => $password,'status' => 'y'));
			    $logindata =  $query->result_array();
			    $status = array();
			    if(empty($logindata))
			    {	
			    	$status[0]['status'] = 'n';
			    	return $status;
			    }
			    else
			    {
			    	$status[0]['status'] = 'y';
			    	$status[0]['Name'] = $logindata[0]['Name'];
			    	$status[0]['group_id'] = $logindata[0]['group_id'];
			    	return $status;
			    }
	        }
			public function questionFetch($subject_code,$type_code){

				$questionFetchSql = "SELECT 
									q.questions,
									q.option1,
									q.option2,
									q.option3,
									q.option4
						    FROM 
						    		questions q,
						    		questions_master qm
						    WHERE 	
						    		qm.question_subject_code = ".$subject_code."

						    AND 
						    		qm.question_type_code = ".$type_code." 

						    AND 
						    		qm.question_code = q.question_code 
						    AND 
						    		qm.status = 'y'";

				$query = $this->db->query($questionFetchSql);
				$questions =  $query->result_array();
				return $questions;
			}
			public function durationFetch($subject_code,$type_code){

				$durationFetchSql = "SELECT 
											duration 
									 FROM
									 		question_duration_master
									 WHERE 
									 		question_type_code = ".$type_code." 
									 AND 
									 		question_subject_code = ".$subject_code." ";

				$query = $this->db->query($durationFetchSql);
				$duration =  $query->result_array();
				return $duration[0]['duration'];
			}
	}

?>