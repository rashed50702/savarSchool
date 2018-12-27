@extends('layouts.app')
@section('content')
@section('title','Home')
<h3>Dashboard <small>Control Panel</small></h3>
<hr>
<div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box new-bg-aqua">
            <div class="new-inner">
              <h3>3</h3>
              <p>Total Student</p>
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
              <p>Total Teacher</p>
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
              <p>User</p>
            </div>
            <div class="new-icon">
              <i class="fa fa-user"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
</div>
<div class="row">
  <div class="col-md-6">
    <div class="employee-atantion">
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
    </div>
  </div>
  <div class="col-md-6">
    <div class="hmnotice-board">
      <h3>Notice board</h3>
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