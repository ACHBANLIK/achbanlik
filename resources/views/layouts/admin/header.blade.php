<!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="{{ route('admin.dashboard') }}" class="logo" >ACHBAN<span>LIK</span></a>
          <!--logo end-->

          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>


       <li class="dropdown language">

                      <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#">
                          {!! Html  ::image(asset('admin/img/flags/'.config('app.locale').'.png')) !!}
                          <span class="username">{{ config('app.locale') }}</span>
                          <b class="caret"></b>
                      </a>



                      <ul class="dropdown-menu">

                    
                       @foreach(config('app.locales') as $lang)
                          <li class="{{ config('app.locale') == $lang ? 'hidden' : '' }}"><a href="/setlocale/{{ $lang }}"> 

                          {!! Html  ::image(asset('admin/img/flags/'.$lang.'.png')) !!}

                           {{ $lang }}</a></li>
        
                        @endforeach



                      </ul>
                  </li>




                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          {!! Html  ::image(asset('/storage/'.Auth::user()->photo)  ,  '', array( 'height' => 30 )) !!}
                            <span class="username">{{ Auth::user()->fname }}  {{ Auth::user()->lname }}</span>
                          
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">

                          <li><a onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>


                                       <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>

                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->