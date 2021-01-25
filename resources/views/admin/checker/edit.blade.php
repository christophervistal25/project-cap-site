
@extends('admin.layouts.app')
@section('page-small-title','Checker')
@section('page-title','Edit Checker')
@section('content')
<div class="mb-2">
    @if(Session::has('success'))
    <div class="card bg-success text-white shadow">
        <div class="card-body">{{ Session::get('success') }}</div>
    </div>
    @endif
    {{-- @include('templates.error') --}}
</div>
<section id="basic-alerts">
    <form method="POST"  action="{{ route('checker.update', $checker->id) }}" >
    @csrf
    @method('PUT')
  <div class="row match-height">
      <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checker Place</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Place</label>
                                <select name="city" class="form-control">
                                    @foreach($cities as $city)
                                    @if(!is_null(old('city')))
                                        <option {{ old('city') == $city->zip_code ? 'selected' : '' }} value="{{ $city->zip_code }}">{{ $city->name }}</option>
                                    @else
                                        <option {{ $checker->city_zip_code == $city->zip_code ? 'selected' : '' }} value="{{ $city->zip_code }}">{{ $city->name }}</option>
                                    @endif
                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checker Information</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control {{ $errors->has('username')  ? 'is-invalid' : ''}}" id="username" name="username" placeholder="Enter Username" value="{{ old('username') ?? $checker->username }}">
                                @if($errors->has('username'))
                                <small  class="form-text text-danger">
                                    {{ $errors->first('username') }} </small>
                            @endif
                    
                    
                            <div class="form-group mt-1">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control {{ $errors->has('firstname')  ? 'is-invalid' : ''}}" id="firstname" name="firstname" placeholder="Enter Firstname" value="{{ old('firstname') ?? $checker->firstname }}">
                            @if($errors->has('firstname'))
                                <small  class="form-text text-danger">
                                    {{ $errors->first('firstname') }} </small>
                            @endif
                            
                            </div>
                    
                            <div class="form-group">
                                <label for="middlename">Middlename</label>
                                <input type="text" class="form-control {{ $errors->has('middlename')  ? 'is-invalid' : ''}} " id="middlename" name="middlename" placeholder="Enter Middlename" value="{{ old('middlename') ?? $checker->middlename }}">
                                @if($errors->has('middlename'))
                                <small  class="form-text text-danger">
                                    {{ $errors->first('middlename') }} </small>
                            @endif
                            </div>
                    
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control {{ $errors->has('lastname')  ? 'is-invalid' : ''}}" id="lastname" name="lastname" placeholder="Enter Lastname" value="{{ old('lastname') ?? $checker->lastname }}">
                    
                                @if($errors->has('lastname'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('lastname') }} </small>
                                @endif
                            </div>
                    
                            <div class="form-group">
                                <label for="suffix">Suffix</label>
                                <input type="text" class="form-control {{ $errors->has('suffix')  ? 'is-invalid' : ''}}" id="suffix" name="suffix" placeholder="e.g Jr." value="{{ old('suffix') ?? $checker->suffix }}">
                                @if($errors->has('suffix'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('suffix') }} </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter Password" class="form-control {{ $errors->has('password')  ? 'is-invalid' : ''}}" id="password" name="password"  value="{{ old('password') }}">
                                @if($errors->has('password'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('password') }} </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Re-type Password</label>
                                <input type="password"  class="form-control {{ $errors->has('password_confirmation')  ? 'is-invalid' : ''}}" id="password_confirmation" name="password_confirmation"  value="{{ old('password_confirmation') }}">
                                @if($errors->has('password_confirmation'))
                                    <small  class="form-text text-danger">
                                    {{ $errors->first('password_confirmation') }} </small>
                                @endif
                            </div>
                    
                    
                        </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-success">Update Checker</button>
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