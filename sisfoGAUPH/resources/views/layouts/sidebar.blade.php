<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item">
          <a href='{{ asset("/") }}' class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>

         <li class="nav-item">
          <a href='{{ asset("admin/category") }}' class="nav-link">
            <i class="nav-icon fas fa-heart"></i>
            <p>
              Categories
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href='{{ asset("admin/user-role") }}' class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User Role
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href='{{ asset("admin/missing-item-status") }}' class="nav-link">
            <i class="nav-icon fas fa-eye"></i>
            <p>
              Missing Item Status
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href='{{ asset("admin/attendance") }}' class="nav-link">
            <i class="nav-icon fas fa-check"></i>
            <p>
              Attendance
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href='{{ asset("admin/reservation") }}' class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Reservation
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href='{{ asset("admin/reservation-status") }}' class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Reservation Status
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href='{{ asset("admin/schedule") }}' class="nav-link">
            <i class="nav-icon fas fa-calendar"></i>
            <p>
              Schedule
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ asset('admin/pengajuan-replacement-class') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Pengajuan Replacement Class
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ asset('admin/room') }}" class="nav-link">
            <i class="nav-icon fas fa-door-open"></i>
            <p>
              Room
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ asset('admin/location') }}" class="nav-link">
            <i class="nav-icon fas fa-map-pin"></i>
            <p>
              Location
            </p>
          </a>
        </li>
</ul>