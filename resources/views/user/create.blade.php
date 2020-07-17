@extends('layouts/contentLayoutMaster')

@section('title', 'Input User')

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
                  <h4 xclass="card-title">Form Input Data User</h4> 
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <form action="{{ route('user.store') }}" method="POST">
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
                                    <span>E-mail</span>
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" class="form-control" name="email" placeholder="Masukan E-mail">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Nama Lengkap</span>
                                  </div>
                                  <div class="col-md-4">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama User" autocomplete="off">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Password</span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="col-md-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Password Confirmation</span>
                                  </div>
                                  <div class="col-md-3">
                                    <input type='password' name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password"/>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-2">
                                    <span>Group</span>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="select2 form-control" name="golongan">
                                        @foreach($groups as $data)
                                        <option value="{{ $data->id}}">{{ $data->group_nm }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit"><i class="feather icon-save"></i> Simpan</button>
                                <a href="{{ route('user') }}" class="btn btn-outline-warning"> <i class="feather icon-corner-up-left"></i> Kembali</a>
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
