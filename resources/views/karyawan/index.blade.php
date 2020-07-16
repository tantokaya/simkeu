
@extends('layouts/contentLayoutMaster')

@section('title', 'Data Karyawan')
@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/invoice.css')) }}">
@endsection

@section('content')
<div class="row invoice-print">
  <div style="padding-left: 20px; padding-bottom: 10px;">
    <a href="{{ route('karyawan.create') }}"><button type="button" class="btn btn-outline-primary round waves-effect waves-light"><i class="feather icon-plus-circle"></i> Tambah</button></a>
    <button type="button" class="btn btn-outline-black round waves-effect waves-light" data-toggle="modal"
    data-target="#karyawanModalCenter"><i class="feather icon-printer"></i> Cetak</button>

    {{-- Modal --}}
    <div class="modal fade" id="karyawanModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
      role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
          <h5 class="modal-title " id="exampleModalCenterTitle">::Data Karyawan::</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
        <div class="modal-body">
          <section class="card invoice-page">
            
          </section>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal">Exit</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal --}}
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
                                          <th width="10%"  class="text-center">NIP Lama</th>
                                          <th width="50%"  class="text-center">Nama</th>
                                          <th class="text-center">Edit</th>
                                          <th class="text-center">Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($karyawans as $karyawan)
                                    <tr>
                                      <td>{{ $karyawan->nip }}</td>
                                      <td>{{ $karyawan->nip_lama }}</td>
                                      <td>{{ $karyawan->nama }}</td>
                                      <td>
                                        <a href="{{ route('karyawan.edit', ['id' => $karyawan->id ]) }}"class="btn btn-sm btn-info round"><i class="feather icon-edit"></i> Ubah</a>
                                      </td>
                                      <td>
                                        <a href="{{ route('karyawan.delete', ['id' => $karyawan->id ]) }}"class="btn btn-sm btn-danger round" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="feather icon-trash-2"></i> Hapus</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th width="10%" class="text-center">NIP</th>
                                        <th width="10%"  class="text-center">NIP Lama</th>
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
