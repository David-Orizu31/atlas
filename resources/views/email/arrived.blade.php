<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{asset('mail/new.css')}}">
    <link rel="stylesheet" href="{{asset('mail/bootstrap.css')}}">
</head>
<style>

</style>
<body>
    <div class="over">
        <div class="content bg-primary mb">
            <div class="header">
                <h1>UNITED SPEED EXPRESS</h1>
            </div>
            <div class="secondary">
                <div class="title"><h3><strong>Hi {{$dataemail['name']}},
            </div>
        </div>


    </div>
    <div class="mb text-center" style="margin: auto;">

           <p>Your package from {{$dataemail['sender_name']}} is currently in our warehouse. </p>
           <p>       This shipment will be delivery by our agent; Sirichat Sampath. </p>
           <p> To track your consignment; </p>
           <p>   Copy your consignment number as wriiten below. Click the 'Track' button below to take you to the tracking page. Paste the consignment number into the input field that appears on the top of all pages and click the 'Track' button. </p>

           <p> Consignment Number:{{$dataemail['tracking_id']}} </p>

           <br>
           <small>       TRACK PARCEL ABOUTPostal Shipment Logistics Ltd was incorporated in 2009 to provide seamless shipping & logistics services to esteemed customers with branches across the globe. </small>
<hr>
           <br><br>
           <small> We have a 24/7 available customer care department, so be free to send your messages and calls to: 
                delivery@unitedspeedexpress.com￼ +66-225-441-0PS.</small>







            <p>Your Parcel have arrived.</p>
            <span><small>C 2019 UNITED EXPRESS All rights reserved</small></span>
        </div>

</body>

</html>
