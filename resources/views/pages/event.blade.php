@extends('layouts/contentLayoutMaster')

@section('title', 'Event')

@section('vendor-style')
{{-- vendor css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <h2>All Events</h2>
    </div>
</div>
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Zero configuration</h4> -->
                    <div class="custom-control custom-switch custom-switch-info mr-2 mb-1">
                        <p class="mb-0">Live Mode</p>
                        <input type="checkbox" class="custom-control-input" id="customSwitch6">
                        <label class="custom-control-label" for="customSwitch6"></label>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <!-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>EVENT INFO</th>
                                        <th>DETECTION IP</th>
                                        <th>DETECTION Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Web Traffic Audit</td>
                                        <td>URL Access By megatron.corp.trigeo.com</td>
                                        <td>192.168.168.10</td>
                                        <td>2020-07-02 11:03</td>
                                    </tr>
                                    <tr>
                                        <td>Web Traffic Audit</td>
                                        <td>URL Access By orion.corp.trigeo.com</td>
                                        <td>192.168.168.10</td>
                                        <td>2020-07-02 11:03</td>
                                    </tr>
                                    <tr>
                                        <td>Web Traffic Audit</td>
                                        <td>URL Access By orion.corp.trigeo.com</td>
                                        <td>192.168.168.10</td>
                                        <td>2020-07-02 11:03</td>
                                    </tr>
                                    <tr>
                                        <td>Web Traffic Audit</td>
                                        <td>URL Access By 192.168.168.10</td>
                                        <td>192.168.167.1</td>
                                        <td>2020-07-02 11:03</td>
                                    </tr>
                                    <tr>
                                        <td>Policy Scope Change</td>
                                        <td>Privilege assigned to "\LAGON$"</td>
                                        <td>WALLACE</td>
                                        <td>2020-07-02 11:03</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NAME</th>
                                        <th>EVENT INFO</th>
                                        <th>DETECTION IP</th>
                                        <th>DETECTION Time</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script>
@endsection