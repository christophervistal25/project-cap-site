<div class="text-center">
    <a class="text-sm btn btn-sm btn-info  btn-icon btn-info hide_btna" href="{{ route('personnel.logs', $person->id) }}" target="_blank" title="View Generated QR Code"  style="color:white;"> <i class="la la-history"></i></a>
    <a class="btn btn-success btn-icon  btn-sm" href="{{ route('admin.print.qr', $person->id) }}" target="_blank"><i class="la la-print"></i></a>
</div>
