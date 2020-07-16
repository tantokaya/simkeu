@extends('layouts/contentLayoutMaster')

@section('title', 'Ubah Gaji Karyawan')

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
                  <h4 xclass="card-title">Form Ubah Data Gaji Karyawan</h4> 
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <form action="{{ route('gaji.update', ['id' => $gaji->id]) }}" method="POST">
                              {{ csrf_field() }}
                              <div class="form-group row">
                                  <div class="col-md-3">
                                    <span>Bulan</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="bulan" autofocus>
                                      @foreach($bulans as $data)
                                      @if($data->bulan_kd == $gaji->bulan)
                                            <option value="{{ $data->bulan_kd }}" selected>{{ $data->bulan_nm }}</option>
                                        @else
                                            <option value="{{ $data->bulan_kd }}">{{ $data->bulan_nm }}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tahun</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="tahun">
                                      @foreach($tahuns as $data)
                                      @if($data->tahun == $gaji->tahun)
                                            <option value="{{ $data->tahun }}" selected>{{ $data->tahun }}</option>
                                        @else
                                            <option value="{{ $data->tahun }}">{{ $data->tahun }}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Nama Karyawan</span>
                                  </div>
                                  <div class="col-md-6">
                                    <select class="select2 form-control" name="nama">
                                      @foreach($karyawans as $data)
                                      @if($data->nip == $gaji->nip)
                                            <option value="{{ $data->nip }}" selected>{{ $data->nama }}</option>
                                        @else
                                            <option value="{{ $data->nip }}">{{ $data->nama }}</option>
                                        @endif
                                      @endforeach
                                  </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Gaji Pokok Rp.</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ $gaji->gaji_pokok }}" placeholder="Gaji Pokok">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Istri Rp.</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type='text' name="tunj_istri" id="tunj_istri" class="form-control" value="{{ $gaji->tj_istri }}" placeholder="tunjangan istri"/>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Anak Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_anak" id="tunj_anak" value="{{ $gaji->tj_anak }}" placeholder="Tunjangan Anak" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan UPNS Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_upns" id="tunj_upns" value="{{ $gaji->tj_upns }}" placeholder="Tunjangan Upns" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Struktural Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_struk" id="tunj_struk" value="{{ $gaji->tj_struk }}" placeholder="Tunjangan Struktural" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Fungsional Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_fung" id="tunj_fung" value="{{ $gaji->tj_fung }}" placeholder="Tunjangan Fungsional" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Beras Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_beras" id="tunj_beras" value="{{ $gaji->tj_beras }}" placeholder="Tunjangan Beras" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan PPH Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_pph" id="tunj_pph" value="{{ $gaji->tj_pph }}" placeholder="Tunjangan Pph" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Potongan PFK Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="pot_pfk" id="pot_pfk" value="{{ $gaji->pot_pfk }}" placeholder="Potongan PFK" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Potongan PPH Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="pot_pph" id="pot_pph" value="{{ $gaji->pot_pph }}" placeholder="Potongan PPH" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Potongan Tabrum Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="pot_tabrum" id="pot_tabrum" value="{{ $gaji->pot_tabrum }}" placeholder="Potongan Tabrum" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>GajiBersih Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" id="bersih" name="bersih" value="{{ $gaji->bersih }}" readonly/>
                                  </div>
                              </div>
                              
                              <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit"><i class="feather icon-save"></i> Ubah</button>
                                <a href="{{ route('gaji') }}" class="btn btn-outline-warning"> <i class="feather icon-corner-up-left"></i> Kembali</a>
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
        <script src="{{ asset(mix('js/scripts/forms/form-tooltip-valid.js')) }}"></script> 
        <script src="{{ asset(mix('js/scripts/pickers/dateTime/pick-a-datetime.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
