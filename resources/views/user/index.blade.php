
@extends('layouts/contentLayoutMaster')

@section('title', 'Data User')
@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/invoice.css')) }}">
@endsection

@section('content')
<div class="row invoice-print">
  <div style="padding-left: 20px; padding-bottom: 10px;">
    <a href="{{ route('user.create') }}"><button type="button" class="btn btn-outline-primary round waves-effect waves-light"><i class="feather icon-plus-circle"></i> Tambah</button></a>
    
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
                                          <th width="10%" class="text-center">NIP</th>
                                          <th width="10%"  class="text-center">Email</th>
                                          <th width="50%"  class="text-center">Nama</th>
                                          <th class="text-center">Edit</th>
                                          <th class="text-center">Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($users as $data)
                                    <tr>
                                      <td>{{ $data->nip }}</td>
                                      <td>{{ $data->email }}</td>
                                      <td>{{ $data->name }}</td>
                                      <td>
                                        <a href="{{ route('user.edit', ['id' => $data->id ]) }}"class="btn btn-sm btn-info round"><i class="feather icon-edit"></i> Ubah</a>
                                      </td>
                                      <td>
                                        <a href="{{ route('user.delete', ['id' => $data->id ]) }}"class="btn btn-sm btn-danger round" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="feather icon-trash-2"></i> Hapus</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th width="10%" class="text-center">NIP</th>
                                        <th width="10%"  class="text-center">Email</th>
                                        <th width="50%"  class="text-center">Nama</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
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
        <script src="{{ asset(mix('js/scripts/modal/components-modal.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/pages/invoice.js')) }}"></script>
@endsection
