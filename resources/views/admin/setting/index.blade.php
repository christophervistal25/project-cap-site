@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Profile')
@prepend('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.css">
@endprepend
@section('content')
<div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold card-title">Edit Accounts</h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="accounts-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                <tr id="account-{{ $admin->id }}">
                    <td data-field="true" data-field-key="username" id="username-field-{{ $admin->id }}" class="text-center" contenteditable="true">{{ $admin->username }}</td>
                    <td data-field="true" data-field-key="password" id="password-field-{{ $admin->id }}" class="text-center password-field" contenteditable="true">{{ str_repeat("*", strlen($admin->password)) }}</td>
                    <td class="text-center">
                        <button class="btn btn-info btn-icon  btn-sm btn-account-edit" data-source-id="{{ $admin->id }}">
                            <i class="la la-edit "></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@if(Session::has('success'))
    <div class="card bg-success text-white shadow">
        <div class="card-body">
                {{ Session::get('success') }}
        </div>
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold card-title">Add Municipalities Name</h6>
    </div>
    <div class="card-body">
        
        <form method="POST" action="{{ route('setting.store.city') }}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text"  name="place" placeholder="Name" class="form-control {{ $errors->has('place')  ? 'is-invalid' : ''}}" value="{{ old('place') }}">
                @if($errors->has('place'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('place') }} </small>
                @endif
            </div>

            <div class="form-group">
                <label>Zip Code</label>
                <input type="number"  name="zip_code" placeholder="Zip Code" class="form-control {{ $errors->has('zip_code')  ? 'is-invalid' : ''}}" value="{{ old('zip_code') }}">
                @if($errors->has('zip_code'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('zip_code') }} </small>
                @endif
            </div>

            <div class="form-group">
                <label>Code</label>
                <input type="number"  name="code" placeholder="Code" class="form-control {{ $errors->has('code')  ? 'is-invalid' : ''}}" value="{{ old('code') }}">
                @if($errors->has('code'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('code') }} </small>
                @endif
            </div>

            <div class="form-group">
                <div class="float-right">
                    <input type="submit" value="Add" class="btn btn-primary ">
                </div>
                <div class="clearfix"></div>
            </div>
        </form>

        <hr>
        
        <table class="table table-bordered" id="barangays-table">
            <thead>
                <tr>
                    <th>Place</th>
                    <th>Zip Code</th>
                    <th>Code</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cities as $city)
                <tr>
                    <td contenteditable="true" id="table-name-{{ $city->zip_code }}">{{ $city->name }}</td>
                    <td>{{ $city->zip_code }}</td>
                    <td>{{ $city->code }}</td>
                    <td class="text-center">
                        <button class="btn btn-info btn-icon btn-sm municpal-edit"  data-source-id="{{ $city->zip_code }}">
                            <i class="la la-edit"></i>
                        </button>

                        <button class="btn btn-danger btn-sm btn-icon municipal-remove" data-source-id="{{ $city->zip_code }}">
                            <i class="la la-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@if(Session::has('success-municipal-account'))
    <div class="card bg-success text-white shadow">
        <div class="card-body">
                {{ Session::get('success-municipal-account') }}
        </div>
    </div>
@endif
<div class="card shadow ">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold card-title">Municipal Account</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('setting.store.city.account') }}">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input type="text"  name="username" placeholder="Username" class="form-control {{ $errors->has('username')  ? 'is-invalid' : ''}}" value="{{ old('username') }}">
                @if($errors->has('username'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('username') }} </small>
                @endif
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password"  name="password" placeholder="Password" class="form-control {{ $errors->has('password')  ? 'is-invalid' : ''}}" value="{{ old('password') }}">
                @if($errors->has('password'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('password') }} </small>
                @endif
            </div>

            <div class="form-group">
                <label>Re-type Password</label>
                <input type="password"  name="password_confirmation" placeholder="Re-type Password" class="form-control" value="{{ old('password_confirmation') }}">
            </div>


            <div class="form-group">
                <label>Select City : </label>
                <select name="register_city" class="form-control {{ $errors->has('register_city')  ? 'is-invalid' : ''}}" id="cities">
                    <option value=""  selected disabled ></option>
                    @foreach($cities as $city)
                        <option {{ old('register_city') == $city->zip_code ? 'selected' : '' }} value="{{ $city->zip_code }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('register_city'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('register_city') }} </small>
                @endif
            </div>
            <div class="form-group">
                <div class="float-right">
                    <input type="submit" value="Add" class="btn btn-primary">
                </div>
                <div class="clearfix"></div>
            </div>
        </form>

        <hr>
        
        <table class="table table-bordered" id="municipals-table">
            <thead>
                <tr>
                    <th>Place</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($municipals_account as $municipal)
                <tr>
                    
                    <td class="table-municipal-field" id="table-municipal-place-{{ $municipal->id }}">{{ $municipal->city->name }}</td>
                    <td contenteditable="true" id="table-municipal-username-{{ $municipal->id }}">{{ $municipal->username }}</td>
                    <td contenteditable="true" id="table-municipal-password-{{ $municipal->id }}">{{ str_repeat('*', strlen($municipal->password)) }}</td>
                    <td class="text-center">
                        <button class="btn btn-info btn-sm btn-icon  municipal-account-edit" data-source-id="{{ $municipal->id }}">
                            <i class="la la-edit"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
  
