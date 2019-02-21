<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
                <span>@lang('home.welcome'),</span>
                <h2>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li class="active"><a href="{{ route('home') }}"><i class="fa fa-home"></i> @lang('left_menu.home_menu') </a>
                    
                  </li>
                  @hasrole('admin|principal')
                  <li><a><i class="fa fa-building-o"></i> @lang('left_menu.academic_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('classes.index')}}">@lang('left_menu.class_menu')</a></li>
                      <li><a href="{{ route('sections.index')}}">@lang('left_menu.section_menu')</a></li>
                      <li><a href="{{ route('subjects.index') }}">@lang('left_menu.subject_menu')</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-ticket"></i> @lang('left_menu.admission_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('registration.create') }}">@lang('left_menu.new_registration_menu')</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> @lang('left_menu.student_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('students.index') }}">@lang('left_menu.student_list_menu')</a></li>
                      <li><a href="{{ route('gurdians.index') }}"">@lang('left_menu.guardian_list_menu')</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clock-o"></i> @lang('left_menu.student_attendance_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('student-attendances.add-search-form') }}">@lang('left_menu.add_attendance_menu')</a></li>
                      <li><a href="{{ route('student-attendances.monthly') }}">@lang('left_menu.attendance_monthly_report_menu')</a></li>
                      <li><a href="{{ route('student-attendances.report') }}">@lang('left_menu.attendance_report_menu')</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('teachers.index') }}"><i class="fa fa-users"></i> @lang('left_menu.teacher_menu')</a></li>
                  <li><a><i class="fa fa-clock-o"></i> @lang('left_menu.teacher_attendance_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('teacher-attendances.add-search-form') }}">@lang('left_menu.add_attendance_menu')</a></li>
                      <li><a href="{{ route('teacher-attendances.monthly') }}">@lang('left_menu.attendance_monthly_report_menu')</a></li>
                      <li><a href="{{ route('teacher-attendances.report') }}">@lang('left_menu.attendance_report_menu')</a></li>
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('teacher')
                  <li> <a href="{{ route('give-attendance') }}"><i class="fa fa-clock-o"></i> @lang('left_menu.attendance_menu')</a> </li>
                  <li><a><i class="fa fa-clock-o"></i> @lang('left_menu.student_attendance_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('student-attendances.add-search-form') }}">@lang('left_menu.add_attendance_menu')</a></li>
                      <li><a href="{{ route('student-attendances.monthly') }}">@lang('left_menu.attendance_monthly_report_menu')</a></li>
                      <li><a href="{{ route('student-attendances.report') }}">@lang('left_menu.attendance_report_menu')</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> @lang('left_menu.student_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('students.index') }}">@lang('left_menu.student_list_menu')</a></li>
                      <li><a href="{{ route('gurdians.index') }}"">@lang('left_menu.guardian_list_menu')</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('teachers.index') }}"><i class="fa fa-users"></i> @lang('left_menu.teacher_menu')</a></li>
                  @endhasrole
                  @hasrole('admin|principal')
                  <li><a><i class="fa fa-calendar"></i> @lang('left_menu.class_routine_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="{{ route('class-routines.create') }}">@lang('left_menu.add_class_routine_menu')</a></li>
                      <li><a href="{{ route('class-routines.search-form') }}">@lang('left_menu.class_routine_menu')</a></li>
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('student')
                    <li><a href="{{ route('student.class-routine') }}"><i class="fa fa-calendar"></i> @lang('left_menu.class_routine_menu')</a></li>
                    <li> <a href="{{ route('give-attendance') }}"><i class="fa fa-clock-o"></i> @lang('left_menu.attendance_menu')</a> </li>
                  @endhasrole
                  @hasrole('admin|principal')
                  <li><a><i class="fa fa-sticky-note"></i> @lang('left_menu.exam_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="{{ route('exams.index') }}">@lang('left_menu.exam_list_menu')</a></li>
                      <li><a href="{{ route('exam-schedules.create') }}">@lang('left_menu.exam_schedule_add_menu')</a></li>
                      <li><a href="{{ route('exam-schedules.search-form') }}">@lang('left_menu.exam_schedule_list_menu')</a></li>
                      {{-- <li><a href="#">Admit Card Management</a></li> --}}
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('admin|principal')
                  <li><a><i class="fa fa-trophy"></i> @lang('left_menu.result_menu') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                      
                      <li><a href="{{ route('results.grades.index') }}">@lang('left_menu.grade_list_menu')</a></li>
                      <li><a href="{{ route('results.add-search-form') }}">@lang('left_menu.result_submit_menu')</a></li>
                      <li><a href="{{ route('results.index') }}">@lang('left_menu.result_published_menu')</a></li>
                      <li><a href="{{ route('results.exam-search-form') }}">@lang('left_menu.exam_result_menu')</a></li>
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('admin|accountant|principal')
                  <li><a><i class="fa fa-bank"></i> @lang('left_menu.account') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('accounts.fees.fee-types.create') }}">@lang('left_menu.add_fee_type')</a></li>
                      <li><a href="{{ route('accounts.fees.fee-types.index') }}">@lang('left_menu.fee_type_list')</a></li>
                      <li><a href="{{ route('accounts.fees.collections.index') }}">@lang('left_menu.fee_collection')</a></li>
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('admin')
                  <li><a><i class="fa fa-tasks"></i> @lang('left_menu.administration') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('users.list') }}">@lang('left_menu.users')</a></li>
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('principal')
                  <li><a><i class="fa fa-tasks"></i> @lang('left_menu.administration') <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">@lang('left_menu.accountant')</a></li>
                    </ul>
                  </li>
                  @endhasrole
                  @hasrole('admin|principal|teacher|student|guest')
                  <li><a href="{{ route('notices.index') }}"><i class="fa fa-clipboard"></i> @lang('left_menu.notice_board')</a></li>
                  {{-- <li><a href="#"><i class="fa fa-certificate"></i> Certificate</a></li> --}}
                  @endhasrole

                  @hasrole('admin|guest-view')
                  <li><a href="{{ route('institues.index') }}"><i class="fa fa-university"></i> @lang('left_menu.institues')</a></li>
                  @endhasrole
                  @hasrole('admin|principal')
                  <li><a href="{{ route('certificates.index') }}"><i class="fa fa-certificate"></i> @lang('left_menu.certificate')</a></li>
                  <li><a href="{{ route('testimonials.index') }}"><i class="fa fa-star"></i> @lang('left_menu.testimonial')</a></li>
                  @endhasrole
                  <hr>
                  <li><a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                                       <i class="fa fa-sign-out"></i> @lang('left_menu.logout')
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
                  <li>&nbsp;</li>
                  <li>&nbsp;</li>
                  <li>&nbsp;</li>
                  <li>&nbsp;</li>
                  {{-- <li><a href="#"><i class="fa fa-certificate"></i> Certificate</a></li>
                  <li><a href="#"><i class="fa fa-star"></i> Testimonial</a></li> --}}
                  {{-- <li><a href="#"><i class="fa fa-sticky-note-o"></i> Memo</a></li>
                  <li><a href="#"><i class="fa fa-book"></i> Book Order</a></li> --}}
{{--                   <li><a href="#"><i class="fa fa-building"></i> Library</a></li>
 --}}                </ul>
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
                    <li><a href="{{ route('profile') }}"> @lang('home.profile')</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>@lang('home.settings')</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">@lang('home.help')</a></li>
                    <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fa fa-sign-out pull-right"></i> @lang('left_menu.logout')
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>
                <li class="localization"><a href="{{ url('locale/bn') }}"> <img src="{{ asset('assets/localization/bn.png') }}" alt=""> </a> </li>
                <li class="localization"><a href="{{ url('locale/en') }}"> <img src="{{ asset('assets/localization/en.png') }}" alt=""> </a> </li>


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
  $(function () {
      $('#datetimepicker12').datetimepicker({
          inline: true,
          sideBySide: true
      });
  });   
</script>

 @yield('page_scripts')

  </body>
</html>