 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>@lang('adminTemplate.dashboard')</span>
                      </a>
                  </li>
                 
                
        

                 @if (Auth::user()->isSuper())

                  <li>
                      <a href="admins">
                          <i class="fa fa-user-md"></i>
                          <span>Administrateurs</span>
                      </a>
                  </li>

                 @endif



                  <li>
                      <a href="users">
                          <i class="fa fa-users"></i>
                          <span>Utilisateurs</span>
                      </a>
                  </li>


                  <li>
                      <a href="categories">
                          <i class="fa fa-bars"></i>
                          <span>Catégories</span>
                      </a>
                  </li>



                  <li>
                      <a href="publications">
                          <i class="fa fa-book"></i>
                          <span>Publications</span>
                      </a>
                  </li>



                  <li>
                      <a href="trophies">
                          <i class="fa fa-money"></i>
                          <span>Trophés</span>
                      </a>
                  </li>


                  <li>
                      <a href="contactus">
                          <i class="fa fa-envelope"></i>
                          <span>Contact / Messages</span>
                      </a>
                  </li>


                  <li>
                      <a href="">
                      <a href="{{ route('admin.blank') }}">
                          <span>Page vide</span>
                      </a>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->