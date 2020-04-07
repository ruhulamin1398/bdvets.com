<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion" id="accordionSidebar">






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

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{route('village')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Village</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{route('offices.index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>offices</span></a>
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
    <hr class="sidebar-divider m-1 p-0 ">
    <!--prescription  Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapsePrescription" aria-expanded="true" aria-controls="collapsePrescription">
        <i class="fas fa-fw fa-cog"></i>
        <span>Prescription</span>
      </a>
      <div id="collapsePrescription" class="collapse" aria-labelledby="headingPrescription" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('prescriptions.create') }}">New Prescription</a>
          <a class="collapse-item" href="{{ route('clinical-signs.index') }}">Clinical Signs</a>
          <a class="collapse-item" href="{{ route('diagnoses.index') }}">Tentative Diagnosis</a>
          <a class="collapse-item" href="{{ route('necropsies.index') }}">Necropsy</a>
          <a class="collapse-item" href="{{ route('advices.index') }}">Advices</a>

        </div>
      </div>
    </li>



  </div>


  <div class="card  bg-abasas-dark mb-2">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{route('doctor-profiles.edit',Auth::user()->id )}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profile</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 "  href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
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