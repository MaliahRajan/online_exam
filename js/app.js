var app = angular.module('app', ['ngMaterial','ngMessages','app.filters','timer'], function($compileProvider) {
    // configure new 'compile' directive by passing a directive
    // factory function. The factory function injects the '$compile'
    $compileProvider.directive('compile', function($compile) {
      // directive factory creates a link function
      return function(scope, element, attrs) {
        scope.$watch(
          function(scope) {
             // watch the 'compile' expression for changes
            return scope.$eval(attrs.compile);
          },
          function(value) {
            // when the 'compile' expression changes
            // assign it into the current DOM
            element.html(value);

            // compile the new DOM and link it to the current
            // scope.
            // NOTE: we only compile .childNodes so that
            // we don't get into infinite loop compiling ourselves
            $compile(element.contents())(scope);
          }
        );
      };
    });
  });

app.controller('onlineExam',['$scope','$http','$mdToast', function onlineExam($scope,$http,$mdToast) {
  
  $scope.login = {username:null,password:null};

  $scope.user = {name:null,password:null,confirmPassword:null}

  $scope.PracticeQuestionslength;

  $scope.practiceQestions;

  $scope.defaultQuestion = 1;

  $scope.practiceSessionStart = null;
  
  $scope.timeSpent = null;

  $scope.examSessionStatus = null;

  $scope.examData = new FormData();

  $scope.questionPattern;

  $scope.passwordCheck = function(){
    if( $scope.user.password &&  $scope.user.confirmPassword &&  $scope.user.password !==  $scope.user.confirmPassword){
      return true;
    }
    else{
      return false;
    }
  }

  $scope.login = function(){
    if($scope.login.username && $scope.login.password)
    {
      xajax_login($scope.login.username,$scope.login.password);
    }
    else
    {
      customAlertMessage('Insufficient Data','Empty Username/Password','warning')
      return true;
    }
  }

  $http.get('application/views/templates/index_main_content.tpl').success(function(data) {
      $scope.html = data;
  });

  $scope.navigateQuestion = function(id){
    $scope.defaultQuestion = id;
  }

  $scope.next = function(){
    if($scope.defaultQuestion != $scope.PracticeQuestionslength){
      $scope.defaultQuestion = $scope.defaultQuestion + 1;
    }
    else{
      return true;
    }
  }

  $scope.previous = function(){
     if($scope.defaultQuestion !== 1){
      $scope.defaultQuestion = $scope.defaultQuestion - 1;
    }
    else{
      return true;
    }
  }

  $scope.instruction = function(){
    $scope.html = xajax.request( { xjxfun: 'instructions' }, {mode:'synchronous'} );
  }
  $scope.practice = function(){
     $scope.defaultQuestion = 1;
     $scope.questionPattern = ['1', '1'];
     $scope.practiceQestions = xajax.request( { xjxfun: 'questionFetch' }, {mode:'synchronous', parameters:$scope.questionPattern});
     $scope.duration = xajax.request( { xjxfun: 'practice' }, {mode:'synchronous', parameters:$scope.questionPattern});
     $scope.PracticeQuestionslength = ($scope.practiceQestions).length;
     $http.get('application/views/templates/practice.tpl').success(function(data) {
           $scope.html = data;
     });
     var d = new Date();
     $scope.practiceSessionStart = ''+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'';
  }


  $scope.practice_home = function(){
     $http.get('application/views/templates/index_main_content.tpl').success(function(data) {
      $scope.html = data;
    });
  }
  $scope.finished = function(){
    $scope.examSessionStatus = 1;
    var d = new Date();
    var now = ''+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'';
    var then  = $scope.practiceSessionStart;
    $scope.timeSpent = moment.utc(moment(now,"HH:mm:ss").diff(moment(then,"HH:mm:ss"))).format("HH:mm:ss");
    customAlertMessage('Success.!!','Exam submitted success','success');
    //form the required exam data
    $scope.examData['questionPattern'] = $scope.questionPattern;
    $scope.examData['answerSheet'] = $scope.practiceQestions;
    $scope.resultFetched = xajax.request( { xjxfun: 'resultFetch' }, {mode:'synchronous', parameters:[$scope.examData]});
    $http.get('application/views/templates/scoreCard.tpl').success(function(data) {
      $scope.html = data;
    });
  }
  $scope.callbackTimer={};   
  $scope.callbackTimer.finished=function(){
      var d = new Date();
      var now = ''+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'';
      var then  = $scope.practiceSessionStart;
      $scope.timeSpent = moment.utc(moment(now,"HH:mm:ss").diff(moment(then,"HH:mm:ss"))).format("HH:mm:ss");
      if($scope.examSessionStatus == 1){
        return;
      }
      else{
          customAlertMessage('Times Up..!!','Exam submitted success','success');
            //form the required exam data
          $scope.examData['questionPattern'] = $scope.questionPattern;
          $scope.examData['answerSheet'] = $scope.practiceQestions;
          $scope.resultFetched = xajax.request( { xjxfun: 'resultFetch' }, {mode:'synchronous', parameters:[$scope.examData]});
          $http.get('application/views/templates/scoreCard.tpl').success(function(data) {
            $scope.html = data;
          });
          $scope.$apply();  
      }
  };

}]);

//Filter for data in Ng-Repeat
angular.module('app.filters', []).filter('currentQuestion', [function () {
  return function (Qestions,defaultQuestion) {
    var currentQuestion = [];
      angular.forEach(Qestions, function (row) {
        if(defaultQuestion !== row.id) {
          return;
        }
        currentQuestion.push(row);
      });
      return currentQuestion;
  };
}]);

function customAlertMessage(msgTitle,msg,msgType)
{
    swal(""+msgTitle, ""+msg, ""+msgType);
}

function clearDiv(divName){
  $("#"+divName).html('');
}

function complieAngular(template,div) {
    var $template = template;
    $('#'+div).html(''+$template);
    var $body = $('<div ng-controller="onlineExam"></div>');
    angular.element(document).injector().invoke(function ($compile) {
        var scope = angular.element($body).scope();
        $compile($template)(scope);
        scope.$digest();
    });
}
