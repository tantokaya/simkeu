@extends('layouts/contentLayoutMaster')

@section('title', 'Input Tunjangan')

@section('content')
<!-- Basic Inputs start -->
<section id="basic-input">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <!-- <h4 class="card-title">Input Tunjangan</h4> -->
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-6 col-md-6 col-12 mb-1">
                            <form action="{{ route('tunjangan.store') }}" method="POST">
                              {{ csrf_field() }}
                              <fieldset class="form-group">
                                  <label>Tunjangan</label>
                                  <input type="text" class="form-control" name="nama" placeholder="Masukan nominal tunjangan">
                              </fieldset>
                              <button class="btn btn-success" type="submit">
                                Simpan
                              </button>
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
