@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Track Person')
@prepend('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.css">
@endprepend
@section('content')
<div class="card" >
    <div class="card-body">
        <table class="table table-bordered" id="persons-table" style="width:100%;">
            <thead>
                <tr>
                    <td>Person ID</td>
                    <td>Firstname</td>
                    <td>Middlename</td>
                    <td>Lastname</td>
                    <td>Province</td>
                    <td>City</td>
                    <td>Barangay</td>
                    <td>Options</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>


  </div>
</div>
  @push('page-scripts')
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
    let person_table =  $('#persons-table').DataTable({
            serverSide: true,
            ajax: `/admin/persons/track`,
            columns: [
                { name: 'person_id' },
                { name: 'firstname' },
                { name: 'middlename' },
                { name: 'lastname' },
                { name: 'province.name' },
                { name: 'city.name' },
                { name: 'barangay.name' },
                { name: 'track_action' , searchable : false, orderable : false, },
            ],
        });


  </script>
  @endpush
@endsection
