
@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Add New Establishment')
@section('content')
<div class="mb-2">
</div>
<section id="basic-alerts">
    <form method="" action="" >
  <div class="row match-height">
      <div class="col-xl-2 col-lg-12"></div>
            <div class="col-xl-8 col-lg-12">
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
                                <label for="establishment_office_store_name">Establishment/Office/Store Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="establishment_office_store_name" name="establishment_office_store_name" placeholder="Enter Establishment/Office/Store Name" value="">

                                <div class="form-group mt-1">
                                    <label for="city">Establishment Type <span class="text-danger">*</span></label>
                                    <select name="city" id="cities" class="form-control {{ $errors->has('city')  ? 'is-invalid' : ''}}">
                                        <option  selected disabled>Please Select Establishment Type</option>
                                        {{-- @foreach($cities as $city)
                                            <option value="{{ $city->zip_code }}"> {{ $city->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            <div class="form-group mt-1">
                            <label for="address">Address<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="">
                            </div>

                            <div class="form-group">
                                <label for="contact_number">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" value="">
                            </div>

                            <div class="form-group">
                                <label for="geo_tag_location">Geo Tag Location <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="geo_tag_location" name="geo_tag_location" placeholder="Enter Geo Tag Location" value="">
                            </div>
                            <div class="form-group">
                                <label for="city">Province <span class="text-danger">*</span></label>
                                <select name="city" id="cities" class="form-control">
                                    <option>Surigao del Sur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <select name="city" id="cities" class="form-control {{ $errors->has('city')  ? 'is-invalid' : ''}}">
                                            <option  selected disabled>Please Select City</option>
                                            {{-- @foreach($cities as $city)
                                                <option value="{{ $city->zip_code }}"> {{ $city->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="barangay">Barangay <span class="text-danger">*</span></label>
                                        <select name="barangay" id="barangay" class="form-control {{ $errors->has('barangay')  ? 'is-invalid' : ''}}">
                                            <option  selected disabled>Please Select Barangay</option>
                                            {{-- @foreach($barangays as $barangay)
                                                <option data-zip-code="{{ $barangay->city_zip_code }}" value="{{ $barangay->id }}"> {{ $barangay->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Add New Establishment</button>

                                    <a href="" class="btn btn-success">Generate</a>

                            </div>

                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-12"></div>
    </div>
    </form>
</section>
@endsection
