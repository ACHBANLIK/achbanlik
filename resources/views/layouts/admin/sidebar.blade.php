 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="{{ route('admin.dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>@lang('adminTemplate.dashboard')</span>
                      </a>
                  </li>
                 
                
        

                 @if (Auth::user()->isSuper())

                  <li>
                      <a href="{{ route('admin.admins') }}">
                          <i class="fa fa-user-md"></i>
                          <span>@lang('adminTemplate.admins')</span>
                      </a>
                  </li>

                 @endif



                  <li>
                      <a href="{{ route('admin.users') }}">
                          <i class="fa fa-users"></i>
                          <span>@lang('adminTemplate.users')</span>
                      </a>
                  </li>


                  <li>
                      <a href="{{ route('admin.categories') }}">
                          <i class="fa fa-bars"></i>
                          <span>@lang('adminTemplate.categories')</span>
                      </a>
                  </li>



                  <li>
                      <a href="{{ route('admin.publications') }}">
                          <i class="fa fa-book"></i>
                          <span>@lang('adminTemplate.publications')</span>
                      </a>
                  </li>



                  <li>
                      <a href="{{ route('admin.trophies') }}">
                          <i class="fa fa-money"></i>
                          <span>@lang('adminTemplate.trophes')</span>
                      </a>
                  </li>


                  <li>
                      <a href="{{ route('admin.contactus') }}">
                          <i class="fa fa-envelope"></i>
                          <span>@lang('adminTemplate.contact')</span>
                      </a>
                  </li>




              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->