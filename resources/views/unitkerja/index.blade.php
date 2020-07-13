
@extends('layouts/contentLayoutMaster')

@section('title', 'Unit Kerja')
@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')
<div class="row">
  <div style="padding-left: 20px; padding-bottom: 10px;">
    <a href="{{ route('unitkerja.create') }}"> <button type="button" class="btn btn-primary">Tambah</button></a>
    <br/>
  </div>
  </div>
  <!-- Zero configuration table -->
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="table-responsive">
                              <table class="table zero-configuration">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($unitkerjas as $unitkerja)
                                    <tr>
                                      <td>
                                        {{ $unitkerja->unk_nm }}
                                      </td>
                                      <td>
                                        <a href="{{ route('unitkerja.edit', ['id' => $unitkerja->id ]) }}"class="btn btn-xs btn-info">Edit</a>
                                      </td>
                                      <td>
                                        <a href="{{ route('unitkerja.delete', ['id' => $unitkerja->id ]) }}"class="btn btn-xs btn-danger">Delete</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
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
