
@extends('admin.layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.css">
@section('page-small-title','Personnel')
@section('page-title','Edit Establishment')
@section('content')

<section id="basic-alerts">
<form action="{{  route('establishment.edit', $establishment->id) }}" method="POST">
   @csrf
   @method('PUT')
  <div class="row match-height">
      <div class="col-xl-2 col-lg-12"></div>
            <div class="col-xl-8 col-lg-12">
                <div class="mb-2">
                    @if(Session::has('success'))
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">Successfully Updated</div>
                    </div>
                    @endif
                    {{-- @include('templates.error') --}}
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Establishment Information</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Establishment/Office/Store Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Enter Establishment/Office/Store Name" value="{{$establishment->name }}">
                                @if($errors->has('name'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('name') }} </small>
                                @endif
                            </div>

                                <div class="form-group mt-1">
                                    <label for="type">Establishment Type <span class="text-danger">*</span></label>
                                    <select name="type" id="type" class="form-control {{ $errors->has('type')  ? 'is-invalid' : ''}}">
                                        <option value="{{$establishment->type }}" >Please Select Establishment Type</option>
                                        {{-- @foreach($types as $type)
                                            <option value="{{ $type }}"> {{ $type }}</option>
                                        @endforeach --}}
                                        @foreach($types as $type)
                                        @if(!is_null(old('type')))
                                            <option {{ old('type') === $establishment->type ? 'selected' : '' }} value="{{ $establishment->type }}">{{ $establishment->type }}</option>
                                        @else
                                            <option {{ $establishment->type == $type  ? 'selected' : '' }} value="{{ $type }}"> {{ $type }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('type'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('type') }} </small>
                                    @endif
                                </div>
                            <div class="form-group mt-1">
                                <label for="address">Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('address') ? 'is-invalid' : '' }}" id="address" name="address" placeholder="Enter Address" value="{{$establishment->address }}">
                                @if($errors->has('address'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('address') }} </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="contact_no">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('contact_no') ? 'is-invalid' : '' }}" id="contact_no" name="contact_no" placeholder="Enter Contact Number" value="{{$establishment->contact_no }}">
                                @if($errors->has('contact_no'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('contact_no') }} </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="geo_tag_location">Geo Tag Location <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('geo_tag_location') ? 'is-invalid' : '' }}" id="geo_tag_location" name="geo_tag_location" placeholder="Enter Geo Tag Location">
                                @if($errors->has('geo_tag_location'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('geo_tag_location') }} </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="province">Province <span class="text-danger">*</span></label>
                                <select name="province" id="province" class="form-control">
                                    <option>Surigao del Sur</option>
                                </select>
                                @if($errors->has('province'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('province') }} </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <select id="city" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}">
                                            @foreach($cities as $city)
                                                @if(!is_null(old('city')))
                                                    <option {{ old('city') === $city->zip_code ? 'selected' : '' }} value="{{ $city->zip_code }}">{{ $city->name }}</option>
                                                @else
                                                    <option {{ $establishment->city_zip_code == $city->zip_code ? 'selected' : '' }} value="{{ $city->zip_code }}">{{ $city->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if($errors->has('city'))
                                            <small  class="form-text text-danger">
                                            {{ $errors->first('city') }} </small>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="barangay">Barangay <span class="text-danger">*</span></label>
                                        <select name="barangay"  id="barangay" class="form-control {{ $errors->has('barangay') ? 'is-invalid' : '' }}">
                                            @foreach($barangay as $barangay)
                                            @if(!is_null(old('barangay')))
                                                <option data-zip-code="{{ $barangay->city_zip_code }}" {{ old('barangay') === $barangay->id ? 'selected' : '' }} value="{{ $barangay->id }}">{{ $barangay->name }}</option>
                                            @else
                                                <option data-zip-code="{{ $barangay->city_zip_code }}" {{ $establishment->barangay_id === $barangay->id ? 'selected' : '' }} value="{{ $barangay->id }}">{{ $barangay->name }}</option>
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
                            <div class="float-right">
                                <button type="submit" class="btn btn-success">Update Establishment</button>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-12"></div>
    </div>
    </form>
</section>
@endsection
