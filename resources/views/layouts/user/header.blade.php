      <!--   start top ads area  -->
      <div class="ice-header-top">
         <img src="{{ asset('user/img/vb-header-1.gif') }}" alt="Vast Buzz">
         <div class="ice-berge-area">
            <div class="ice-berge">
            </div>
         </div>
      </div>
      <!-- /.header-top --><!-- start heading section -->
      <header class="header-section header-1">
         <div class="header-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="logo pull-left">
                        <a href="index.html"><img src="{{ asset('user/img/Vast-Buzz.png') }}" alt="Vast Buzz"></a>
                     </div>



                     <div class="three menu main-menu">
                        <div class="menu-vp_guest_menu_items-container">
                           <ul id="primary-menu" class="menu">
                              <li class="menu-item"><a href="index.html">Hot</a></li>
                              <li class="menu-item"><a href="index.html">New</a></li>
                              @if (Auth::check())
                                    <li class="menu-item"><a href="index.html">Friends</a></li>
                              @endif
                              <li class="menu-item menu-item-has-children">
                                 <a href="index.html#">Catégories</a>
                                 <ul class="sub-menu menu-sub-content">
                                 @foreach ( $cats as $cat)
                                    <li id="menu-item-2080" class="menu-item"><a href="blog/category/poll/index.html">{{ $cat->{'title_'.config('app.locale')} }}</a></li>
                                 @endforeach
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>



                     <!-- /.menu -->
                     <div class="essential-btn pull-right">


                        @if (Auth::check())
                      
                  <div class="logged">

                    <div class="loggedbtn">
                        <img class="one" id="loggedbtni" src="{{ asset('/storage/'.Auth::user()->photo) }}" height="40" />
                    </div>

                    <div id="myLogged" class="logged-content">
                      <a href="#">{{ title_case(Auth::user()->fname) }}  {{ title_case(Auth::user()->lname) }}</a>
                      <a onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"> Log Out</a>
                    </div>
                  </div>


                        @else                     
                           <div class="vb-login">
                              <div class="vb-nav-login" data-toggle="modal" data-target="#loginModal"></div>
                           </div>
                        @endif

                        <div class="two create-post-login" data-toggle="modal" data-target="#create-post-modal">
                           <span class="cp-btn">Create Post</span>
                        </div>
                        <!-- /.create-post -->
                        <!-- Modal -->
                        <div id="create-post-modal" class="modal fade" role="dialog">
                           <div class="modal-dialog modal-lg">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Choose Post Format</h4>
                                 </div>
                                 <div class="modal-body">
                                    <div class="post-submit">
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-book"></i>
                                       <span>Submit Story</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-list"></i>
                                       <span>Submit List</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-picture"></i>
                                       <span>Submit Image</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-tint"></i>
                                       <span>Create Meme</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-tasks"></i>
                                       <span>Create Poll</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-globe"></i>
                                       <span>Create Quiz</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-film"></i>
                                       <span>Submit Video</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-music"></i>
                                       <span>Submit Audio</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-camera"></i>
                                       <span>Submit Gallery</span>
                                       </a>
                                       <a href="index.html#" class="ps-button go-login">
                                       <i class="glyphicon glyphicon-list-alt"></i>
                                       <span>Submit Playlist</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-search">
                           <div class="share">
                              <i class="fa fa-share-alt"></i>
                              <div class="follow-us">
                                 <div class="follow-us-item">
                                    <a class="facebook" href="index.html#"><i class="fa fa-facebook"></i></a>
                                 </div>
                                 <div class="follow-us-item">
                                    <a class="pinterest" href="index.html#"><i class="fa fa-pinterest"></i></a>
                                 </div>
                                 <div class="follow-us-item">
                                    <a class="google" href="index.html#"><i class="fa fa-google-plus"></i></a>
                                 </div>
                                 <div class="follow-us-item">
                                    <a class="twitter" href="index.html#"><i class="fa fa-twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="search">
                              <i class="fa fa-search" data-toggle="dropdown"></i>
                              <form action="http://themes.codexcoder.com/vbuzz/">
                                 <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
                              </form>
                           </div>
                        </div>
                        <!-- /.share-search -->                    
                        <div class="menu-toggle">
                           <i class="fa fa-bars"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.header-bottom -->
      </header>
      <!--   start below head ads area  -->
      <!--   start mobile menu  -->
      <div class="mobile-menu-section mobile-menu-section1">
         <div class="mobile-menu-content">
            <span class="mobile-menu-close"><i class="fa fa-close"></i></span>
            <div class="mobile-menu-trending-area">
               <div class="trending-menu">
               </div>
            </div>
            <div class="mobile-menu">
               <div class="menu-mobile-menu-container">
                  <ul id="mobile-menu" class="mobile-menu">
                     <li id="menu-item-1600" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1600"><a href="http://demos.codexcoder.com/vast-buzz/">Home</a></li>
                     <li id="menu-item-2068" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2068">
                        <a href="index.html#">Latest</a>
                        <ul class="sub-menu">
                           <li id="menu-item-2072" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2072"><a href="blog/category/poll/index.html">Poll</a></li>
                           <li id="menu-item-2073" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2073"><a href="blog/category/quiz/index.html">Quiz</a></li>
                           <li id="menu-item-2070" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2070"><a href="blog/category/movie-2/index.html">Movie</a></li>
                           <li id="menu-item-2071" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2071"><a href="blog/category/music/index.html">Music</a></li>
                           <li id="menu-item-2074" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2074"><a href="blog/category/funny/index.html">Funny</a></li>
                           <li id="menu-item-2075" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2075"><a href="blog/category/funny/animals/index.html">Animals</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- /.mobile-menu -->
         </div>
      </div>
      <!--   end mobile menu  -->