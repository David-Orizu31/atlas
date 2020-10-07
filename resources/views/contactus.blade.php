@extends('layouts.app')


@section('content')
<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Contact</h1></a>
					<div class="pull-right">
						<a href="index.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#">Our Contact</a>
					</div>
				</div>
			</div>
            @include('flash::message')
			<iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12767359.613956282!2d26.20443278380398!3d38.625164313526206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sUnitedkingdom!5e0!3m2!1sen!2sng!4v1466773265655"></iframe><br><br>
</div>
					<center><h2>We work <a href="#">24hours</a> of the day and <a href="#">7days</a> of the week.</h2></center>
				</div>
			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">

						<h4>Branch Office</h4>
						<p> GLOBAL LINKS COURIER EXPRESS DELIVERY   is also located in Kurfürstendamm 185, 10707 Berlin, Germany</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong> GLOBAL LINKS COURIER EXPRESS DELIVERY  </strong><br>UNIT 8, Devonshire Court, Victoria Rd, Feltham TW13 7LU, United Kingdom</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>±44-845860-6758</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>support@rainbowpresscourier.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Mon - Sun  12.00 - 12.00</div>
							</div>
						</div>
						<br><br><hr><br>
						<h4>Head Office</h4>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong> GLOBAL LINKS COURIER EXPRESS DELIVERY. </strong><br>USA Branch</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>±120-2600-8450</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>contactusa@glcedelivery.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Mon - Sun  12.00 - 12.00</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>SEND us a message</h4>
						<p>Our special billing team will always be available to read and reply your messages. We have a 24/7 available customer care department, so be free to send your messages.</p>
						<div id="success"></div>
						<form action="https://postalshipmentlog.com/send.php" method="post">
							<div class="row form-elem">
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="firstname" id="user-name" placeholder="First Name" required>
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="email" name="email" id="user-email" placeholder="Email Address" required>
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="lastname" id="user-lastname" placeholder="Last Name" required>
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="user-phone" id="mobile" placeholder="Phone No." required>
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="subject" id="user-subject" placeholder="Subject">
							</div>
							<div class="form-elem default-inp">
								<textarea name="message" placeholder="Message" required></textarea>
							</div>
							<div class="form-elem">
								<button type="submit" name="submitBtn" class="btn btn-success btn-default">send message</button>
							</div>
						</form>
					</div>
				</div>
			</div>

  @endsection
