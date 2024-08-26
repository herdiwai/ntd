@extends('layout.main')

@section('content')

           
    </div>
</div> 

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Production Hourly Output</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <!-- <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a> -->
                    <ol class="breadcrumb">
                        <li><a href="index.html">Production Hourly Output</a></li>
                        <li class="active">Production Hourly Output</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"> <a href="{{ route('pdhourlyoutput.create') }}">Tambah Data</a></button>
                <!-- <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button> -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <!-- <h3 class="box-title m-b-0">Data Table</h3>
                        <p class="text-muted m-b-30">Data table example</p> -->
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NAME</th>
                                        <th>TIME</th>
                                        <th>TARGET</th>
                                        <th>OUTPUT</th>
                                        <th>ACCM</th>
                                        <th>DATE</th>
                                        <th>PROCESS</th> 
                                        <th>SHIFT</th>
                                        <th>LOT</th>
                                        <th>DESKRIPTION</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PDHO as $PDHOutput)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $PDHOutput->name }}</td>
                                            <td>{{ $PDHOutput->time }}</td>
                                            <td>{{ $PDHOutput->target }}</td>
                                            <td>{{ $PDHOutput->output }}</td>
                                            <td>{{ $PDHOutput->accm }}</td>
                                            <td>{{ $PDHOutput->date }}</td>
                                            <td>{{ $PDHOutput->process }}</td>
                                            <td>{{ $PDHOutput->shift }}</td>
                                            <td>{{ $PDHOutput->lot }}</td>
                                            <td>{{ $PDHOutput->deskription }}</td>
                                            <td>
                                                <a href="" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect'> <i class="fas fa-pen"> Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach 
                                </tbody>
                            </table>
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