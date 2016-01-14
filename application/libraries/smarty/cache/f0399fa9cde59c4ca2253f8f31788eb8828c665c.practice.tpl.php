<?php
/*%%SmartyHeaderCode:29184567e59be6485c0_62100516%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0399fa9cde59c4ca2253f8f31788eb8828c665c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\practice.tpl',
      1 => 1451120619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29184567e59be6485c0_62100516',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567e59be6c95b4_90416063',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e59be6c95b4_90416063')) {
function content_567e59be6c95b4_90416063 ($_smarty_tpl) {
?>

<div layout="row" layout-wrap>
	<div flex="100" class="questionMap">
		<md-card>
			<div layout="row" layout-wrap ng-show="questionMap">
<!-- 			    <div flex="5">	    
			    	<span class="info">
			    		<span class="questions">
			    		<md-button class="answered md-fab md-mini" aria-label="questions">
					    </md-button>
					    </span>
					    <i class="fa fa-long-arrow-right"></i>  Answered
					</span>
			    	</br>
			    	<span class="info2">
			    		<span class="questions">
				    		<md-button class="un-answered md-fab md-mini" aria-label="questions">
						    </md-button> 
						</span> <i class="fa fa-long-arrow-right"></i> Unanswered
					</span>
			    </div> -->
			    <div flex="100" class="md-padding questionNumbers">
			    	<span class="questions" ng-repeat="pc in practiceQestions">
				    	<md-button ng-class="{'answered': pc.answer != 'nill','un-answered': pc.answer == 'nill'}" class="md-fab md-mini" aria-label="questions" ng-click="navigateQuestion(pc.id)">
					        {{pc.id}}
					    </md-button>
				    </span>
			    </div>
			</div>
			<span class="hideQuestionMap" ng-show="!questionMap" ng-click="questionMap = !questionMap">
					<span>Question Info</span> 
									<i class="fa fa-chevron-down"></i>
			</span>
			<span class="hideQuestionMap" ng-show="questionMap" ng-click="questionMap = !questionMap">
					<span>Question Info</span>  <i class="fa fa-chevron-up"></i>
			</span>
			<span class="home" ng-click="practice_home()">
				<span class="mini-btn">
					 <i class="fa fa-home"></i>
				</span>
			</span>
			<span class="timer">
					<!--  <i class="fa fa-clock-o"></i> <span id="timer">00:02:60</span> -->
					<timer id="countdown" interval="1000" countdown="{$duration}" finish-callback="callbackTimer.finished()"> 
						<span>{{hhours}}{{hhoursS}}:{{mminutes}}:{{sseconds}}</span>

	                    <div class="progress progress-striped {{displayProgressActive}}" style="height: 17px; margin-top: 6px;">
	                        <div class="bar" style="min-width: 2em; height: 17px;width: {{progressBar}}%;">
	                            {{progressBar}} %
	                        </div>
	                    </div>
	                </timer>
			</span>
		</md-card>
	</div>
</div>
<div layout="row" layout-wrap>
	<div flex="100">		
		<md-card>
			<md-content class="md-padding">
				<div layout="row" layout-wrap>
			        <div flex="100">
			        	<div ng-repeat = "pq in filteredPracticeQuestions = (practiceQestions | currentQuestion:defaultQuestion)">
						  	<h4>{{pq.id}}.{{pq.question}}</h4>
						    <md-radio-group ng-model="pq.answer">
						      <md-radio-button  ng-value="pq.option1" aria-label = "pq.option1">{{pq.option1}}</md-radio-button>
						      <md-radio-button  ng-value="pq.option2" aria-label = "pq.option2">{{pq.option2}}</md-radio-button>
						      <md-radio-button  ng-value="pq.option3" aria-label = "pq.option3">{{pq.option3}}</md-radio-button>
						      <md-radio-button  ng-value="pq.option4" aria-label = "pq.option4">{{pq.option4}}</md-radio-button>
						    </md-radio-group>
						</div>
				    </div>
				</div>
				<div layout="row" layout-wrap>
			        <div flex="5"><md-button ng-disabled="!(defaultQuestion - 1)" class="md-raised" ng-click="previous()">Previous</md-button></div>
			        <div flex="5"></div>
			       	<div flex="5"><md-button ng-disabled="!(defaultQuestion + 1 <= PracticeQuestionslength)" class="md-raised" ng-click="next()">Next</md-button></div>
			        <div flex="75"></div>
			        <div flex="10"><md-button class="md-raised">Final Submit</md-button></div>
			    </div>
			</md-content>
		</md-card>
	</div>
</div>
<?php }
}
?>