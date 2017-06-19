                           <!-- Modal -->
                      

   {{-- expr --}}




                           @if (Auth::check())

                                 <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>

                           @else
                                 <div id="loginModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                       <!-- Modal content-->
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          <div class="modal-body">
                   
                                             <div class="wp-social-login-widget">
                                                <div class="wp-social-login-connect-with">Log In</div>
                                                <div class="wp-social-login-provider-list">
                                                   <a rel="nofollow" href="wp-login.php-action=wordpress_social_authenticate&mode=login&provider=Facebook&redirect_to=http_%7C%7Cthemes.codexcoder.com%7Cvbuzz%7C.html" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                                                   Facebook
                                                   </a>
                                                   <a rel="nofollow" href="wp-login.php-action=wordpress_social_authenticate&mode=login&provider=Google&redirect_to=http_%7C%7Cthemes.codexcoder.com%7Cvbuzz%7C.html" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                                                   Google
                                                   </a>
                                                   <a rel="nofollow" href="wp-login.php-action=wordpress_social_authenticate&mode=login&provider=Twitter&redirect_to=http_%7C%7Cthemes.codexcoder.com%7Cvbuzz%7C.html" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                                                   Twitter
                                                   </a>
                                                </div>
                                                <div class="wp-social-login-widget-clearing"></div>
                                             </div>
                                             <!-- wsl_render_auth_widget -->
                                             <div class="row">
                                                <div class="col-lg-5 col-sm-5 col-xs-5">
                                                   <br>
                                                   <hr>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="margin-top:10px"> OR </div>
                                                <div class="col-lg-5 col-sm-5 col-xs-5">
                                                   <br>
                                                   <hr>
                                                </div>
                                             </div>

                                             <div class="clearfix"></div>

                                             <form id="login" class="ajax-auth login-form">


                                                <div class="status" style="display: none"></div>

                                                <input id="email" type="email" class="required" name="email" placeholder="Email">
                                                <input id="password" type="password" class="required" name="password" placeholder="Mot de passe">
                                                <div class="clearfix"></div>
                                                <input class="submit_button" type="submit" value="Se connecter">

                                                <div class="clearfix"></div>
                                                <a class="forgot-pass text-link" href="password-lost/index.html">Forgot Password?</a> 
                                                <a id="pop_signup" class="create-account">Create an Account</a>
                                             </form>



                                             <form id="register" class="ajax-auth login-form" >
                                                <div class="wp-social-login-connect-with">Register</div>

                                                <div class="status" style="display: none"></div>

                                                <label for="fname"></label>
                                                <input id="fname" type="text" name="fname" class="required" placeholder="First Name" value="hamza">

                                                <label for="lname"></label>
                                                <input id="lname" type="text" name="lname" class="required" placeholder="Last Name" value="zakaria">                                  
                                                <input id="email" type="text" class="required email" name="email" placeholder="Email" value="hamza.zakaria@achbanlik.ma" >

                                                <input id="password" type="password" class="required" name="password" placeholder="Password" value="Temp123*">
                                                <input type="password" id="password2" class="required" name="password2" placeholder="Confirm Password" value="Temp123*">

                                                <input class="submit_button" type="submit" value="Register">

                                                <a id="pop_login" class="create-account" href="">Already have an account?</a>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           @endif



