@extends('municipal.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Add New Personnel')
@section('content')
<div class="mb-2">
    @if(Session::has('success'))
    <div class="card bg-success text-white shadow">
        <div class="card-body">Successfully add new personnel.</div>
    </div>
    @endif
    {{-- @include('templates.error') --}}
</div>
<section id="basic-alerts">
    <form method="POST" enctype="multipart/form-data" action="{{ route('municipal-personnel.store') }}" >
    @csrf
  <div class="row match-height">
      <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personnel Image</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Image <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input {{ $errors->has('image')  ? 'is-invalid' : ''}}" id="imageFile" >
                                    <label class="custom-file-label" for="imageFile">Choose file...</label>
                                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personnel Information</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="rapid_pass_no">Rapid Pass No. <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('rapid_pass_no')  ? 'is-invalid' : ''}}" id="rapid_pass_no" name="rapid_pass_no" placeholder="Rapid Pass No" value="{{ old('rapid_pass_no') }}">
                                @if($errors->has('rapid_pass_no'))
                                <small  class="form-text text-danger">
                                    {{ $errors->first('rapid_pass_no') }} </small>
                            @endif


                            <div class="form-group mt-1">
                            <label for="firstname">Firstname <span class="text-danger">*</span></label>
                            <input type="text" class="form-control {{ $errors->has('firstname')  ? 'is-invalid' : ''}}" id="firstname" name="firstname" placeholder="Enter Firstname" value="{{ old('firstname') }}">
                            @if($errors->has('firstname'))
                                <small  class="form-text text-danger">
                                    {{ $errors->first('firstname') }} </small>
                            @endif

                            </div>

                            <div class="form-group">
                                <label for="middlename">Middlename <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('middlename')  ? 'is-invalid' : ''}} " id="middlename" name="middlename" placeholder="Enter Middlename" value="{{ old('middlename') }}">
                                @if($errors->has('middlename'))
                                <small  class="form-text text-danger">
                                    {{ $errors->first('middlename') }} </small>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('lastname')  ? 'is-invalid' : ''}}" id="lastname" name="lastname" placeholder="Enter Lastname" value="{{ old('lastname') }}">

                                @if($errors->has('lastname'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('lastname') }} </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="suffix">Suffix <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('suffix')  ? 'is-invalid' : ''}}" id="suffix" name="suffix" placeholder="e.g Jr." value="{{ old('suffix') }}">
                                @if($errors->has('suffix'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('suffix') }} </small>
                                @endif
                            </div>



                            {{-- <hr> --}}

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="date_of_birth">Date of birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control  {{ $errors->has('date_of_birth')  ? 'is-invalid' : ''}}" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                        @if($errors->has('date_of_birth'))
                                            <small  class="form-text text-danger">
                                            {{ $errors->first('date_of_birth') }} </small>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="rapid_test_issued">Rapid test issued <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control {{ $errors->has('rapid_test_issued')  ? 'is-invalid' : ''}}" id="rapid_test_issued" name="rapid_test_issued"  value="{{ old('rapid_test_issued') }}">
                                        @if($errors->has('rapid_test_issued'))
                                            <small  class="form-text text-danger">
                                            {{ $errors->first('rapid_test_issued') }} </small>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <textarea name="address" id="address" class="form-control {{ $errors->has('address')  ? 'is-invalid' : ''}}" rows="3">{{ old('address') }}</textarea>
                                @if($errors->has('address'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('address') }} </small>
                                @endif
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="barangay">Barangays <span class="text-danger">*</span></label>
                                        <select name="barangay" id="barangays" class="form-control {{ $errors->has('barangay')  ? 'is-invalid' : ''}}">
                                            <option  selected disabled>Please Select Baragay</option>
                                            @foreach($barangays as $barangay)
                                                @if(!is_null(old('barangay')))
                                                    <option {{ old('barangay') == $barangay->id ? 'selected' : ''}} value="{{ $barangay->id }}" name="barangay" >{{ $barangay->name }}</option>
                                                @else
                                                    <option value="{{ $barangay->id }}" name="barangay" >{{ $barangay->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if($errors->has('barangay'))
                                        <small  class="form-text text-danger">
                                        {{ $errors->first('barangay') }} </small>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender">Sex <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control {{ $errors->has('gender')  ? 'is-invalid' : ''}}">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @if($errors->has('gender'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('gender') }} </small>
                                @endif
                            </div>
                        </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Add New Personnel</button>
                                @if(Session::has('success'))
                                    <a href="{{ route('municipal.print.qr', Session::get('success')) }}" class="btn btn-success">Generate</a>
                                @endif
                            </div>

                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>
@endsection
{{-- @extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Add New Personnel')
@section('content')
<div class="mb-2">
    @if(Session::has('success'))
    <div class="card bg-success text-white shadow">
        <div class="card-body">
             {{ Session::get('success') }} <a target="_blank" href="{{ asset('/storage/qr_images/' . session()->pull('qr_name')) }}" class="font-weight-bold text-white">Click to preview QR Code.</a>
        </div>
    </div>
    @endif
</div> --}}
{{-- @if(Session::has('success'))
    <div class="card bg-success text-white shadow mb-1">
        <div class="card-body">
                {{ Session::get('success') }} <a target="_blank" href="{{ asset('/storage/qr_images/' . session()->pull('qr_name')) }}" class="font-weight-bold text-white">Click to preview QR Code.</a>
        </div>
    </div>
@endif
<div class="card" >
    <div class="card-body">
      <form method="POST" enctype="multipart/form-data" action="{{ route('municipal-personnel.store') }}" >
          @csrf
        <div class="form-group">
          <label for="firstname">Firstname</label>
          <input type="text" class="form-control {{ $errors->has('firstname')  ? 'is-invalid' : ''}}" id="firstname" name="firstname" placeholder="Enter Firstname" value="{{ old('firstname') }}">
          @if($errors->has('firstname'))
            <small  class="form-text text-danger">
                {{ $errors->first('firstname') }} </small>
         @endif

        </div>

        <div class="form-group">
            <label for="middlename">Middlename</label>
            <input type="text" class="form-control {{ $errors->has('middlename')  ? 'is-invalid' : ''}} " id="middlename" name="middlename" placeholder="Enter Middlename" value="{{ old('middlename') }}">
            @if($errors->has('middlename'))
            <small  class="form-text text-danger">
                {{ $errors->first('middlename') }} </small>
         @endif
        </div>

        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control {{ $errors->has('lastname')  ? 'is-invalid' : ''}}" id="lastname" name="lastname" placeholder="Enter Lastname" value="{{ old('lastname') }}">

            @if($errors->has('lastname'))
                <small  class="form-text text-danger">
                {{ $errors->first('lastname') }} </small>
            @endif
        </div>

        <div class="form-group">
            <label for="suffix">Suffix</label>
            <input type="text" class="form-control {{ $errors->has('suffix')  ? 'is-invalid' : ''}}" id="suffix" name="suffix" placeholder="e.g Jr." value="{{ old('suffix') }}">
            @if($errors->has('suffix'))
                <small  class="form-text text-danger">
                {{ $errors->first('suffix') }} </small>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control {{ $errors->has('address')  ? 'is-invalid' : ''}}" rows="3">{{ old('address') }}</textarea>
            @if($errors->has('address'))
                <small  class="form-text text-danger">
                {{ $errors->first('address') }} </small>
            @endif
        </div>

        <hr>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-12">
                    <label for="barangay">Barangay</label>
                    <select  name="barangay" id="barangays" class="form-control">
                        @foreach($barangays as $barangay)
                            <option {{ old('barangay') == $barangay->id ? 'selected' : '' }} value="{{ $barangay->id }}">{{ $barangay->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


        </div>

        <hr>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-6">
                    <label for="date_of_birth">Date of birth</label>
                    <input type="date" class="form-control  {{ $errors->has('date_of_birth')  ? 'is-invalid' : ''}}" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                    @if($errors->has('date_of_birth'))
                        <small  class="form-text text-danger">
                        {{ $errors->first('date_of_birth') }} </small>
                    @endif
                </div>

                <div class="col-lg-6">
                    <label for="rapid_test_issued">Rapid test issued</label>
                    <input type="date" class="form-control {{ $errors->has('rapid_test_issued')  ? 'is-invalid' : ''}}" id="rapid_test_issued" name="rapid_test_issued"  value="{{ old('rapid_test_issued') }}">
                    @if($errors->has('rapid_test_issued'))
                        <small  class="form-text text-danger">
                        {{ $errors->first('rapid_test_issued') }} </small>
                    @endif
                </div>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <label for="">Image <small class="text-primary">(Optional)</small></label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="imageFile" >
                <label class="custom-file-label" for="imageFile">Choose file...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
        </div>

        <div class="float-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div class="clearfix"></div>
      </form>
    </div>
  </div> --}}
{{-- @endsection --}}
