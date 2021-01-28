
@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Add New Establishment')
@section('content')

<section id="basic-alerts">
<form action="{{  route('establishment.store') }}" method="POST">
   @csrf
  <div class="row match-height">
      <div class="col-xl-2 col-lg-12"></div>
            <div class="col-xl-8 col-lg-12">
                <div class="mb-2">
                    @if(Session::has('success'))
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">Successfully add new establishment.</div>
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
                                <label for="office_store_name">Establishment/Office/Store Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('office_store_name') ? 'is-invalid' : '' }}" id="office_store_name" name="office_store_name" placeholder="Enter Establishment/Office/Store Name" >
                                @if($errors->has('office_store_name'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('office_store_name') }} </small>
                                @endif
                            </div>

                                <div class="form-group mt-1">
                                    <label for="establishment_type">Establishment Type <span class="text-danger">*</span></label>
                                    <select name="type" id="establishment_type" class="form-control {{ $errors->has('type')  ? 'is-invalid' : ''}}">
                                        <option  selected disabled>Please Select Establishment Type</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type }}"> {{ $type }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('type'))
                                    <small class="form-text text-danger">
                                        {{ $errors->first('type') }} </small>
                                    @endif
                                </div>
                            <div class="form-group mt-1">
                                <label for="address">Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('address') ? 'is-invalid' : '' }}" id="address" name="address" placeholder="Enter Address">
                                @if($errors->has('address'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('address') }} </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="contact_number">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{  $errors->has('contact_number') ? 'is-invalid' : '' }}" id="contact_number" name="contact_number" placeholder="Enter Contact Number">
                                @if($errors->has('contact_number'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('contact_number') }} </small>
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
                                        <select name="city" id="cities" class="form-control {{ $errors->has('city')  ? 'is-invalid' : ''}}">

                                            <option  selected disabled>Please Select City</option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->zip_code }}"> {{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('city'))
                                        <small class="form-text text-danger">
                                            {{ $errors->first('city') }} </small>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="barangay">Barangay <span class="text-danger">*</span></label>
                                        <select name="barangay" id="barangay" class="form-control {{ $errors->has('barangay')  ? 'is-invalid' : ''}}">
                                            <option  selected disabled>Please Select Barangay</option>
                                        </select>
                                        @if($errors->has('barangay'))
                                        <small class="form-text text-danger">
                                            {{ $errors->first('barangay') }} </small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Add New Establishment</button>

                                @if(Session::has('success'))
                                    <a href="" class="btn btn-success">Generate</a>
                                @endif
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
@push('page-scripts')
<script>
    $(document).ready(function () {
        let barangayOptionAll = [@foreach($barangay as $barangay){city_zip_code:'{{ $barangay->city_zip_code }}', name:'{{ $barangay->name }}'}, @endforeach];
        $('#cities').change(function (e) {
            let cityZipCode = e.target.value;
            //filter all barangay data//
            let barangayfilter = barangayOptionAll.filter(function(barangay){
                return barangay.city_zip_code == cityZipCode;
            });
            //Remove all option in #barangay//
            function removeOptionsBarangay(selectBarangay) {
                var ii, L = selectBarangay.options.length - 1;
                for(ii = L; ii >= 0; ii--) {
                    selectBarangay.remove(ii);
                }
            }
            removeOptionsBarangay(document.getElementById('barangay'));
            //add barangay data based in what you select in #cities//
            var i, length_barangay = barangayfilter.length;
            for (i = 0; i < length_barangay; i++) {
                var barangayfilter_final = barangayfilter[i];
                $('#barangay').append('<option data-zip-code="' + barangayfilter_final.city_zip_code + '">' + barangayfilter_final.name + '</option>');
            }
        });
    });
</script>
@endpush
@endsection
