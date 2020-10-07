 @extends('layouts\app')

 @section('content')
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Tracking</h1></a>
					<div class="pull-right">
						<a href="index.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="blog.html">Tracking / Trace</a>
					</div>
				</div>
			</div>
             <br>
             <br>
             <br>
			 <div class="section section-filters">
							<div class="section_wrapper clearfix">
									<div class="items_group clearfix">
										<div class="column one column_column ">
											<div class="column_attr align_center" >
												<h4 style="margin: 0 6%;">If you are expecting to receive a delivery from  Postal Shipment Logistics Ltd  , <br>then you can Track your Shipment below: </h4>
											</div>
										</div>

										<div class="screen-reader-response"></div>
													<center>

                 

                                                    <form   action="/tracking" method="GET" align="center">
														<div class="column one" align="center">
														     <input align="center" type="text" name="search"  maxlength="10" size="10" required="required" placeholder="Enter Your Consignment Number" align="center" />
	                                                    </div>
														<div class="column one">
															<div class="form-elem">
								<button type="submit" name="submit" class="btn btn-success btn-default">TRACK</button>
							</div>
														</div> 

													</form></center>
												</div><br/>
</div>
										<div class="column one-fourth column_placeholder">
											<div class="placeholder">&nbsp;											</div>
										</div>
										<div class="column one-second column_column ">
											<div class="column_attr align_center" >
												<p>
													Our tracking system will tell you the current status <br>of your delivery and when you can expect your parcel to be delivered.<br><strong>Note!</strong> If the status of your Delivery is "On Hold" Please contact your contact personnel for more information. <br> - <strong>support@rainbowpresscourier.com</strong> 											</p>
											</div>
										</div>
									</div>
								</div>


		<script type="text/javascript">//<![CDATA[
		$(window).load(function(){
			var getUrlParameter = function getUrlParameter(sParam) {
				var sPageURL = decodeURIComponent(window.location.search.substring(1)),
					sURLVariables = sPageURL.split('&'),
					sParameterName,
					i;

				for (i = 0; i < sURLVariables.length; i++) {
					sParameterName = sURLVariables[i].split('=');

					if (sParameterName[0] === sParam) {
						return sParameterName[1] === undefined ? true : sParameterName[1];
					}
				}
			};

			// var cnurl = getUrlParameter('cnurl');
			var cnurl = "" ;

			function validate() {
			    document.getElementById('name').value = cnurl;
			}

			validate();


		});//]]>
		</script>


		@endsection
