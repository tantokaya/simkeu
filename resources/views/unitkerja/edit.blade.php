@extends('layouts/contentLayoutMaster')

@section('title', 'Ubah Unit Kerja')

@section('content')
<!-- Basic Inputs start -->
<section id="basic-input">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <!-- <h4 class="card-title">Input Golongan</h4> -->
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-6 col-md-6 col-12 mb-1">
                            <form action="{{ route('unitkerja.update', ['id' => $unitkerja->id]) }}" method="POST">
                              {{ csrf_field() }}
                              <fieldset class="form-group">
                                  <label>Nama Unit</label>
                              <input type="text" class="form-control" name="nama" value="{{ $unitkerja->unk_nm }}" placeholder="Ubah Nama Unit">
                              </fieldset>
                              <button class="btn btn-primary" type="submit"><i class="feather icon-edit"></i> Ubah</button>
                              <a href="{{ route('unitkerja') }}" class="btn btn-outline-warning"> <i class="feather icon-corner-up-left"></i> Kembali</a>
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
@section('page-script')
        <!-- Page js files -->
        <!-- <script src="{{ asset(mix('js/scripts/forms/form-tooltip-valid.js')) }}"></script> -->
@endsection
