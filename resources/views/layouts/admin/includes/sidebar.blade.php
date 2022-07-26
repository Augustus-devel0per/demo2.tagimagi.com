<ul class="sidenav-inner py-1">

    <li class="sidenav-item @if(Route::currentRouteName() == 'home') active @endif ">
      <a href="{{route('home')}}" class="sidenav-link "><i class="sidenav-icon ion ion-md-speedometer"></i>
        <div>Dashboard </div>
      </a>
    </li>

    <li class="sidenav-item @if(Route::currentRouteName() == 'admin.form-ones.index') active @endif ">
      <a href="{{route('admin.form-ones.index')}}" class="sidenav-link "><i class="sidenav-icon ion ion-md-cube"></i>
        <div>Form One </div>
      </a>
    </li>

    <li class="sidenav-item @if(Route::currentRouteName() == 'admin.form-twos.index') active @endif ">
      <a href="{{route('admin.form-twos.index')}}" class="sidenav-link "><i class="sidenav-icon ion ion-md-cube"></i>
        <div>Form Two </div>
      </a>
    </li>

    <li class="sidenav-item @if(Route::currentRouteName() == 'admin.form-threes.index') active @endif ">
      <a href="{{route('admin.form-threes.index')}}" class="sidenav-link "><i class="sidenav-icon ion ion-md-cube"></i>
        <div>Form Three </div>
      </a>
    </li>

    <li class="sidenav-item @if(Route::currentRouteName() == 'admin.setting.edit') active @endif" >
      <a href="{{route('admin.setting.edit', 1)}}" class="sidenav-link "><i class="sidenav-icon ion ion-ios-settings d-block"></i>
        <div>Setting</div>
      </a>
    </li>

</ul>