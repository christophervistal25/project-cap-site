@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','Cities')
@prepend('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.css">
@endprepend
@section('content')


    <div class="card" >
        <div class="card-body">
            <table class="table table-bordered" id="cities-table" style="width:100%;">
                <thead>
                <tr>
                    <td scope="col" class="font-weight-bold">Name</td>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
  </div>
  @push('page-scripts')
  <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
      $('#cities-table').DataTable({
            serverSide: true,
            ajax: "{{ route('city.list') }}",
            columns: [
                { name: 'name' },
            ],
        });
  </script>
  @endpush
@endsection