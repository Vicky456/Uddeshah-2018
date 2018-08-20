@extends('layouts.adminPage')

@section('header')
    @include('admin.header')
@endsection

@section('navbar')
    @include('admin.navBar')
@endsection

@section('content')
    <div class="p-a white lt box-shadow">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="m-b-0 _300">Welcome to Uddeshah</h4>
                <small class="text-muted">dashboard for you {{\Illuminate\Support\Facades\Auth::user()->name}}</small>
            </div>

        </div>
    </div>
    <div class="padding">
        <div class="row">

            <div class="col-sm-8 col-md-3">
                <div class="box">
                    <div class="box-header">
                        <h3>Status</h3>
                        <small>Your Events status</small>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>

                            <th>Events Name</th>
                            <th style="width:70px;">Counts</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>App downloads</td>
                            <td class="text-success">
                                <i class="fa fa-level-up"></i> 40%
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3>Events Tasks</h3>
                        <small>20 finished, 5 remaining</small>
                    </div>

                    <div class="box-body">
                        <div class="streamline b-l m-l">
                            <div class="sl-item b-success">
                                <div class="sl-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="sl-content">
                                    <div class="sl-date text-muted">8:30</div>
                                    <div>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail about the AP project.</div>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="sl-date text-muted">Sat, 5 Mar</div>
                                    <div>Prepare for presentation</div>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="sl-date text-muted">Sun, 11 Feb</div>
                                    <div><a href="" class="text-info">Jessi</a> assign you a task <a href="" class="text-info">Mockup Design</a>.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-5">
                <div class="box">
                    <div class="box-header">
                        <h3>Rainbow bar</h3>
                        <small class="block text-muted">customizable</small>
                    </div>
                    <div class="box-body">
                        <div ui-jp="chart" ui-options="{

              calculable: true,
              grid: {
                  borderWidth: 0
              },
              xAxis: [
                  {
                      type: 'category',
                      show: false,
                      data: ['Line', 'Bar', 'Scatter', 'K', 'Pie', 'Radar', 'Chord', 'Force', 'Map', 'Gauge', 'Funnel']
                  }
              ],
              yAxis: [
                  {
                      type: 'value',
                      show: false
                  }
              ],
              series: [
                  {
                      name: 'Echarts Samples',
                      type: 'bar',
                      itemStyle: {
                          normal: {
                              color: function(params) {
                                  var colorList = [
                                    '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                                     '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                                     '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                                  ];
                                  return colorList[params.dataIndex]
                              },
                              label: {
                                  show: true,
                                  position: 'top',
                                  formatter: '{b}\n{c}'
                              }
                          }
                      },
                      data: [12,21,10,4,12,5,6,5,25,23,7]
                  }
              ]
            }" style="height:300px" >
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection


@section('footer')

@endsection