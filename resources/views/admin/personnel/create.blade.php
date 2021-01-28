
@extends('admin.layouts.app')
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
    <form method="POST" enctype="multipart/form-data" action="{{ route('personnel.store') }}" >
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
                                    <label for="province">Province<span class="text-danger">*</span></label>
                                    <select name="province" id="province" class="form-control"></select>
                             </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <select name="city" id="cities" class="form-control {{ $errors->has('city')  ? 'is-invalid' : ''}}">
                                            <option  selected disabled>Please Select City</option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->zip_code }}"> {{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('city'))
                                        <small  class="form-text text-danger">
                                        {{ $errors->first('city') }} </small>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="barangay">Barangay<span class="text-danger">*</span></label>
                                        <select name="barangay" id="barangay" class="form-control {{ $errors->has('barangay')  ? 'is-invalid' : ''}}">
                                            <option  selected disabled>Please Select Barangay</option>
                                            @foreach($barangays as $barangay)
                                                <option data-zip-code="{{ $barangay->city_zip_code }}" value="{{ $barangay->id }}"> {{ $barangay->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('barangay'))
                                        <small  class="form-text text-danger">
                                        {{ $errors->first('barangay') }} </small>
                                        @endif
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="puroksub">Purok/Subdivision/Street<span class="text-danger">*</span></label>
                                     <textarea name="puroksub" id="puroksub" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="gender">Sex <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control {{ $errors->has('gender')  ? 'is-invalid' : ''}}">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                    <label for="status">Status<span class="text-danger">*</span></label>
                                        <select name="status" id="status" class="form-control {{ $errors->has('status')  ? 'is-invalid' : ''}}">
                                             <option value="Single">Single</option>
                                             <option value="Married">Married</option>
                                             <option value="Married">Single Parent</option>
                                             <option value="Married">Separated</option>
                                             <option value="Married">Widowed</option>
                                             <option value="Married">Annulled</option>
                                        </select>
                            </div>

                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control {{ $errors->has('email')  ? 'is-invalid' : ''}}" id="email" name="email" placeholder="Optional" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="cpnumber">Cellphone Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('cpnumber')  ? 'is-invalid' : ''}}" id="cpnumber" name="cpnumber" placeholder="" value="{{ old('cpnumber') }}">
                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Add New Personnel</button>
                                @if(Session::has('success'))
                                    <a href="{{ route('admin.print.qr', Session::get('success')) }}" class="btn btn-success">Generate</a>
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
@push('page-scripts')

<script>
    $(document).ready(function () {
        let barangayOptionAll = [];
        $('#cities').change(function (e) {
            let cityZipCode = e.target.value;
            if(barangayOptionAll.length === 0) {
                barangayOptionAll = $('#barangay option');
            }


            barangayOptionAll.filter((index, barangayOption) => {

                if(barangayOption.getAttribute('data-zip-code') == cityZipCode) {
                    $('#barangay').append(barangayOption);
                } else {
                    $('#barangay').val($(barangayOption).remove());
                }
            });

        });
    });
</script>
@endpush
@endsection