{{--       <a href="index.html#TB_inline?width=350&height=600&inlineId=login_modal" class="thickbox login_modal_link" id="login_modal_link" style="display:none"></a>



       <div id="login_modal">
         <div class="login-form-container" style="max-width:300px">
            <div class="login-error"></div>
            <div style="text-align:center">
 

               <div class="wp-social-login-widget">
                  <div class="wp-social-login-connect-with">Log In</div>
                  <div class="wp-social-login-provider-list">
                     <a rel="nofollow" href="javascript:void(0);" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                     Facebook
                     </a>
                     <a rel="nofollow" href="javascript:void(0);" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                     Google
                     </a>
                     <a rel="nofollow" href="javascript:void(0);" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                     Twitter
                     </a>
                  </div>
                  <div class="wp-social-login-widget-clearing"></div>
               </div>
               <input type="hidden" id="wsl_popup_base_url" value="http://themes.codexcoder.com/vbuzz/gag/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;" />
               <input type="hidden" id="wsl_login_form_uri" value="http://themes.codexcoder.com/vbuzz/gag/wp-login.php" />
               <!-- wsl_render_auth_widget -->
            </div>
            <div class="row">
               <div class="col-lg-5">
                  <br/>
                  <hr/>
               </div>
               <div class="col-lg-2 text-center" style="margin-top:10px">
                  OR            
               </div>
               <div class="col-lg-5">
                  <br/>
                  <hr/>
               </div>
            </div>
            <div class="vp-clearfix"></div>
            <form name="loginform" id="loginform" action="http://themes.codexcoder.com/vbuzz/gag/wp-login.php" method="post">
               <p class="login-username">
                  <label for="user_login">Email or Username</label>
                  <input type="text" name="log" id="user_login" class="input" value="" size="20" />
               </p>
               <p class="login-password">
                  <label for="user_pass">Password</label>
                  <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
               </p>
               <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label></p>
               <p class="login-submit">
                  <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Login" />
                  <input type="hidden" name="redirect_to" value="/vbuzz/gag/" />
               </p>
            </form>
            <a class="forgot-password" href="password-lost/index.html">
            Forgot your password?        </a>
         </div>
      </div>








      
      <a href="index.html#TB_inline?width=350&height=600&inlineId=register_modal" class="thickbox register_modal_link" id="register_modal_link" style="display:block;"></a>


      <div id="register_modal">
         <div class="register-form-container" style="max-width:300px">
            <div class="login-error"></div>
            <div style="text-align:center">

               <div class="wp-social-login-widget">
                  <div class="wp-social-login-connect-with">Log In</div>
                  <div class="wp-social-login-provider-list">
                     <a rel="nofollow" href="javascript:void(0);" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                     Facebook
                     </a>
                     <a rel="nofollow" href="javascript:void(0);" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                     Google
                     </a>
                     <a rel="nofollow" href="javascript:void(0);" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                     Twitter
                     </a>
                  </div>
                  <div class="wp-social-login-widget-clearing"></div>
               </div>
               <input type="hidden" id="wsl_popup_base_url" value="http://themes.codexcoder.com/vbuzz/gag/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;" />
               <input type="hidden" id="wsl_login_form_uri" value="http://themes.codexcoder.com/vbuzz/gag/wp-login.php" />
            </div>
            <div class="row">
               <div class="col-lg-5">
                  <br/>
                  <hr/>
               </div>
               <div class="col-lg-2 text-center" style="margin-top:10px">
                  OR            
               </div>
               <div class="col-lg-5">
                  <br/>
                  <hr/>
               </div>
            </div>
            <div class="vp-clearfix"></div>
            <form id="signupform" action="http://themes.codexcoder.com/vbuzz/gag/wp-login.php?action=register" method="post">
               <input type="hidden" id="regcaphidden" value="1" />
               <p class="form-row nocap">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="vp-form-control" value="">
               </p>
               <p class="form-row nocap">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="vp-form-control" value="">
               </p>
               <p class="form-row nocap">
                  <small>
                  Note: Your password will be generated automatically and sent to your email address.                </small>
               </p>
               <div class="form-row reg-recap" style="display:none"></div>
               <script>var load_reg_recap = 1;</script>
               <p class="signup-submit">
                  <input type="submit" name="submit" class="register-button vp-form-control"
                     value="Register"/>
               </p>
            </form>
         </div>
      </div>






      <a href="index.html#TB_inline?width=350&height=350&inlineId=forgot_modal" class="thickbox forgot_modal_link" id="forgot_modal_link" style="display:none"></a>



      <div id="forgot_modal">
         <div id="password-lost-form">
            <h3>Forgot Your Password?</h3>
            <form id="lostpasswordform" action="../password-lost/index.html" method="post">
               <input type="hidden" id="lostcaphidden" value="1" />
               <p class="form-row nolostrecap">
                  <label for="user_login">Email or Username</label>
                  <input type="text" name="user_login" id="user_login" class="vp-form-control" value="">
               </p>
               <p class="nolostrecap">
                  <small>
                  Enter your email address and we'll send you a link you can use to pick a new password.                </small>
               </p>
               <div class="form-row lost-recap" style="display:none"></div>
               <script>var load_lost_recap = 1;</script>
               <p class="lostpassword-submit">
                  <input type="submit" name="submit" class="lostpassword-button vp-form-control"
                     value="Reset Password"/>
               </p>
            </form>
         </div>
      </div>

 --}}