 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" navigation-header"><span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
          </li>
        <li class=" nav-item"><a href="{{route('admin.dashboard')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>            
          </li>
           <li class=" nav-item"><a href="#"><i class="ft-book"></i><span class="menu-title" data-i18n="">Book </span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('admin.book.create')}}">Add Book </a>
              </li>
              <li><a class="menu-item" href="{{route('admin.book.index')}}">Book List</a>
              </li>
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="ft-folder"></i><span class="menu-title" data-i18n="">Chapter </span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('admin.chapter.create')}}">Add Chapter </a>
              </li>
              <li><a class="menu-item" href="{{route('admin.chapter.index')}}">Chapter List</a>
              </li>
            </ul>
          </li>



          <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Rules</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('admin.rule.create')}}">Add Rules</a></li>
              <li><a class="menu-item" href="{{route('admin.rule.index')}}">Rules List</a></li>
           </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="ft-airplay"></i><span class="menu-title" data-i18n="">Sub Rules</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('admin.subrule.create')}}">Add Subrule</a></li>
              <li><a class="menu-item" href="{{route('admin.subrule.index')}}">Subrule List</a></li>
           </ul>
          </li>

         
          <li class=" nav-item"><a href=""><i class="ft-folder"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
        </ul>
      </div>
    </div>