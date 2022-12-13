<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <?php
    $webstyle = new App\Models\GeneralSettingWebStyle;
    $generalsetting = $webstyle::first();

    $favicons = new App\Models\GeneralSettingFavicon;
    $favicon = $favicons::first();
  ?>
  <title>{{($generalsetting) ? $generalsetting->title : null}} - @yield('page-title')</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="_token" content="{{ csrf_token() }}">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  {{-- <link rel="apple-touch-icon" href="/admin/assets/images/logo.png"> --}}
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  {{-- <link rel="shortcut icon" sizes="196x196" href="/admin/assets/images/logo.png"> --}}
  
  <!-- style -->
  <link rel="stylesheet" href="/admin/assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/admin/assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/admin/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/admin/assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="/admin/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="/admin/assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/admin/assets/styles/font.css" type="text/css" />
<!-- DataTables -->
  <link rel="stylesheet" href="/admin/assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/assets/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="icon" href="/uploads/logo/{{( $favicon) ? $favicon->file : null}}" type="image/gif" >

  {{-- Editor --}}
  <!-- include libraries(jQuery, bootstrap) -->

{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/admin/editor/summernote.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="/admin/tags/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css" rel="stylesheet" type="text/css">

{{-- Sweet Alert --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- include summernote css/js -->
    
</head>
  
<style type="text/css">
    .generalsetting_admin{
        color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};
        background-color: {{($generalsetting) ? $generalsetting->admin_background : null}};
    }
    .generalsetting_admin_checkbox{
        /*color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};*/
        background-color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};
    }

    .page-item.active .page-link {
        color: {{($generalsetting) ? $generalsetting->admin_text_color : null}} !important;
        background-color: {{($generalsetting) ? $generalsetting->admin_background : null}} !important;
        border-color: {{($generalsetting) ? $generalsetting->admin_background : null}} !important;
    }

    .page-link {
        color: {{($generalsetting) ? $generalsetting->admin_text_color : null}} !important;
        background-color: #fff !important;
        border: 1px solid #dee2e6 !important;
    }

    .page-link:hover {
        color: {{($generalsetting) ? $generalsetting->admin_text_color : null}} !important;
        background-color: {{($generalsetting) ? $generalsetting->admin_background : null}} !important;
        border-color: {{($generalsetting) ? $generalsetting->admin_background : null}} !important;
    }
    
  .input-border:focus{
    border :2px solid @if($generalsetting) {{ ($generalsetting) ? $generalsetting->admin_text_color : null}} @endif; 
  }
</style>

{{-- Step form  --}}
<style type="text/css">
  * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

#grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: black
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: auto;
    /*background: skyblue;*/
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: auto;
    /*background: #616161;*/
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 50%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    /*background: skyblue*/
    background: {{($generalsetting) ? $generalsetting->admin_background : null}}
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk generalsetting_admin" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
            <div ui-include="'/admin/assets/images/logo.png'"></div>
            <img src="/admin/assets/images/logo.png" alt="." class="hide">
            <span class="hidden-folded inline site-title" >{{($generalsetting) ? $generalsetting->title : null}}</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Main</small>
                </li>
                <li>
                  <a href="/admin/dashboard" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/admin/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="/admin/header-menu" >
                    <span class="nav-icon">
                      <i class="material-icons">menu 
                        <span ui-include="'/admin/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Menu</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">pages 
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Forms Data</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="{{url('/admin/reservation')}}" >
                        <span class="nav-text">Reservation</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/admin/contact')}}">
                        <span class="nav-text">Contact</span>
                      </a>
                    </li>
                    
                  </ul>
                </li>
                <li>
                  <a href="/admin/emails" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Emails</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    
                    <span class="nav-icon">
                      <i class="material-icons">settings 
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">General Settings</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="/admin/general-setting/logo">
                        <span class="nav-text">Logo</span>
                      </a>
                    </li>
                    {{-- <li>
                      <a href="/admin/general-setting/favicon">
                        <span class="nav-text">Favicon</span>
                      </a>
                    </li> --}}
                    <li>
                      <a href="/admin/general-setting/preloader">
                        <span class="nav-text">Preloader</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/general-setting/webstyle" >
                        <span class="nav-text">Website Style</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
          </nav>
      </div>
      <div class="b-t">
        <div class="nav-fold">
            <a href="profile.html">
                {{-- <span class="pull-left">
                  <img src="/admin/assets/images/a0.jpg" alt="..." class="w-40 img-circle">
                </span> --}}
                <span class="clear hidden-folded p-x">
                  <span class="block _500">{{ Auth::user()->name }}</span>
                  <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
                </span>
            </a>
        </div>
      </div>
    </div>
  </div>

  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
      <div class="p-a white lt box-shadow generalsetting_admin">
          <div class="row">
              <div class="col-sm-6">
                  <h4 class="mb-0 _300">Welcome to {{($generalsetting) ? $generalsetting->title : null}}</h4>
              </div>
              <div class="col-sm-6 text-sm-right">
                  <div class="m-y-sm">
                      <div class="btn-group dropdown">
                        <button class="btn white btn-sm ">{{ Auth::user()->name }}</button>
                        <button class="btn white btn-sm dropdown-toggle" data-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                          <a class="dropdown-item" data-toggle="modal" href="#changepassword">Change Password</a>
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                              <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                            </form>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="modal fade" id="changepassword">
        <div class="modal-dialog">
          <form action="" id="cpassform" class="form-control" method="post" role="form" enctype="multipart/form-data">
          @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Change Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Old Password</label>
                    <input type="password" name="old_password" id="oldpass" class="form-control"><br>

                    <label for="">New Password</label>
                    <input type="password" name="new_password" id="newpass" class="form-control"><br>

                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" id="cpass" class="form-control">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="cpasssubmit" class="btn btn-primary generalsetting_admin">Save changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
          </div>
      </div>
                    @yield('mainContent')
                </div>
<!-- jQuery -->
  <script src="/admin/assets/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="/admin/assets/libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="/admin/assets/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="/admin/assets/libs/jquery/underscore/underscore-min.js"></script>
  <script src="/admin/assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="/admin/assets/libs/jquery/PACE/pace.min.js"></script>

  <script src="/admin/assets/scripts/config.lazyload.js"></script>

  <script src="/admin/assets/scripts/palette.js"></script>
  <script src="/admin/assets/scripts/ui-load.js"></script>
  <script src="/admin/assets/scripts/ui-jp.js"></script>
  <script src="/admin/assets/scripts/ui-include.js"></script>
  <script src="/admin/assets/scripts/ui-device.js"></script>
  <script src="/admin/assets/scripts/ui-form.js"></script>
  <script src="/admin/assets/scripts/ui-nav.js"></script>
  <script src="/admin/assets/scripts/ui-screenfull.js"></script>
  <script src="/admin/assets/scripts/ui-scroll-to.js"></script>
  <script src="/admin/assets/scripts/ui-toggle-class.js"></script>

  <script src="/admin/assets/scripts/app.js"></script>

  <!-- ajax -->
  <script src="/admin/assets/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="/admin/assets/scripts/ajax.js"></script>
<!-- endbuild -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>

<script type="text/javascript">
      $(document).ready(function() {
  {{-- Blog Editor --}}
        $('.summernote').summernote();
      });
    </script>
    {{-- Keywords --}}
    <script src="/admin/tags/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

{{-- <script type="text/javascript">
$('#search').on('keyup',function(){
  // alert('asd');
  $(this).attr(data-role="tagsinput");
// $value=$(this).val();
// $.ajax({
// type : 'get',
// url : '{{URL::to('search')}}',
// data:{'search':$value},
// success:function(data){
// $('tbody').html(data);
// }
// });
})
</script> --}}
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
<!-- DataTables -->
<script src="/admin/assets/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#example3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
          // jQuery.noConflict();
//   $(function () {
      jQuery(function ($){
      $.noConflict();
    // $('.select2').select2()
    // //Initialize Select2 Elements
    // $('.select2bs4').select2({
    // theme: 'bootstrap4'
    // })
    
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": false,
      "ordering": false,
      "info": false,
    });
    $('#example2').DataTable({
      // "pagingType": "full_numbers",
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      // "autoWidth": true,
      // "responsive": true,
    });
    
    // $('#dataexample').DataTable( {
    //     dom: 'Bfrtip',
    //     buttons: [
    //         'copyHtml5',
    //         'excelHtml5',
    //         'csvHtml5',
    //         'pdfHtml5'
    //     ]
    // });
  });
</script>
</body>
</html>

{!! Menu::scripts() !!}
