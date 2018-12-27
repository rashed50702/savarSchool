<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Savar School</title>
    <!-- Bootstrap -->
    <link href="{!! asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!! asset('assets/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset('assets/plugins/nprogress/nprogress.css') !!}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{!! asset('assets/plugins/iCheck/skins/flat/green.css') !!}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{!! asset('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{!! asset('assets/build/css/custom.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- bootstrap-daterangepicker -->
    <link href="{!! asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{!! asset('assets/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') !!}" rel="stylesheet">
     <!-- bootstrap-datetimepicker -->
    <link href="{!! asset('assets/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') !!}" rel="stylesheet">
      <!-- sweetalert -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/sweetalert/sweetalert.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/plugins/select2/css/select2.css') !!}">
    <!-- Style -->
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">

    <style>
      .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 8px;
        list-style: none;
        background-color: #ffffff;
        border-radius: 0px;
      }
      .breadcrumb li a {
        color:#3c8dbc;
        font-weight: 700;
      }
      .box_header {
        height: 20px;
        color: #666666;
        font-size: 15px;
      }
      .validateRq{
        color:red;
      }
      .btn_style{
        width: 100px;
      }
      /*------validation message---------*/
      .validation_msg{
        color: red;
      }
      /*---------start master css-----------*/
      ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: pink;
        font-style: italic;
        font-size: 13px;
      }
      ::-moz-placeholder { /* Firefox 19+ */
        color: pink;
        font-style: italic;
        font-size: 13px;
      }
      :-ms-input-placeholder { /* IE 10+ */
        color: pink;
        font-style: italic;
        font-size: 13px;
      }
      :-moz-placeholder { /* Firefox 18- */
        color: pink;
        font-style: italic;
        font-size: 13px;
      }
      label {
        color: black;
      }
      .validateRq{
        font-weight: 700;
      }
      .validation_msg{
        color: red;
      }
      /*---------start master css-----------*/

    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('home') }}" class="site_title"><i class="fa fa-paw"></i> <span>Savar School</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{!! asset('assets/img/img.jpg') !!}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li class="active"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home </a>
                    
                  </li>

                  <li><a><i class="fa fa-building-o"></i> Academic <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('classes.index')}}">Class</a></li>
                      <li><a href="{{ route('sections.index')}}">Section</a></li>
                      <li><a href="{{ route('subjects.index') }}">Subject</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-ticket"></i> Admission <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('registration.create') }}">New Registration</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> Students <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('students.index') }}">Student List</a></li>
                      <li><a href="{{ route('gurdians.index') }}"">Guardian List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clock-o"></i> Attendance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('attendances.add-search-form') }}">Add Attendance</a></li>
                      <li><a href="{{ route('attendances.monthly') }}">Attendance Monthly Report</a></li>
                      <li><a href="{{ route('attendances.report') }}">Attendance Report</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Class Routine <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="#">Period Management</a></li>
                      <li><a href="#">Add Class Routine</a></li>
                      <li><a href="#">Class Routines</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sticky-note"></i> Exam <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="#">Exam List</a></li>
                      <li><a href="#">Exam Schedule Add</a></li>
                      <li><a href="#">Exam Schedule List</a></li>
                      <li><a href="#">Exam Attendance</a></li>
                      <li><a href="#">Admit Card Management</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-trophy"></i> Result <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="#">Grade List</a></li>
                      <li><a href="#">Result Submit</a></li>
                      <li><a href="#">Result Published</a></li>
                      <li><a href="#">Exam Result</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bank"></i> Accounts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Add Fee Type</a></li>
                      <li><a href="#">Fee Type List</a></li>
                      <li><a href="#">Fee Collection</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-tasks"></i> Administration</a></li>
                  <li><a href="#"><i class="fa fa-clipboard"></i> Notice Board</a></li>
                  <li><a href="#"><i class="fa fa-certificate"></i> Certificate</a></li>
                  <li><a href="#"><i class="fa fa-star"></i> Testimonial</a></li>
                  {{-- <li><a href="#"><i class="fa fa-sticky-note-o"></i> Memo</a></li>
                  <li><a href="#"><i class="fa fa-book"></i> Book Order</a></li> --}}
                  <li><a href="#"><i class="fa fa-university"></i> Institutes</a></li>                  
                  <li><a href="#"><i class="fa fa-building"></i> Library</a>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{!! asset('assets/img/img.jpg') !!}" alt="">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('profile') }}"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fa fa-sign-out pull-right"></i> Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
          <div class="right_col" role="main">
            <!-- Main content -->
              @yield('content')
            <!-- /.content -->
          <div class="row"></div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right footer">
            Developed By: <a href="https://waxwingsoftware.com/" target="_blank"><b>Waxwing Software Limited</b></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{!! asset('assets/plugins/jquery/dist/jquery.min.js') !!}"></script>
    <!-- Bootstrap -->
    <script src="{!! asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <!-- NProgress -->
    <script src="{!! asset('assets/plugins/nprogress/nprogress.js') !!}"></script>
    <!-- iCheck -->
    <script src="{!! asset('assets/plugins/iCheck/icheck.min.js') !!}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{!! asset('assets/build/js/custom.min.js') !!}"></script>
    <!-- Datatables -->
     <script src="{!! asset('assets/plugins/moment/min/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
    <!-- toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{!! asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="{!! asset('assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}"></script>
    <!-- sweetalert -->
    <script src="{!! asset('assets/plugins/sweetalert/sweetalert-dev.js') !!}"></script>
    <script src="{!! asset('assets/plugins/select2/js/select2.js') !!}"></script>
    
    <script>
          @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
              case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

              case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
              case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
              case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
            }
          @endif
          $(document).on('click', '.deleteBtn', function () {
                var actionTo=$(this).attr('href');
                var token=$(this).attr('data-token');
                var id=$(this).attr('data-id');
                swal({
                          title: "Are you sure?",
                          text: "You will not be able to recover this imaginary file!",
                          type: "success",
                          showCancelButton: true,
                          confirmButtonClass: 'btn-danger',
                          confirmButtonColor: "#DD6B55",
                          confirmButtonText: 'Yes, delete it!',
                          cancelButtonText: "Cancel",
                          closeOnConfirm: false,
                          closeOnCancel: false
                        },
                        function (isConfirm) {
                          if (isConfirm) {
                            $.ajax({
                              url:actionTo,
                              type: 'post',
                              data: {_method: 'delete',_token:token},
                              success: function (data) {
                                if (data == 'hasForeignKey') {
                                  swal({
                                    title: "Oops!",
                                    text: "This data is used anywhere",
                                    type: "error"
                                  });
                                } else if(data == 'success'){
                                  swal({
                                            title: "Deleted!",
                                            text: "Your information delete successfully.",
                                            type: "success"
                                          },
                                          function (isConfirm) {
                                            if (isConfirm) {
                                              $('.' + id).fadeOut();
                                            }
                                          });
                                }else{
                                  swal({
                                    title: "Deleted!",
                                    text: "Something Error Found !, Please try again.",
                                    type: "error"
                                  });
                                }
                              }

                            });
                          } else {
                            swal("Cancelled", "Your data is safe .", "error");
                          }
                        });
                return false;
              });
  
    
    $('.myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('.myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

     $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });


    $(function () {

      $(".select2").select2();

    });

     function renderSelect2() {
        $(".select2").select2();
    }



   
</script>

 @yield('page_scripts')

  </body>
</html>