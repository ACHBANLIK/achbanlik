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
                          <span>Administrateurs</span>
                      </a>
                  </li>

                 @endif



                  <li>
                      <a href="{{ route('admin.users') }}">
                          <i class="fa fa-users"></i>
                          <span>Utilisateurs</span>
                      </a>
                  </li>


                  <li>
                      <a href="{{ route('admin.categories') }}">
                          <i class="fa fa-bars"></i>
                          <span>Catégories</span>
                      </a>
                  </li>



                  <li>
                      <a href="{{ route('admin.publications') }}">
                          <i class="fa fa-book"></i>
                          <span>Publications</span>
                      </a>
                  </li>



                  <li>
                      <a href="{{ route('admin.trophies') }}">
                          <i class="fa fa-money"></i>
                          <span>Trophés</span>
                      </a>
                  </li>


                  <li>
                      <a href="{{ route('admin.contactus') }}">
                          <i class="fa fa-envelope"></i>
                          <span>Contact / Messages</span>
                      </a>
                  </li>




              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->