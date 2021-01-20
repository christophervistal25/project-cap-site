@extends('municipal.layouts.app')
@prepend('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.css">
@endprepend
@section('page-small-title','Personnel')
@section('page-title',  $person->firstname . ' ' . $person->middlename[0] . '. ' . $person->lastname )
@section('content')
<section id="basic-alerts">
  <div class="row match-height">
      <div class="col-xl-5 col-lg-12">
                @include('templates.success')
                <form method="POST" action="{{ route('municipal.personnel.logs.update', $person->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">  <img src="{{ asset('/storage/images/' . $person->image) }}" width="10%"> Personnel Information</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="rapid_pass_no">Rapid Pass No. <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control  {{ $errors->has('rapid_pass_no')  ? 'is-invalid' : ''}}" " id="rapid_pass_no" name="rapid_pass_no" placeholder="Rapid Pass No" value="{{ old('rapid_pass_no') ?? $person->rapid_pass_no }}" >
                                    @if($errors->has('rapid_pass_no'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('rapid_pass_no') }} </small>
                                    @endif
                                </div>


                                <div class="form-group mt-1">
                                <label for="firstname">Firstname <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  {{ $errors->has('firstname')  ? 'is-invalid' : ''}}" id="firstname" name="firstname" placeholder="Enter Firstname" value="{{  old('firstname') ?? $person->firstname }}" >
                                    @if($errors->has('firstname'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('firstname') }} </small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="middlename">Middlename <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control {{ $errors->has('middlename')  ? 'is-invalid' : ''}}" id="middlename" name="middlename" placeholder="Enter Middlename" value="{{ old('middlename') ?? $person->middlename }}" >
                                    @if($errors->has('middlename'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('middlename') }} </small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" id="lastname" name="lastname" placeholder="Enter Lastname" value="{{ old('lastname') ?? $person->lastname }}" >
                                    @if($errors->has('lastname'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('lastname') }} </small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="suffix">Suffix</label>
                                    <input type="text" class="form-control {{ $errors->has('suffix') ? 'is-invalid' : '' }}" id="suffix" name="suffix" placeholder="e.g Jr." value="{{ old('suffix') ?? $person->suffix }}" >
                                    @if($errors->has('suffix'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('suffix') }}</small>
                                    @endif
                                </div>



                                {{-- <hr> --}}

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="date_of_birth">Date of birth <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"  name="date_of_birth" value="{{ old('date_of_birth') ?? $person->date_of_birth }}" >
                                            @if($errors->has('date_of_birth'))
                                            <small  class="form-text text-danger">
                                                {{ $errors->first('date_of_birth') }} </small>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="rapid_test_issued">Rapid test issued <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control {{ $errors->has('rapid_test_issued') ? 'is-invalid' : '' }}" id="rapid_test_issued" name="rapid_test_issued"  value="{{ old('rapid_test_issued') ?? $person->rapid_test_issued }}" >
                                            @if($errors->has('rapid_test_issued'))
                                            <small  class="form-text text-danger">
                                                {{ $errors->first('rapid_test_issued') }} </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <textarea name="address" id="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" rows="3" >{{ old('address') ?? $person->address }}</textarea>
                                    @if($errors->has('address'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('address') }} </small>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="barangay">Barangays <span class="text-danger">*</span></label>
                                            <select  name="barangay" class="form-control">
                                                @foreach($barangays as $barangay)
                                                    @if(!is_null(old('barangay')))
                                                        <option {{ old('barangay') == $barangay->id ? 'selected' : ''}} value="{{ $barangay->id }}" name="barangay" >{{ $barangay->name }}</option>
                                                    @else
                                                        <option {{ $person->barangay_id === $barangay->id ? 'selected' : ''}} value="{{ $barangay->id }}" name="barangay" >{{ $barangay->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" class="form-control" id="city" name="city"  value="{{ $person->city->name }}" > --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gender">Sex <span class="text-danger">*</span></label>
                                    <select name="gender"  id="gender" class="form-control  {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                                        @foreach(['male', 'female'] as $gender)
                                            @if(!is_null(old('gender')))
                                                <option {{ old('gender') == $gender ? 'selected' : ''}} value="{{ $gender }}" name="gender" >{{ ucfirst($gender) }}</option>
                                            @else
                                                <option {{ $person->gender === $gender ? 'selected' : ''}} value="{{ $gender }}" name="gender" >{{ ucfirst($gender) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('gender'))
                                    <small  class="form-text text-danger">
                                        {{ $errors->first('gender') }} </small>
                                    @endif
                                </div>
                                <input type="submit" class="btn btn-block btn-success" value="Update">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personnel Logs</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <table class="table table-bordered" id="logs-table">
                                <thead>
                                    <tr>
                                        <th>Location</th>
                                        <th>Temperature</th>
                                        <th>Checker</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($person->logs as $log)
                                    <tr>
                                        <td class="text-center">{{ $log->location }}</td>
                                        <td class="text-center">{{ $log->body_temperature }}</td>
                                        <td class="text-center text-capitalize">{{ $log->checker->lastname }}, {{ $log->checker->firstname }} {{ $log->checker->middlename }}</td>
                                        <td class="text-center">{{ $log->time }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    $('#logs-table').DataTable();
</script>
@endpush
@endsection
