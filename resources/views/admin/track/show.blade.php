@extends('admin.layouts.app')
@section('page-small-title','Personnel')
@section('page-title', 'Track')
@prepend('page-css')
@endprepend
@section('content')
<div class="card" >
    <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <div>{{ Session::get('success') }}</div>
        </div>
        @endif
        <h5 class="font-weight-bold">History</h5>
        @foreach($person->logs as $log)
           <div class="alert alert-info">
               <li style="list-style: none;">{{ $log->location }}</li>
               <li style="list-style: none;">{{ $log->body_temperature }}</li>
               <li style="list-style: none;">{{ $log->time }}</li>
               <li style="list-style: none;">{{ $log->checker->firstname }} {{ $log->checker->middlename }} {{ $log->checker->lastname }}</li>
               <button class="float-right btn btn-primary btn-icon btn-sm mt-1 font-weight-light btn-interact" id="log-{{ $log->id }}">People with same location and date</button>
               <div class="clearfix"></div>
               <div class="card mt-2 " id="container-interact-{{ $log->id }}">
                   <div class="card-body text-dark" id="interact-{{ $log->id }}">
                        <form action="{{ route('other.person.notify') }}" method="POST">
                            @csrf
                            <input type="hidden" name="phone_numbers" class="phone-numbers-{{ $log->id }}">
                            <div class="float-right">
                                <button class="btn btn-warning btn-send-notification" type="submit">Send Notification</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                   </div>
               </div>
           </div>
        @endforeach
  </div>
</div>
@push('page-scripts')
<script>
    $('.btn-interact').click(function (e) {
        let logId = $(this).attr('id').replace('log-', '');
        $.ajax({
            url : `/admin/persons/track/others/${logId}`,
            type : 'GET',
            success : function (response) {
                if(response.length !== 0) {
                    $(`#container-interact-${logId}`).removeClass('d-none');
                    response.forEach((log) => {
                        $(`.phone-numbers-${logId}`).val($(`.phone-numbers-${logId}`).val()   + '|' + log.person.phone_number);

                        $(`#interact-${logId}`).prepend(`
                            <p>ID : ${log.person.person_id}</p>
                                <p>Fullname : ${log.person.firstname} ${log.person.middlename} ${log.person.lastname} ${log.person.suffix}</p>
                                <p>Mobile Number : ${log.person.phone_number}</p>
                                <p>Time : ${log.time}</p>
                                <p>Temperature : ${log.body_temperature}</p>
                                <p>Purpose : ${log.purpose}</p>
                                <p>Checker : ${log.checker.firstname} ${log.checker.middlename} ${log.checker.lastname}</p>
                                <hr>
                        `);
                    });

                }
            }
        });
    });


</script>
@endpush
@endsection
