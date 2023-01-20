<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <title>
    @yield('title')
  </title>
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <!-- Nucleo Icons -->
  <link href="{{ '/assets/css/nucleo-icons.css' }}" rel="stylesheet" />
  <link href="{{ '/assets/css/nucleo-svg.css' }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="{{ 'https://kit.fontawesome.com/42d5adcbca.js' }}" crossorigin="anonymous"></script>
  <link href="{{ '/assets/css/nucleo-svg.css' }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ '/assets/css/soft-ui-dashboard.css?v=1.0.6' }}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  function setFontType(t){
  var font = t.options[t.selectedIndex].text;
  console.log(font);
  document.getElementsByTagName("body")[0].style.fontFamily=font;
}

function setTextSize(){
  var val = document.getElementById("TestSize").value
  console.log(val);
  var size = val +"px";
  console.log(size);
  document.getElementsByTagName("th")[0].style.fontSize= size;
  document.getElementsByTagName("td")[0].style.fontSize= size;
  document.getElementsByTagName("a")[0].style.fontSize= size;
}
</script>
  
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- BEGIN:Aside -->
  @include('layouts.employer.asidebar')
  <!--/SideBar-->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->  
    @include('layouts.employer.header')    
    <!-- End Navbar -->

    

    <div class="container-fluid py-4">
        @yield('content')
      
      <footer class="footer pt-3  ">
      @include('layouts.employer.footer')
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <!-- Font Family Type -->
        <div class="mt-3">
          <h6 class="mb-0">FontFamily Type</h6>
          <p class="text-sm">Choose between  different font family types.</p>
        </div>
        <div class="mt-3">
        <select class="form-select form-select-lg mb-3" onChange="setFontType(this)" aria-label=".form-select-lg example">
            <optgroup label="Sans-Serif">
                <option value="1">Arial, sans-serif</option>
                <option value="2">Helvetica, sans-serif</option>
                <option value="3">Gill Sans, sans-serif</option>
                <option value="3">Lucida, sans-serif</option>
                <option value="3">Helvetica Narrow, sans-serif</option>
                <option value="3">sans-serif</option>

            </optgroup>
            <optgroup label="Serif">
                <option value="1">Times, serif</option>
                <option value="2">Times New Roman, serif</option>
                <option value="3">Palatino, serif</option>
                <option value="3">Bookman, serif</option>
                <option value="3">New Century Schoolbook, serif</option>
                <option value="3">serif</option>
            </optgroup>
            <optgroup label="Monospace">
                <option value="1">Andale Mono, monospace</option>
                <option value="2">Courier New, monospace</option>
                <option value="3">Courier, monospace</option>
                <option value="3">Lucidatypewriter, monospace</option>
                <option value="3">Fixed, monospace</option>
                <option value="3">monospace</option>
            </optgroup>
            <optgroup label="Cursive">
                <option value="1">Comic Sans, Comic Sans MS, cursive</option>
                <option value="2">Zapf Chancery, cursive</option>
                <option value="3">Coronetscript, cursive</option>
                <option value="3">Florence, cursive</option>
                <option value="3">Parkavenue, cursive</option>
                <option value="3">cursive</option>
            </optgroup>
            <optgroup label="Fantasy">
                <option value="1">Impact, fantasy</option>
                <option value="2">Arnoldboecklin, fantasy</option>
                <option value="3">Oldtown, fantasy</option>
                <option value="3">Blippo, fantasy</option>
                <option value="3">Brushstroke, fantasy</option>
                <option value="3">fantasy</option>
            </optgroup>
            <optgroup label="FontAwesome">
                <option value="1">FontAwesome</option>
            </optgroup>
            
        </select>
        </div>
        <div class="mt-3">
          <h6 class="mb-0">Text size</h6>
          <p class="text-sm">Choose Text size.</p>
        </div>
        <div class="mt-3">
           <input type="range" onChange="setTextSize()"  class="form-range" id="TestSize">
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ '/assets/js/core/popper.min.js' }}"></script>
  <script src="{{ '/assets/js/core/bootstrap.min.js' }}"></script>
  <script src="{{ '/assets/js/plugins/perfect-scrollbar.min.js' }}"></script>
  <script src="{{ '/assets/js/plugins/smooth-scrollbar.min.js' }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>

window.onload = function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function(e) {
    var link     = $(e.relatedTarget),
        modal    = $(this),
        id = link.data("id");
    var Name = link.data("name"),
        Adresse = link.data("adresse"),
        AccountType = link.data("accounttype"),
        AccountNumber = link.data("accountnumber"),
        phone = link.data("phone"),
        Email = link.data("email");

    // fill the data in the input fields
    modal.find("#modal-input-id").val(id);
    modal.find("#modal-input-Name").val(Name);
    modal.find("#modal-input-Adresse").val(Adresse);
    modal.find("#modal-input-AccountType").val(AccountType);
    modal.find("#modal-input-AccountNumber").val(AccountNumber);
    modal.find("#modal-input-phone").val(phone);
    modal.find("#modal-input-Email").val(Email);

  })

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
}
</script>

  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ '/assets/js/soft-ui-dashboard.min.js?v=1.0.6' }}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@yield('scripts')
</body>

</html>