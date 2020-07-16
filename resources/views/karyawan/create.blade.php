@extends('layouts/contentLayoutMaster')

@section('title', 'Input Karyawan')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('content')
<!-- Basic Inputs start -->
<section id="basic-input">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 xclass="card-title">Form Input Data Karyawan</h4> 
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <form action="{{ route('karyawan.store') }}" method="POST">
                              {{ csrf_field() }}
                              <div class="form-group row">
                                  <div class="col-md-2">
                                    <span>NIP</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" class="form-control" name="nip" placeholder="Masukan NIP" autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>NIP Lama</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" class="form-control" name="nip_lama" placeholder="Masukan NIP Lama">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Nama Karyawan</span>
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Karyawan" autocomplete="off">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Jabatan</span>
                                  </div>
                                  <div class="col-md-4">
                                    <input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Tgl Lahir</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type='text' name="tgl_lahir" class="form-control pickadate" placeholder="Masukan tgl lahir"/>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>TMT CPNS</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control pickadate" name="tmt_cpns" placeholder="Masukan TMT CPNS" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>TMT PNS</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control pickadate" name="tmt_pns" placeholder="Masukan TMT PNS">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Golongan Ruang</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="golongan">
                                        @foreach($golongans as $golongan)
                                        <option value="{{ $golongan->id}}">{{ $golongan->gol_nm }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Pendidikan Terakhir</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="pendidikan">
                                        @foreach($pendidikans as $pendidikan)
                                        <option value="{{ $pendidikan->id}}">{{ $pendidikan->pendidikan_nm }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Unit Kerja</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="unitkerja">
                                        @foreach($unitkerjas as $unitkerja)
                                        <option value="{{ $unitkerja->id}}">{{ $unitkerja->unk_nm }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Status Kerja</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="status">
                                        @foreach($statuses as $sta)
                                        <option value="{{ $sta->id}}">{{ $sta->sta_nm }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Status Keaktifan</span>
                                  </div>
                                  <div class="col-md-2">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block mr-2">
                                          <fieldset>
                                           <div class="vs-radio-con">
                                              <input type="radio" name="aktif" checked value="1">
                                              <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                              </span>
                                              <span class="">Active</span>
                                            </div>
                                          </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                          <fieldset>
                                            <div class="vs-radio-con">
                                              <input type="radio" name="aktif" value="0">
                                              <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                              </span>
                                              <span class="">Inactive</span>
                                            </div>
                                          </fieldset>
                                        </li>
                                    </ul>
                                  </div>
                              </div>
                              <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit"><i class="feather icon-save"></i> Simpan</button>
                                <a href="{{ route('karyawan') }}" class="btn btn-outline-warning"> <i class="feather icon-corner-up-left"></i> Kembali</a>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Basic Inputs end -->

<!-- Input Style start -->
@endsection
@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <!-- <script src="{{ asset(mix('js/scripts/forms/form-tooltip-valid.js')) }}"></script> -->
        <script src="{{ asset(mix('js/scripts/pickers/dateTime/pick-a-datetime.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
