@extends('layouts.app')
@section('content')
@section('title','Home')

  <h3>
    @role('admin')
      Admin
    @endrole
    @role('principal')
      Principal
    @endrole
    @role('office-staff')
      Office Staff
    @endrole
    @role('accountant')
      Accountant
    @endrole
    @role('teacher')
      Teacher
    @endrole
    @role('student')
      Student
    @endrole
    @role('guest-view')
      Guest
    @endrole
     @lang('home.dashboard') <small>@lang('home.control_panel')</small></h3>
<hr>

@hasrole('admin|principal|teacher')

<div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box new-bg-aqua">
            <div class="new-inner">
              <h3>3</h3>
              <p>@lang('home.total_students')</p>
            </div>
            <div class="new-icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box new-bg-green">
            <div class="new-inner">
              <h3>3</h3>
              <p>@lang('home.total_teachers')</p>
            </div>
            <div class="new-icon">
              <i class="fa fa-user-plus"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box new-bg-yellow">
            <div class="new-inner">
              <h3>2</h3>
              <p>@lang('home.total_users')</p>
            </div>
            <div class="new-icon">
              <i class="fa fa-user"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
</div>
@endhasrole
@hasrole('admin|principal|teacher|student|guest-view|accountant')

<div class="row">
  <div class="col-md-12">
    <a class="weatherwidget-io" href="https://forecast7.com/en/40d71n74d01/new-york/" data-label_1="@lang('home.bangladesh')" data-label_2="@lang('home.weather')" data-theme="original" >@lang('home.bangladesh') @lang('home.weather')</a>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="calendar">
        <h4>@lang('home.calendar')</h4>
        <hr>
      <div id="datetimepicker12"></div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-12">
        <div class="title text-center" style="background-color: green; padding: 5px; color: #fff;">
          <h3>@lang('home.event_schedules')</h3>
        </div>
        <div class="agenda">
            <div class="table-responsive">
                <table class="table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Single event in a single day -->
                        <tr>
                            <td class="agenda-date" class="active" rowspan="1">
                                <div class="dayofmonth">26</div>
                                <div class="dayofweek">Saturday</div>
                                <div class="shortdate text-muted">July, 2014</div>
                            </td>
                            <td class="agenda-time">
                                5:30 AM
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                                    Fishing
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Multiple events in a single day (note the rowspan) -->
                        <tr>
                            <td class="agenda-date" class="active" rowspan="3">
                                <div class="dayofmonth">24</div>
                                <div class="dayofweek">Thursday</div>
                                <div class="shortdate text-muted">July, 2014</div>
                            </td>
                            <td class="agenda-time">
                                8:00 - 9:00 AM 
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    Doctor's Appointment
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="agenda-time">
                                10:15 AM - 12:00 PM 
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    Meeting with executives
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="agenda-time">
                                7:00 - 9:00 PM
                            </td>
                            <td class="agenda-events">
                                <div class="agenda-event">
                                    Aria's dance recital
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
    {{-- <div class="employee-atantion">
      <h3>Today's employee attendance</h3>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <th>#</th>
              <th>Teacher's Name</th>
              <th class="text-center">Status</th>
              <th class="text-center">In time</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Hamidur Rahman</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Shakil Ahmed</td>
              <td class="text-danger text-center">Late</td>
              <td class="text-center"><strong>09:30 AM</strong></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Rabyea Akter</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Asif Nazrul</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>5</td>
              <td>KM Khander</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Nasrin Sultana</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Shakir Ullah</td>
              <td class="text-danger text-center">Absent</td>
              <td class="text-center"><strong>10:00 AM</strong></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Rupa Akter</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Nasir Uddin</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
            <tr>
              <td>9</td>
              <td>Mehedi Hasan</td>
              <td class="text-danger text-center">Late</td>
              <td class="text-center"><strong>09:40 AM</strong></td>
            </tr>
            <tr>
              <td>10</td>
              <td>Jakia Momo</td>
              <td class="text-success text-center">Present</td>
              <td class="text-center"><strong>09:00 AM</strong></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> --}}
  </div>
  <div class="col-md-6">
    <div class="hmnotice-board">
      <h3>@lang('home.notice_board')</h3>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <th>Date</th>
              <th>Subject</th>
              <th class="text-center">Notice Follower</th>
              <th class="text-center">View Details</th>
          </tr>
          <tr>
            <td>21/06/2018</td>
            <td>Mid Term Exam Routine</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          <tr>
            <td>12/08/2018</td>
            <td>test</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          <tr>
            <td>28/08/2018</td>
            <td>Mid Term Exam Result</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          <tr>
            <td>27/10/2018</td>
            <td>Test3</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          <tr>
            <td>16/12/2018</td>
            <td>Victory Day</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          <tr>
            <td>25/12/2018</td>
            <td>Christmas Day</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          <tr>
            <td>30/12/2018</td>
            <td>National Election BD</td>
            <td class="text-center">
              <div class="ntflow">
              <a href="#" class="btn btn-primary btn-sm">all</a>
            </div>
          </td>
            <td class="text-center">
              <div class="ntview">
              <a href="#" class="btn btn-success btn-sm"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>view details</a>
            </div>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endhasrole

{{-- 
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
        <div class="count">2500</div>
        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
        <div class="count">123.50</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
        <div class="count green">2,500</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
        <div class="count">4,567</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
        <div class="count">2,315</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
</div> --}}


@endsection