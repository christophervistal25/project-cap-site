@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title','View Establishment')
@prepend('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/vendor/datatables/dataTables.bootstrap4.min.css">
@endprepend
@section('content')
<div class="card" >
    <div class="card-body">
      <div class="row float-left col-lg-7">
        <div class="col-lg-7">
          {{-- <select name="cities" id="city_filter" class="form-control">
            <option value="all">Show All</option>
            @foreach($cities as $city)
              <option value="{{ $city->zip_code }}"> {{ $city->name }}</option>
            @endforeach
          </select> --}}
        </div>


      </div>
      <div class="clearfix mb-2"></div>
      <table class="table table-bordered " id="persons-table" style="width:100%;">
        <thead>
          <tr>
            <td scope="col" class="text-center font-weight-bold">ID</td>
            <td scope="col" class="text-center font-weight-bold">Establishment/Office/Store Name</td>
            <td scope="col" class="text-center font-weight-bold">Address Located</td>
            <td scope="col" class="text-center font-weight-bold">Contact Number</td>
            <td scope="col" class="text-center font-weight-bold">Geo Tag Location</td>
            <td scope="col" class="text-center font-weight-bold">Date/Time register</td>
            <td scope="col" class="text-center font-weight-bold">Option</td>
          </tr>
        </thead>
        <tbody>
          @foreach($establishments as $establishment)
          <tr>
            <td class="text-center"> {{  $establishment->id }}</td>
            <td> {{  $establishment->name }}</td>
            <td> {{  $establishment->address }}</td>
            <td class="text-center"> {{  $establishment->contact_no }}</td>
            <td> {{  $establishment->geo_tag_location }}</td>
            <td class="text-center"> {{  $establishment->created_at->diffForHumans() }}</td>
            <td class="text-center">
              <a href="{{  route('establishment.edit', $establishment->id) }}" class="btn btn-icon btn-sm btn-success">
                  <i class="la la-edit"></i>
              </a>
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
  {{-- <script>
    let QUERY_STRING = 'all';

    if(localStorage.getItem('FILTER_SELECT') == null) {
      QUERY_STRING = 'all';
    } else {
      QUERY_STRING = localStorage.getItem('FILTER_SELECT');
      $('#city_filter').val(QUERY_STRING);
    }

    let person_table =  $('#persons-table').DataTable({
            serverSide: true,
            ajax: `/admin/persons/list/${QUERY_STRING}`,
            columns: [
                { name: 'person_id' },
                { name: 'firstname' },
                { name: 'middlename' },
                { name: 'lastname' },
                { name: 'city.name' },
                { name: 'admin_action' , searchable : false, orderable : false, },
            ],
        });
  </script> --}}

   {{-- <script>
      $('#city_filter').change(function (e) {
          QUERY_STRING = $(this).val();
          localStorage.setItem('FILTER_SELECT', QUERY_STRING);
          person_table.ajax.url(`/admin/persons/list/${QUERY_STRING}`).load();
          cellContentEditableUpdator();
      });
    </script> --}}
  @endpush
@endsection
