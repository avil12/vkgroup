@extends('frontend.layouts.app')

@section('content')


<style type="text/css">

.paymentpadding{
	padding: 60px 0px
}

.paymentcss{
	text-align: center;
}

.paymentcss img {
    max-width: 106px;
    width: 100%;
}

.paymentcss h2 {
    font-size: 52px;
    font-weight: 700;
    letter-spacing: 0px;
    padding-bottom: 10px;
    color: #0091e7;
}

.paymentcss p {
    font-size: 16px;
    font-weight: 600;
    color: #777d82;
    padding-bottom: 16px;
}

.paymentcss .content{
	padding: 20px;
}

.paybtn a {
    background-color: #000;
    border-color: #000;
    border-radius: 32px;
    color: #fff;
    font-size: 19px;
    font-weight: 600;
    padding: 10px 42px;
    line-height: 29px;
}


@media only screen and (max-width: 600px) {
 
 .paymentcss h2 {
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 0px;
    padding-bottom: 10px;
    color: #0091e7;
}

.paymentcss p {
    font-size: 15px;
    font-weight: 600;
    color: #777d82;
    padding-bottom: 11px;
}

.paybtn a {
    background-color: #000;
    border-color: #000;
    border-radius: 32px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 10px 27px;
    line-height: 24px;
}

.paymentcss img {
    max-width: 72px;
    width: 100%;
}

}


</style>



<section class="paymentpadding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 paymentcss">
				 
				 <img src="http://demo.vk-groups.com/public/uploads/all/tnGwtqW87snKnamttreKQVCxelp4AkQ7pXeRUExP.png" class="img-fluid">
				 <div class="content">
				 	<h2>Payment Done Successfully</h2>
				 	<p>Your payment is Successfully. Thank you for your payment.</p>
				 	<div class="paybtn">
				 		<a href="#" class="btn btn-primary">Go To Homepage</a>
				 	</div>
				 	
				 </div>
			</div>
		</div>
	</div>
</section>

@endsection