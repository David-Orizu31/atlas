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

<body>
        <div class="content bg-primary mb">
                <div class="header">
                    <h1>Rainbow Express Courier </h1>
                </div>



                <div class="secondary">
                    <div class="title"><h3><strong>Hello {{$dataemail['name']}}</strong></h3></div>
                <p>This is to inform you that the current location of Carrier Reference Number is {{$dataemail['invoiceno']}} has been Updated</p>

                </div>
            </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="container bg">
                <div class="container row">
                    <div class="col-lg-8">
                        <div class="panel mb">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tracking Details</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Tracking ID</td>
                                            <td>{{$dataemail['tracking_id']}}</td>
                                        </tr>
                                        <tr>
                                            <td>Weight</td>
                                            <td>{{$dataemail['weight']}}</td>
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                        <td>{{$dataemail['quantity']}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mode of Shipment</td>
                                            <td>{{$dataemail['modeofshipment']}}</td>
                                        </tr>
                                        <tr>
                                            <td>Arrival day</td>
                                            <td>{{$dataemail['arrivaldate']}}</td>
                                        </tr>
                                        <tr>
                                            <td>Sender</td>
                                            <td>{{$dataemail['sender_name']}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

 Please copy tracking ID and paste in the "Track" searchbox or


<a href="https://rainbowpresscourier.com/tracking?search={{$dataemail['tracking_id']}}" class="btn btn-danger">CLICK HERE</a> to view your Parcel.

                        <div class="mb">
                            <h3>Thank you for using Rainbow Express Courier</h3>
                            {{-- <p>Thanks,<br /> Rainbow Express Courier</p> --}}
                        </div>
                        <hr>
                        Regards,<br>
                        {{ config('app.name') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
