@inject('personnel_repository', 'App\Http\Controllers\Repositories\PersonnelRepository')
<html>
    <head>
        <link rel="stylesheet" href="/css/print_style1.css" media="print">
        <link rel="stylesheet" href="/css/screen_styled.css" media="screen">
    </head>
</html>

<center>
<img id="a" src="{{ asset('/storage/id_template/base-template.jpg') }}"  width="30%">
</center>
<center>
<img id="b" class="person_image" src="{{ asset('/storage/images/' . $person->image) }}" width="10%">
<div id="c">{{ $person->firstname }} {{ $person->middlename[0] }}. {{ $person->lastname }}</div><br><br><br><br>
<div id="d">{{ $person->address }}</div>
</center>  
<center>
<div><img id="e" src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data={{ $personnel_repository->generateQRbyData($person) }}" width="10%"></div>
<div id="bb">ID: {{ $person->id }}</div>
</center>
