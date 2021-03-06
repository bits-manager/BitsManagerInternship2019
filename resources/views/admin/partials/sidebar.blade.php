
<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('frontend.homes') }}">hall</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>

    @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Hall</li>
      <li class="{{ Request::route()->getName() == 'admin.hall' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.hall') }}"><i class="fa fa-columns"></i> <span>Hall</span></a></li>

    
      <li class="menu-header">Event Type</li>
      <li class="{{ Request::route()->getName() == 'admin.event' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.event') }}"><i class="fa fa-columns"></i> <span>EventType</span></a></li>


      <li class="menu-header">Hall_Event</li>
      <li class="{{ Request::route()->getName() == 'admin.eventhall' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.eventhall') }}"><i class="fa fa-columns"></i> <span>Hall_Event</span></a></li>

      <li class="menu-header">Address</li>
      <li class="{{ Request::route()->getName() == 'admin.address' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.address') }}"><i class="fa fa-columns"></i> <span>Address</span></a></li>

      <li class="menu-header">Contact</li>
      <li class="{{ Request::route()->getName() == 'admin.contact' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.contact') }}"><i class="fa fa-columns"></i> <span>Contact</span></a></li>

     <li class="menu-header">State</li>
      <li class="{{ Request::route()->getName() == 'admin.state' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.state') }}"><i class="fa fa-columns"></i> <span>State</span></a></li>

     <li class="menu-header">City</li>
      <li class="{{ Request::route()->getName() == 'admin.city' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.city') }}"><i class="fa fa-columns"></i> <span>City</span></a></li>

    <li class="menu-header">Township</li>
      <li class="{{ Request::route()->getName() == 'admin.townships' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.townships') }}"><i class="fa fa-columns"></i> <span>Township</span></a></li>


      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif


      
      
        


      


</ul>
</aside>
