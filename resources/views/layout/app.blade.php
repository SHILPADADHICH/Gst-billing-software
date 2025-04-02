<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

  <!-- Plugins css -->
  <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="{{ asset('assets/css2/bootstrap-creative.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css2/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{ asset('assets/css2/bootstrap-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="{{ asset('assets/css2/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />
  

  <!-- icons -->
  <link href="{{ asset('assets/css2/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>

<body data-layout-mode="detached"
  data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
      <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

          <!-- All-->

          <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
              role="button" aria-haspopup="false" aria-expanded="false">
              <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle" />
              <span class="pro-user-name ml-1">
                Shilpa <i class="mdi mdi-chevron-down"></i>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
              <!-- item-->
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
              </div>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-user"></i>
                <span>My Account</span>
              </a>

              <div class="dropdown-divider"></div>

              <!-- item-->
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf


<a href="route{{'login'}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
    <i class="fe-log-out"></i>
    <span>Logout</span>
</a>
</form>

            </div>
          </li>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
          <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
              <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22" />
              <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="20" />
              <!-- <span class="logo-lg-text-light">U</span> -->
            </span>
          </a>

          <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-light.png" alt="" height="20" />
            </span>
          </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
          <li>
            <button class="button-menu-mobile waves-effect waves-light">
              <i class="fe-menu"></i>
            </button>
          </li>

          <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('include/sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">
        <!-- Start Content-->
        @yield('content')
      </div>

      <!-- Footer Start -->
      
      <!-- end Footer -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
  </div>

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- Vendor js -->
  <script src="{{ asset('assets/js2/vendor.min.js') }}"></script>
 
  <script src="{{ asset('assets/libs2/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs2/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('assets/js2/pages/dashboard-1.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js2/app.min.js') }}"></script>

    <script src="{{ asset('assets/script.js') }}"></script>
  <script>
$(document).ready(function () {
    updatePagination();
    
    // Live search
    $("#search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#clientTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

// Add new client
function addClient() {
    let table = document.getElementById("clientTable");
    let row = table.insertRow();
    row.innerHTML = `
        <td>${table.rows.length}</td>
        <td contenteditable="true">New Client</td>
        <td>
            <b>Phone:</b> <span contenteditable="true">1234567890</span><br>
            <b>Email:</b> <span contenteditable="true">email@example.com</span>
        </td>
        <td contenteditable="true">Address</td>
        <td contenteditable="true">00000</td>
        <td>${new Date().toLocaleDateString()}</td>
        <td>
            <button class="btn btn-warning btn-sm" onclick="editRow(this)">Edit</button>
            <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
        </td>
    `;
    updatePagination();
}

// Edit row (just makes content editable)


// Delete row with confirmation


// Pagination function
function updatePagination() {
    let rows = $("#clientTable tr");
    let rowsPerPage = 5;
    let totalPages = Math.ceil(rows.length / rowsPerPage);
    
    $("#pagination").html(""); // Clear pagination
    for (let i = 1; i <= totalPages; i++) {
        $("#pagination").append(`<button class="btn btn-sm btn-secondary mx-1" onclick="showPage(${i})">${i}</button>`);
    }
    
    showPage(1); // Show first page by default
}

// Show specific page
function showPage(page) {
    let rows = $("#clientTable tr");
    let rowsPerPage = 5;
    let start = (page - 1) * rowsPerPage;
    let end = start + rowsPerPage;
    
    rows.hide();
    rows.slice(start, end).show();
}
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>