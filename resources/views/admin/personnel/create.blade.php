
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
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personnel Information</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                    <div class="form-group  col-lg-3">
                                        <label for="firstname">Firstname <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control {{ $errors->has('firstname')  ? 'is-invalid' : ''}}" id="firstname" name="firstname" placeholder="Enter Firstname" value="{{ old('firstname') }}">
                                        @if($errors->has('firstname'))
                                            <small  class="form-text text-danger">
                                                {{ $errors->first('firstname') }} </small>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-3 ">
                                            <label for="middlename">Middlename <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control {{ $errors->has('middlename')  ? 'is-invalid' : ''}} " id="middlename" name="middlename" placeholder="Enter Middlename" value="{{ old('middlename') }}">
                                            @if($errors->has('middlename'))
                                            <small  class="form-text text-danger">{{ $errors->first('middlename') }} </small>
                                            @endif
                                    </div>

                                    <div class="form-group col-lg-3">
                                        <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control {{ $errors->has('lastname')  ? 'is-invalid' : ''}}" id="lastname" name="lastname" placeholder="Enter Lastname" value="{{ old('lastname') }}">

                                        @if($errors->has('lastname'))
                                            <small  class="form-text text-danger">
                                            {{ $errors->first('lastname') }} </small>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-3">
                                        <label for="suffix">Suffix <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control {{ $errors->has('suffix')  ? 'is-invalid' : ''}}" id="suffix" name="suffix" placeholder="e.g Jr." value="{{ old('suffix') }}">
                                        @if($errors->has('suffix'))
                                            <small  class="form-text text-danger">
                                            {{ $errors->first('suffix') }} </small>
                                        @endif
                                    </div>
                            </div>







                            {{-- <hr> --}}

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="date_of_birth">Date of birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control  {{ $errors->has('date_of_birth')  ? 'is-invalid' : ''}}" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                        @if($errors->has('date_of_birth'))
                                            <small  class="form-text text-danger">
                                            {{ $errors->first('date_of_birth') }} </small>
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
                                    <select name="province" id="province" class="form-control {{ $errors->has('province')  ? 'is-invalid' : ''}}">
                                        <option value="Surigao del sur">Surigao del Sur</option>
                                    </select>
                                    @if($errors->has('province'))
                                        <small  class="form-text text-danger">
                                        {{ $errors->first('province') }} </small>
                                    @endif
                             </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <select name="city" id="cities" class="form-control {{ $errors->has('city')  ? 'is-invalid' : ''}}">
                                            @foreach($cities as $city)
                                                @if(old('city'))
                                                    <option {{ old('city') == $city->city_zipcode ? 'selected' : '' }} value="{{ $city->zip_code }}"> {{ $city->name }}</option>
                                                @else
                                                    <option value="{{ $city->zip_code }}"> {{ $city->name }}</option>
                                                @endif
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
                                            @foreach($barangays as $barangay)
                                            @if(old('barangay'))
                                                <option {{ old('barangay') == $barangay->id ? 'selected' : '' }} data-zip-code="{{ $barangay->city_zip_code }}" value="{{ $barangay->id }}"> {{ $barangay->name }}</option>
                                            @else
                                                <option data-zip-code="{{ $barangay->city_zip_code }}" value="{{ $barangay->id }}"> {{ $barangay->name }}</option>
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
                                    <label for="puroksub">Purok/Subdivision/Street <span class="text-danger">*</span></label>
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
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="status" class="form-control {{ $errors->has('status')  ? 'is-invalid' : ''}}">
                                            @foreach($civil_status as $status)
                                                <option value={{ $status }}>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                            </div>

                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control {{ $errors->has('email')  ? 'is-invalid' : ''}}" id="email" name="email" placeholder="Optional" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Cellphone Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('phone_number')  ? 'is-invalid' : ''}}" id="phone_number" name="phone_number" placeholder="" value="{{ old('phone_number') }}">
                            </div>

                            <div class="form-group">
                                <label for="">Image <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input {{ $errors->has('image')  ? 'is-invalid' : ''}}" id="imageFile" >
                                    <label class="custom-file-label" for="imageFile">Choose file...</label>
                                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                </div>
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
