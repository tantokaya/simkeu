@extends('layouts/contentLayoutMaster')

@section('title', 'Input Gaji Karyawan')

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
                  <h4 xclass="card-title">Form Input Data Gaji Karyawan</h4> 
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <form action="{{ route('gaji.store') }}" method="POST">
                              {{ csrf_field() }}
                              <div class="form-group row">
                                  <div class="col-md-3">
                                    <span>Bulan</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2-size-md form-control" name="bulan" autofocus>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tahun</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2-size-md form-control" name="tahun">
                                      <option value="2018">2018</option>
                                      <option value="2019">2019</option>
                                      <option value="2020">2020</option>
                                      <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                      <option value="2023">2023</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Nama Karyawan</span>
                                  </div>
                                  <div class="col-md-6">
                                    <select class="select2 form-control" name="nama">
                                      @foreach($karyawans as $karyawan)
                                      <option value="{{ $karyawan->nip}}">{{ $karyawan->nama }}</option>
                                      @endforeach
                                  </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Gaji Pokok Rp.</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" value="0" placeholder="Gaji Pokok">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Istri Rp.</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type='text' name="tunj_istri" id="tunj_istri" class="form-control" value="0" placeholder="tunjangan istri"/>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Anak Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_anak" id="tunj_anak" value="0" placeholder="Tunjangan Anak" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan UPNS Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_upns" id="tunj_upns" value="0" placeholder="Tunjangan Upns" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Struktural Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_struk" id="tunj_struk" value="0" placeholder="Tunjangan Struktural" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Fungsional Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_fung" id="tunj_fung" value="0" placeholder="Tunjangan Fungsional" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan Beras Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_beras" id="tunj_beras" value="0" placeholder="Tunjangan Beras" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Tunjangan PPH Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="tunj_pph" id="tunj_pph" value="0" placeholder="Tunjangan Pph" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Potongan PFK Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="pot_pfk" id="pot_pfk" value="0" placeholder="Potongan PFK" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Potongan PPH Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="pot_pph" id="pot_pph" value="0" placeholder="Potongan PPH" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>Potongan Tabrum Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" name="pot_tabrum" id="pot_tabrum" value="0" placeholder="Potongan Tabrum" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-3">
                                    <span>GajiBersih Rp.</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control" id="bersih" name="bersih" value="0" readonly/>
                                  </div>
                              </div>
                              
                              <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit"><i class="feather icon-save"></i> Simpan</button>
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
