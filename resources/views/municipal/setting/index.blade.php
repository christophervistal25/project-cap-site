@extends('municipal.layouts.app')
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
                @foreach($municipals as $municipal)
                <tr id="account-{{ $municipal->id }}">
                    <td data-field="true" data-field-key="username" id="username-field-{{ $municipal->id }}" class="text-center" contenteditable="true">{{ $municipal->username }}</td>
                    <td data-field="true" data-field-key="password" id="password-field-{{ $municipal->id }}" class="text-center password-field" contenteditable="true">{{ str_repeat("*", strlen($municipal->password)) }}</td>
                    <td class="text-center">
                        <button class="btn btn-info btn-icon  btn-sm btn-account-edit" data-source-id="{{ $municipal->id }}">
                            <i class="la la-edit "></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@if(Session::has('success-barangay'))
    <div class="card bg-success text-white shadow">
        <div class="card-body">
                {{ Session::get('success-barangay') }}
        </div>
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold card-title">Add Barangay Name</h6>
    </div>
    <div class="card-body">
        
        <form method="POST" action="{{ route('setting.municipal.add.barangay') }}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text"  name="name" placeholder="Name" class="form-control {{ $errors->has('name')  ? 'is-invalid' : ''}}" value="{{ old('name') }}">
                @if($errors->has('name'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('name') }} </small>
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
                    <th>Code</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangays as $barangay)
                <tr>
                    <td contenteditable="true" id="table-field-name-{{ $barangay->id }}">{{ $barangay->name }}</td>
                    <td id="table-field-code-{{ $barangay->id }}">{{ $barangay->code }}</td>
                    <td class="text-center">
                        <button class="btn btn-info btn-icon btn-sm barangay-edit"  data-source-id="{{ $barangay->id }}">
                            <i class="la la-edit"></i>
                        </button>

                        <button class="btn btn-danger btn-sm btn-icon barangay-remove" data-source-id="{{ $barangay->id }}">
                            <i class="la la-trash"></i>
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
<div class="card shadow ">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold card-title">Checker Account</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('setting.municipal.add.checker') }}">
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
                <label>Firstname</label>
                <input type="text"  name="firstname" placeholder="Firstname" class="form-control {{ $errors->has('firstname')  ? 'is-invalid' : ''}}" value="{{ old('firstname') }}">
                @if($errors->has('firstname'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('firstname') }} </small>
                @endif
            </div>

            <div class="form-group">
                <label>Middlename</label>
                <input type="text"  name="middlename" placeholder="Middlename" class="form-control {{ $errors->has('middlename')  ? 'is-invalid' : ''}}" value="{{ old('middlename') }}">
                @if($errors->has('middlename'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('middlename') }} </small>
                @endif
            </div>

            <div class="form-group">
                <label>Lastname</label>
                <input type="text"  name="lastname" placeholder="Lastname" class="form-control {{ $errors->has('lastname')  ? 'is-invalid' : ''}}" value="{{ old('lastname') }}">
                @if($errors->has('lastname'))
                    <small  class="form-text text-danger">
                    {{ $errors->first('lastname') }} </small>
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
                <div class="float-right">
                    <input type="submit" value="Add" class="btn btn-primary">
                </div>
                <div class="clearfix"></div>
            </div>
        </form>

        <hr>
        
        <table class="table table-bordered" id="checkers-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Password</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($checkers as $checker)
                <tr>
                    
                    <td contenteditable="true" id="table-checker-username-{{ $checker->id }}">{{ $checker->username }}</td>
                    <td contenteditable="true" id="table-checker-firstname-{{ $checker->id }}" class="text-capitalize">{{ $checker->firstname }}</td>
                    <td contenteditable="true" id="table-checker-middlename-{{ $checker->id }}" class="text-capitalize">{{ $checker->middlename }}</td>
                    <td contenteditable="true" id="table-checker-lastname-{{ $checker->id }}" class="text-capitalize">{{ $checker->lastname }}</td>
                    <td contenteditable="true" id="table-checker-password-{{ $checker->id }}">{{ str_repeat('*', strlen($checker->password)) }}</td>
                    <td class="text-center">
                        <button class="btn btn-info btn-sm btn-icon  checker-account-edit" data-source-id="{{ $checker->id }}">
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
    $('#checkers-table').DataTable();
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
            url : "{{ route('setting.municipal.account.update') }}",
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

    $(document).on('click', '.barangay-edit', function (e) {
        let placeId = $(this)[0].getAttribute('data-source-id');
        let nameField = $(`#table-field-name-${placeId}`);
        let codeField = $(`#table-field-code-${placeId}`);

        $.ajax({
            url : "{{ route('setting.municipal.update.barangay') }}",
            method : 'POST',
            data : { id : placeId, name : nameField.text()},
            success : function (response) {
                if(response.success) {
                    swal("Good job!", "Barangay successfully update.", "success");
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

    $(document).on('click', '.barangay-remove', function (e) {
        let id = $(this)[0].getAttribute('data-source-id');
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
                    url : "{{ route('setting.municipal.remove.barangay') }}",
                    method : 'POST',
                    data : { id : id },
                    success : function (response) {
                        if(response.success) {
                            swal("Good job!", "Barangay successfully remove.", "success");
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

    $(document).on('click', '.checker-account-edit', function (e) {
        let checkerId = $(this)[0].getAttribute('data-source-id');

        let username   = $(`#table-checker-username-${checkerId}`);
        let firstname  = $(`#table-checker-firstname-${checkerId}`);
        let middlename = $(`#table-checker-middlename-${checkerId}`);
        let lastname   = $(`#table-checker-lastname-${checkerId}`);
        let password   = $(`#table-checker-password-${checkerId}`);
        
        let data = {
            id : checkerId,
            username: username.text(),
            firstname : firstname.text(),
            middlename : middlename.text(),
            lastname : lastname.text(),
            password : password.text(),    
        };

        $.ajax({
            url : "{{ route('setting.municipal.update.checker') }}",
            method : 'POST',
            data : data,
            success : function (response) {
                if(response.success) {
                    swal("Good job!", "Checker account successfully update.", "success");

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
