<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Divider -->




  <div class="card  bg-abasas-dark mb-2">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
      <a class="nav-link p-3 " href="/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Product Collapse Menu -->
       <!-- Nav Item - Dashboard -->
       <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{route('farmers.index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Farmer</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--Category  Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseStaff" aria-expanded="true" aria-controls="collapseStaff">
        <i class="fas fa-fw fa-cog"></i>
        <span>Doctor</span>
      </a>
      <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('doctors.index') }}">Doctors</a>
          <a class="collapse-item" href="{{ route('offices.index') }}">Offices</a>

        </div>
      </div>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <!--Category  Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseMedichine" aria-expanded="true" aria-controls="collapseMedichine">
        <i class="fas fa-fw fa-cog"></i>
        <span>Medichine</span>
      </a>
      <div id="collapseMedichine" class="collapse" aria-labelledby="headingMedichine" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('medichines.index') }}">Medichines</a>
          <a class="collapse-item" href="{{ route('medichine-categories.index')  }}">Categorories</a>

        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">



  </div>


  <div class="card  bg-abasas-dark mb-2">


    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Sallery</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Logout</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </div>


</ul>
<!-- End of Sidebar -->
