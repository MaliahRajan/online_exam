{literal}
<div layout="column">
  <div id="xajax_content" layout="row" layout-wrap>
    <div flex="20"></div>
    <div flex="60">
      <md-card>
        <md-content class="md-padding">
          <div layout="row" layout-wrap>
            <div flex="5"></div>
            <div flex="90">
              <md-tabs md-dynamic-height md-border-bottom>
                    <md-tab label="Login">
                      <md-content class="md-padding">
                       <form name="loginForm">
                        <md-input-container class="md-icon-float md-block">
                          <!-- Use floating label instead of placeholder -->
                          <label>Username</label>
                          <md-icon class="customIcon"><i class="fa fa-user"></i></md-icon>
                          <input name="userName"ng-model="login.username" type="text" required>
                        </md-input-container>
                        <md-input-container class="md-icon-float md-block">
                          <!-- Use floating label instead of placeholder -->
                          <label>Password</label>
                          <md-icon class="customIcon" ><i class="fa fa-unlock-alt"></i></md-icon>
                          <input ng-model="login.password" type="password" required>
                        </md-input-container>
                      </form>
                        <div layout="row" layout-align="end center">
                          <div class="forgotPass"><md-button class="md-warn">Forgot Password</md-button></div>
                          <div><md-button class="md-raised" ng-click="login()">Login</md-button></div>
                        </div>
                      </md-content>
                    </md-tab>
                    <md-tab label="Register">
                      <md-content class="md-padding">
                          <md-content layout-padding>
                            <div>
                              <form name="userForm">
                                <div layout-gt-sm="row">
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Name <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon" ><i class="fa fa-user"></i></md-icon>
                                    <input name="name" ng-model="user.name" required ng-pattern="/^[a-zA-Z]*$/">
                                    <div ng-messages="userForm.name.$error" role="alert" multiple>
                                      <div ng-message="pattern">That doesn't look like a valid Name.
                                      </div>
                                    </div>
                                  </md-input-container>
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Username <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon"><i class="fa fa-user"></i></md-icon>
                                    <input name="userName" ng-model="user.userName" required ng-pattern="/^\w{1,11}$/">
                                    <div ng-messages="userForm.Username.$error" role="alert" multiple>
                                      <div ng-message="pattern">That doesn't look like a valid Username.
                                      </div>
                                    </div>
                                  </md-input-container>
                                </div>
                                <div layout-gt-sm="row">
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Password <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon" ><i class="fa fa-unlock-alt"></i></md-icon>
                                    <input ng-model="user.password">
                                  </md-input-container>
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Confirm Password <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon" ><i class="fa fa-unlock-alt"></i></md-icon>
                                    <input name="confirmPassword" ng-model="user.confirmPassword">
                                    <div ng-messages="userForm.Username.$error" role="alert" multiple>
                                      <div class="custom-msg" ng-show="passwordCheck()">
                                        Password does not match.
                                      </div>
                                    </div>
                                  </md-input-container>
                                </div>
                                <div layout-gt-sm="row">
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Registration No. <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon"><i class="fa fa-file-text-o"></i></md-icon>
                                    <input name="regno" ng-model="user.postalCode" required ng-pattern="/^(0|[1-9][0-9]*)$/">
                                    <div ng-messages="userForm.regno.$error" role="alert" multiple>
                                      <div ng-message="pattern" class="my-message">That doesn't look like a valid registration number.
                                      </div>
                                    </div>
                                  </md-input-container>
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Department <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon"><i class="fa fa-graduation-cap"></i></md-icon>
                                    <input ng-model="user.city">
                                  </md-input-container>
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Year <span class="mandatory"> *</span></label>
                                    <md-select ng-model="user.state">
                                      <md-option value="1">First Yr.</md-option>
                                      <md-option value="2">Second Yr.</md-option>
                                      <md-option value="3">Third Yr.</md-option>
                                      <md-option value="4">Final Yr.</md-option>
                                    </md-select>
                                  </md-input-container>
                                </div>
                                <div layout-gt-sm="row">
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Mobile <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon"><i class="fa fa-mobile"></i></md-icon>
                                    <input name="mobile" ng-model="user.firstName"  md-maxlength="10" ng-pattern="/^(0|[1-9][0-9]*)$/" required>
                                    <div ng-messages="userForm.mobile.$error" role="alert" multiple>
                                      <div ng-message="pattern" class="my-message">That doesn't look like a valid Mobile number.
                                      </div>
                                      <div ng-message="md-maxlength" class="my-message">
                                        Don't use country code.
                                      </div>
                                    </div>
                                  </md-input-container>
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>Email <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon"><i class="fa fa-envelope-o"></i></md-icon>
                                    <input name="email" ng-model="user.email" required ng-pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/">
                                    <div ng-messages="userForm.email.$error" role="alert" multiple>
                                      <div ng-message="pattern">That doesn't look like a valid Email.
                                      </div>
                                    </div>
                                  </md-input-container>
                                </div>
                                <md-input-container class="md-icon-float md-block">
                                  <label>Address <span class="mandatory"> *</span></label>
                                  <md-icon class="customIcon"><i class="fa fa-map-marker"></i></md-icon>
                                  <input ng-model="user.address">
                                </md-input-container>
                                <div layout-gt-sm="row">
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <label>City <span class="mandatory"> *</span></label>
                                    <md-icon class="customIcon"><i class="fa fa-map-marker"></i></md-icon>
                                    <input ng-model="user.firstName">
                                  </md-input-container>
                                  <md-input-container class="md-icon-float md-block" flex-gt-sm>
                                    <md-icon class="customIcon"><i class="fa fa-map-marker"></i></md-icon>
                                    <label>State <span class="mandatory"> *</span></label>
                                    <input ng-model="theMax">
                                  </md-input-container>
                                </div>
                              </form>
                            </div>
                          </md-content>
                        <div layout="row" layout-align="end center">
                          <div><md-button class="md-raised">Register</md-button></div>
                        </div>
                      </md-content>
                    </md-tab>
              </md-tabs>
            </div>
            <div flex="5"></div>
          </div>
        </md-content>
      </md-card>
    </div>
    <div flex="20"></div>
  </div>
</div>
{/literal}