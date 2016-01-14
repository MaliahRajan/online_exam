<html ng-app="app">
<head>
    <title>{$site_title}</title>
    {$xjaxJs}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Angular Material CSS  version 0.11.2 used here -->
	<link rel="stylesheet" href="css/angular-material.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/sweet-alert.css">
</head>
<body ng-controller="onlineExam">
  <md-toolbar>
      <div class="md-toolbar-tools">
      	<md-button class="md-fab md-mini logo" aria-label="Angular Online Examination System" onclick="location.reload();">
          <i class="fa fa-graduation-cap"></i>
        </md-button>
        <h2>
          <span>{$site_title}</span>
        </h2>
        <span flex></span>
<!--         <md-button class="md-raised md-warn" aria-label="Learn More">
          Learn More
        </md-button> -->
      </div>
  </md-toolbar>

