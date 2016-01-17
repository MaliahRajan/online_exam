<div layout="column">
  <div id="xajax_content" layout="row" layout-wrap>
    <div flex="10"></div>
    <div flex="80">
      <md-card>
        <md-content class="md-padding">
          <div layout="row" layout-wrap>
                <div flex="10">
                  <md-button class="md-raised md-warn" aria-label="Home" ng-click="practice_home()" >
                    <i class="fa fa-home" style="font-size:25px;color:#ffffff !important;"></i>
                  </md-button>
                </div>
                <div flex="10">
                  <md-button class="md-raised md-warn" aria-label="Score">
                      Score - {{resultFetched.score}}
                  </md-button>
                </div>
                <div flex="55">
                  <md-button class="md-raised md-warn" aria-label="Score" style="width:100%">
                     Score Card
                  </md-button>
                </div>
                <div flex="20">
                  <md-button class="md-raised md-warn" aria-label="Score" style="width:113%;margin-left: 15px;">
                     Spent Time - {{timeSpent}}
                  </md-button>
                </div>
          </div>
          <md-divider></md-divider>
          <div layout="row" layout-wrap>
            <div flex="100">
                <div class="CSSTableGenerator" >
                    <table >
                        <tr>
                            <td>
                              Questions
                            </td>
                            <td>
                              Your Answer
                            </td>
                            <td>
                              Correct Answer
                            </td>
                        </tr>
                        <tr ng-repeat = "rF in resultFetched">
                            <td >
                               {{rF.question}}
                            </td>
                            <td>
                               {{rF.answer}}
                            </td>
                            <td>
                               {{rF.correctAnswer}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
          </div>
        </md-content>
      </md-card>
    </div>
    <div flex="10"></div>
  </div>
</div>