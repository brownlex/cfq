<div class="sidebar" data-color="azure" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('Invoice System') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @role('admin')
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}" >
                <i class="material-icons">people</i>
                <p>{{ __('Users') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('roles.index') }}">
                <i class="material-icons">workspaces</i>
                <p>{{ __('Roles') }}</p>
              </a>
            </li>
            @endrole
            <li class="nav-item{{ $activePage == 'invoices' ? ' active' : '' }}">
              <a class="nav-link" href="" >
                <i class="material-icons">description</i>
                <p>{{ __('Invoices') }}</p>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/new_logo.png"></i>
                    <p>{{ __('Profile') }}
                    </p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
