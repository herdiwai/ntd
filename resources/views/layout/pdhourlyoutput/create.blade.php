@extends('layout.main')

@section('content')
{{-- <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">NTD Management</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li class="active">Dashboard 1</li>
                </ol>
            </div>
            
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-10">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>MONTH</th>
                                    <th>Week</th>
                                    <th>DAYS</th>
                                    <th>SHIFT</th>
                                    <th>OPERATOR</th>
                                    <th>EQUIPMENT NO</th> 
                                    <th>EQUIPMENT NAME</th>
                                    <th>PROCESS</th>
                                    <th>LINE</th>
                                    <th>CODE</th>
                                    <th>RESPON TIME</th>
                                    <th>START TIME</th>
                                    <th>END TIME</th>
                                    <th>DURATION</th>
                                    <th>DOWNTIME</th>
                                    <th>DESCRIPTION</th>
                                    <th>REPAIR BY</th>
                                    <th>MC ISSUE</th>
                                    <th>ROOT CAUSE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
       
            
        </div>
        {{-- <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="white-box">
                    <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> Site Traffic</h3>
                    <div class="stats-row">
                        <div class="stat-item">
                            <h6>Overall Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>15.40%</b></div>
                        <div class="stat-item">
                            <h6>Day</h6> <b>5.50%</b></div>
                    </div>
                    <div id="sparkline8"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box">
                    <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% High then last month</small>Site Traffic</h3>
                    <div class="stats-row">
                        <div class="stat-item">
                            <h6>Overall Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>15.40%</b></div>
                        <div class="stat-item">
                            <h6>Day</h6> <b>5.50%</b></div>
                    </div>
                    <div id="sparkline9"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box">
                    <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>Site Traffic</h3>
                    <div class="stats-row">
                        <div class="stat-item">
                            <h6>Overall Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>15.40%</b></div>
                        <div class="stat-item">
                            <h6>Day</h6> <b>5.50%</b></div>
                    </div>
                    <div id="sparkline10"></div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Site Visits</h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div id="world-map-marker" style="height: 490px;"></div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <ul class="country-state slimscrollcountry">
                                <li>
                                    <h2>6350</h2> <small>From India</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>3250</h2> <small>From UAE</small>
                                    <div class="pull-right">98% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%;"> <span class="sr-only">98% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>1250</h2> <small>From Australia</small>
                                    <div class="pull-right">75% <i class="fa fa-level-down text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>1350</h2> <small>From USA</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>350</h2> <small>From UK</small>
                                    <div class="pull-right">68% <i class="fa fa-level-down text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:68%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                    <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span>
                                        <br/>
                                        <h4>New Users Visits</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                    <div class="chart easy-pie-chart-1" data-percent="65"> <span class="percent">75</span>
                                        <br/>
                                        <h4>Returning Users</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                    <div class="chart easy-pie-chart-3" data-percent="25"> <span class="percent">75</span>
                                        <br/>
                                        <h4>Bounce Rate</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--row -->
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="white-box">
                    <h3 class="box-title">Browser Stats</h3>
                    <ul class="basic-list">
                        <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                        <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                        <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                        <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                        <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                        <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="white-box">
                    <h3 class="box-title">CPU LOAD</h3>
                    <div class="stats-row">
                        <div class="stat-item">
                            <h6>Usage</h6> <b>60GB</b></div>
                        <div class="stat-item">
                            <h6>Space</h6> <b>320 GB</b></div>
                        <div class="stat-item">
                            <h6>CPU</h6> <b>50%</b></div>
                    </div>
                    <div style="height: 280px;">
                        <div id="placeholder" class="demo-placeholder"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="white-box">
                    <div class="user-bg"> <img src="../plugins/images/large/img1.jpg" alt="user" style="100%">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../plugins/images/users/genu.jpg"></a>
                                <h4 class="text-white">User Name</h4>
                                <h5 class="text-white">info@myadmin.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-purple"><i class="ti-facebook"></i></p>
                                <h1>258</h1>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-blue"><i class="ti-twitter"></i></p>
                                <h1>125</h1>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-danger"><i class="ti-dribbble"></i></p>
                                <h1>556</h1>
                            </div>
                            <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                <div class="stat-item">
                                    <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- /.row -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>Layout Options</b></li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" class="fxsdr">
                                    <label for="checkbox2"> Fix Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> Toggle Sidebar </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                            <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div> --}}
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    {{-- <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer> --}}
</div> 

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">CREATE PDHourlyOutput</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li class="active">Dashboard 1</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Form PDHourlyOutput</h3>
                        <!-- <p class="text-muted m-b-30 font-13"> Tolong pastikan RootCause, Issue & Actionnya jelas* </p> -->
                        <form action="{{ route('pdhourlyoutput.store') }}" class="form" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Production Name</label>
                                <div class="col-10">
                                    <input class="form-control" name="name" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Time</label>
                                <div class="col-10">
                                    <input class="form-control" name="time" type="text" id="example-number-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Target</label>
                                <div class="col-10">
                                    <input class="form-control" name="target" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Output</label>
                                <div class="col-10">
                                    <input class="form-control" name="output" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">ACCM</label>
                                <div class="col-10">
                                    <input class="form-control" name="accm" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" name="date" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Process</label>
                                <div class="col-10">
                                    <input class="form-control" name="process" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Shift</label>
                                <div class="col-10">
                                    <input class="form-control" name="shift" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Lot</label>
                                <div class="col-10">
                                    <input class="form-control" name="lot" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Description</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="deskription" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- MODAL --}}
    {{-- <div class="row">
        <div class="col-md-4">
            <div class="white-box">
                <h3 class="box-title">Responsive model</h3>
                <!-- sample modal content -->
                <!-- /.modal -->
                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Modal Content is Responsive</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="../plugins/images/model.png" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive" />
                <!-- Button trigger modal -->
            </div>
        </div>
    </div> --}}
 {{-- END MODAL --}}
 
    <!-- /#page-wrapper -->
    <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
</div>
@endsection