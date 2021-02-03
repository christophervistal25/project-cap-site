@inject('personnel_repository', 'App\Http\Controllers\Repositories\PersonnelRepository')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>
        <link rel="stylesheet" href="/css/print_style1.css" media="print">
        <link rel="stylesheet" href="/css/screen_styled.css" media="screen">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body { overflow-y:  hidden; }
            .person_image {
                position:absolute;
                top : 63.3%;
                left : 45.27%;
            }
            .person_qr {
                position:absolute;
                top : 33.6%;
                left : 43.7%;
            }
        </style>
    </head>
</head>
<body>
    <div class="container text-center">
        <img  src="{{ asset('/storage/id_template/base-template_blank.png') }}" class="img-fluid">                
        <img class="person_image img-fluid" width="9.5%;" src="{{ asset('/storage/images/' . $person->image) }}">
        <img class="person_qr" src="https://api.qrserver.com/v1/create-qr-code/?size=245x245&data={{ $personnel_repository->generateQRbyData($person) }}" >
    </div>
</body>
</html>

{{-- <center>
<img id="a" src="{{ asset('/storage/id_template/base-template.jpg') }}" class="img-fluid">
</center>
<center>

<div id="c">{{ $person->firstname }} {{ $person->middlename[0] }}. {{ $person->lastname }}</div><br><br><br><br>
<div id="d">{{ $person->address }}</div>
</center>  
<center>
<div></div>
<div id="bb">ID: {{ $person->id }}</div>
</center> --}}
