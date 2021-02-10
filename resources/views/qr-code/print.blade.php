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
        <link href="http://fonts.cdnfonts.com/css/american-captain" rel="stylesheet">
        <style>
            body { overflow-y:  hidden;
                -webkit-print-color-adjust: exact !important; }
            #image-index {
                z-index: -9999;
                position:absolute;
                width :9cm;
                height : 13cm;
            }

            @media print {
                body {
                    font-family: 'American Captain', sans-serif;
                }
                #image-index {
                    width :5.7in;
                    height : 8.2in;
                }
/*
                #qr-image {
                    /* position :absolute;
                    left : 39%;
                    top : 22%; */
                }
                #container {
                    position: absolute;
                    left :16%;
                    top : 18%;
                    background :white;
                    padding : 10px;
                    width : 200px;
                    height :auto;
                    border-radius: 3px;
                    border : 5px solid #4844E3;
                }

                .person-image-container {
                    position: absolute;
                    z-index : 999;
                    left :17.87%;
                    top : 32%;
                    background :white;
                    padding : 10px;
                    width : 150px;
                    height :auto;
                    border-radius: 3px;
                    border : 4px solid #4844E3;
                }

                .person_name {
                    font-family: 'American Captain', sans-serif;
                    font-size : 1.8em;
                    position: absolute;
                    z-index : 999;
                    top : 42%;
                    left : 15.6%;
                    color :white;

                }

                .person_image {
                    height : 100px;
                }

            }
        </style>
    </head>
</head>
<body>
        <img class="img-fluid" src="{{ asset('/storage/id_template/plain_blank_2.png') }}" id="image-index">
         <div class="person-image-container">
            <img id="person_image"  class="img-fluid" src="{{ asset('/storage/images/' . $person->image) }}">
        </div>
        <div id="container">
            <img id="qr-image" class="img-fluid" src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ $personnel_repository->generateQRbyData($person) }}">
        </div>
        <p class="person_name">{{ $person->firstname }} {{ $person->middlename[0] }}. {{ $person->lastname }} {{ $person->suffix }}</p>

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