@push('page-scripts')
<script>
    $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});
</script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('#accounts-table').DataTable();
    $('#barangays-table').DataTable();
    $('#municipals-table').DataTable();
</script>
{{-- ACCOUNT JS SCRIPT --}}
<script>
    $(document).on('click', '.btn-account-edit', function (e) {
        let sourceAccount = $(this).attr('data-source-id');

        let data = {
            account_id : sourceAccount,
            username : $(`#username-field-${sourceAccount}`).text(),
            password : $(`#password-field-${sourceAccount}`).text(),
        };

        $.ajax({
            url : "{{ route('setting.admin.account.update') }}",
            method : 'POST',
            data : data,
            success: function (response) {
                if(response.success) {
                    $(`#password-field-${sourceAccount}`).text('************************************************************');
                    swal("Good job!", "Account successfully update.", "success");
                }
            },
            error : function (response) {
                if(response.status === 422) {
                     // this is a Node object    
                    let errorElement = document.createElement("span");

                    Object.keys(response.responseJSON.errors).forEach((key) => {
                        errorElement.innerHTML += `<p class='text-danger'>${response.responseJSON.errors[key][0]}</p>`;
                    })
                        
                    swal({
                        title: "Opps!", 
                        icon: "error",
                        content: errorElement,
                    });
                }
            }

        });
    });
</script>

{{-- MUNICIPAL JS SCRIPT --}}
<script>

    $(document).on('click', '.municpal-edit', function (e) {
        let placeId = $(this)[0].getAttribute('data-source-id');
        let placeField = $(`#table-name-${placeId}`);
        let zipCodeField = $(`#table-zip-code-${placeId}`);

        $.ajax({
            url : "{{ route('setting.update.city') }}",
            method : 'POST',
            data : { name : placeField.text(), zip_code : zipCodeField.text() },
            success : function (response) {
                if(response.success) {
                    swal("Good job!", "Municipal successfully update.", "success");
                }
            },
            error : function (response) {
                if(response.status === 422) {
                     // this is a Node object    
                    let errorElement = document.createElement("span");

                    Object.keys(response.responseJSON.errors).forEach((key) => {
                        errorElement.innerHTML += `<p class='text-danger'>${response.responseJSON.errors[key][0]}</p>`;
                    })
                        
                    swal({
                        title: "Opps!", 
                        icon: "error",
                        content: errorElement,
                    });
                }
            }
        })
    });

    $(document).on('click', '.municipal-remove', function (e) {
        let zipCode = $(this)[0].getAttribute('data-source-id');
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : "{{ route('setting.remove.city') }}",
                    method : 'POST',
                    data : { zip_code : zipCode },
                    success : function (response) {
                        if(response.success) {
                            swal("Good job!", "Municipal successfully remove.", "success");
                            window.location.reload();
                        }
                    },
                    error : function (response) {
                        if(response.status === 422) {
                            // this is a Node object    
                            let errorElement = document.createElement("span");

                            Object.keys(response.responseJSON.errors).forEach((key) => {
                                errorElement.innerHTML += `<p class='text-danger'>${response.responseJSON.errors[key][0]}</p>`;
                            })
                                
                            swal({
                                title: "Opps!", 
                                icon: "error",
                                content: errorElement,
                            });
                        }
                    }
                });
            } 
            });
       
    });

</script>

{{-- MUNICIPAL ACCOUNT JS SCRIPT --}}
<script>
    $(document).on('click', '.table-municipal-field', function (e) {
        let municipalPlaceClicked = $(this);
        if(municipalPlaceClicked.children().length === 0) {
            municipalPlaceClicked.empty();
            $("#cities").clone().appendTo(municipalPlaceClicked[0]);
        }
    });

    $(document).on('click', '.municipal-account-edit', function (e) {
        let municipalId = $(this)[0].getAttribute('data-source-id');
        
        let place = $(`#table-municipal-place-${municipalId}`);
        let username = $(`#table-municipal-username-${municipalId}`);
        let password = $(`#table-municipal-password-${municipalId}`);
        
        $.ajax({
            url : "{{ route('admin.setting.municipal.account.update') }}",
            method : 'POST',
            data : { id : municipalId, place : place.find('select').val(), username : username.text(), password : password.text() },
            success : function (response) {
                if(response.success) {
                    swal("Good job!", "Municipal account successfully update.", "success");

                    // Clear the select box first in the city field.
                    place.empty();
                    // Return the value from a td field
                    place.text(response.place);

                    // Hide the password of the user.
                    password.text('************************************************************');
                }
            }, 
            error : function (response) {
                if(response.status === 422) {
                     // this is a Node object    
                    let errorElement = document.createElement("span");

                    Object.keys(response.responseJSON.errors).forEach((key) => {
                        errorElement.innerHTML += `<p class='text-danger'>${response.responseJSON.errors[key][0]}</p>`;
                    })
                        
                    swal({
                        title: "Opps!", 
                        icon: "error",
                        content: errorElement,
                    });
                }
            }
        })
    });
</script>
@endpush
@endsection
