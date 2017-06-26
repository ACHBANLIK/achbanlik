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
                        <a  href="{{ route('user.index') }}"><img style="float: left;" width="35%" src="{{ asset('user/img/achbanlik.png') }}" alt="achbanlik"></a>
                     </div>



                     <div class="three menu main-menu">
                        <div class="menu-vp_guest_menu_items-container">
                           <ul id="primary-menu" class="menu">
                              <li class="menu-item four"><a href="/">Acceuil</a></li>
{{--                               <li class="menu-item four"><a href="index.html">Hot</a></li>
                              <li class="menu-item five"><a href="index.html">New</a></li>
                              <li class="menu-item"><a href="index.html">Old</a></li> --}}
                              @if (Auth::check())
                                    <li class="menu-item six"><a href="{{ route('user.friends') }}">Amis</a></li>
                              @endif
                              <li class="menu-item menu-item-has-children">
                                 <a>Catégories</a>
                                 <ul class="sub-menu menu-sub-content">
                                 @php
                                    $cats = \App\Category::all();
                                 @endphp

                                 @foreach ( $cats as $cat)
                                    <li  class="menu-item"><a target="_blank" href="/cat/{{ $cat->id }}" class="cat">{{ $cat->{'title_'.config('app.locale')} }}</a></li>
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
                      <a href="{{ route('user.profile') }}">{{ title_case(Auth::user()->fname) }}  {{ title_case(Auth::user()->lname) }}</a>
                      <a href="/mespublications">Mes publications</a>
                      <a href="/demo">Démo</a>
                      <a onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"> Log Out</a>
                    </div>
                  </div>


                        @else                     
                           <div class="vb-login">
                              <div class="vb-nav-login" data-toggle="modal" data-target="#loginModal"></div>
                           </div>
                        @endif

                        <div class="create-post-login" data-toggle="modal" data-target="#create-post-modal">
                           <span class="cp-btn">Créer</span>
                        </div>
                        <!-- /.create-post -->
                        <!-- Modal -->
                        <div id="create-post-modal" class="modal fade" role="dialog">
                           <div class="modal-dialog modal-lg">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Choisir le type du publication</h4>
                                 </div>
                                 <div class="modal-body">
                                    <div class="post-submit">

                                       @php
                                          $types = \App\Type::all();
                                       @endphp

                                       @foreach ( $types as $type)
                                          <a  class="ps-button {{ (!Auth::check()) ? 'go-login'  : ''  }}"  data-toggle="modal" data-target="#type{{ $type->id }}Modal">
                                          <i class="{{ $type->icone }}"></i>
                                          <span>{{ $type->{'title_'.config('app.locale')} }}</span>
                                          </a>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>




                     @include('user.createpublication')



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
                                 <input type="search" class="search-field" placeholder="Mot clé &hellip;" value="" name="s" title="Search for:" />
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

   
                     <li  class="menu-item menu-item-type-custom"><a data-toggle="modal" data-target="#create-post-modal">Créer une publication</a></li>


                     <li  class="menu-item menu-item-type-custom"><a href="/">Acceuil</a></li>
{{--                      <li  class="menu-item menu-item-type-custom"><a href="#">Hot</a></li>
                     <li  class="menu-item menu-item-type-custom"><a href="#">New</a></li>
                     <li  class="menu-item menu-item-type-custom"><a href="#">Old</a></li> --}}
                     @if (Auth::check())
                     <li  class="menu-item menu-item-type-custom"><a href="{{ route('user.friends') }}">Amis</a></li>
                     @endif
                        <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                        <a href="">Catégories</a>
                        <ul class="sub-menu">

                           @foreach ( $cats as $cat)
                              <li class="menu-item" class="menu-item m menu-item-object-category"><a target="_blank" href="/cat/{{ $cat->id }}" class="cat">{{ $cat->{'title_'.config('app.locale')} }}</a></li>
                           @endforeach     

                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- /.mobile-menu -->
         </div>
      </div>
      <!--   end mobile menu  -->