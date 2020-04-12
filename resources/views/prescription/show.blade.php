<!DOCTYPE html>
<html>

<head>

	<title> prescrioptin </title>
	<style>
		* {
			margin: 0;
			padding: 0;
			outline: 0;
		}

		.templete {
			width: 960px;
			margin: 0 auto;
		}

		.clear {
			overflow: hidden;
		}

		.allcontant {
			margin-top: 45px;
		}

		.header {
			background-color: bisque;
			height: ;
			border-bottom: 1px solid black;
		}

		.leftheader {
			float: left;
			padding-left: 21px;
			padding-bottom: 30px;
		}

		.leftheader h1 {
			font-size: 25px;
			color: #079A49;
			margin-top: 7px;
			margin-bottom: 5px;
		}

		.leftheader h3 {
			color: #B926C9;
			font-size: 19px;
			margin-top: 3px;
		}

		.leftheader p {
			font-size: 13px;
			color: #3F4042;
		}

		.leftheader h2 {
			font-size: 21px;
			color: #226ABA;
		}

		.middlehead {

			float: left;

		}

		.middlehead img {
			width: 94px;
			margin-left: 139px;
			margin-top: 66px;
			border-radius: 150px;
			/* height: 53px; */
		}

		.righthead {
			margin-right: 20px;
			float: right;
			margin-top: 18px;
		}

		.righthead h1 {
			font-size: 33px;
			color: #079A49;
			margin-top: -7px;
			margin-bottom: 5px;

		}

		.righthead h3 {
			color: #226ABA;
			font-size: 19px;
			margin-top: 3px;
			text-align: right;
		}

		.righthead p {
			font-size: 15px;
			color: #3F4042;
			text-align: right;
		}

		.righthead h2 {
			font-size: 24px;
			color: #B926C9;
			text-align: right;
		}

		.maincontant {
			margin-top: 10px;
			border: 1px solid black;
		}

		.upercontant {
			background-color: #F6F6F6;
			margin-bottom: 10px;
		}

		.upleft {
			height: 350px;
			width: 33%;
			float: left;
			border: 1px solid #A29FA2;
			font-size: 17px;

		}


		.downcontant {
			background-color: #FCFCFC;
			height: 807px;

		}

		.downleft {
			width: 33%;
			height: 800px;
			border: 1px solid #A29FA2;
			float: left;
			padding: 30px;
		}

		.downleft h3 {
			font-size: 20px;
			padding: 14px 15px;
		}

		.downleft p {
			font-size: 18px;
			padding-left: 18px;
		}

		.downright {
			width: 60%;
			height: 800px;
			border: 1px solid #A29FA2;
			float: right;

		}

		.downright h1 {
			font-size: 25px;
		}

		.downright p {
			text-align: right;
			font-size: 18px;
		}

		.footer {
			height: 30px;
			background-color: #584B77;
		}

		.footer p {
			padding: 5px;
			color: #fff;
			margin-left: 52px;
		}
	</style>

</head>

<body>
	<div class="allcontant templete clear">

		<div class="header clear">
			<div class="leftheader clear">
				<h1> {{$prescription->profile->bn_name}} </h1>
				<p>{{$prescription->profile->bn_degree_varsity}}</p>
				<p>রেজিঃ নং- {{$prescription->profile->reg_no}}</p>
				<p> বি.সি.এস.(প্রানি সম্পদ)</p>
				<h3> ভেটেরিনারি সারজন</h3>
				<h2>উপজেলা প্রানিসম্পদ দপ্তর</h2>
				<p> নরসিংদী সদর,নরসিংদী</p>
				<p> মুবাইল : ১৩২৪৬৭৬৪</p>



			</div>
			<div class="middlehead clear">
				<img src="{{asset('img/logo.jpg')}}" alt="doctors logo">



			</div>
			<div class="righthead clear">

				<h1> {{$prescription->profile->name}} </h1>
				<p>{{$prescription->profile->degree_varsity}}</p>
				<p>Reg No:- {{$prescription->profile->reg_no}}</p>
				<p> BCS (Livestock) </p>
				<h2> Vaterinary Surgeon</h2>
				<h3>Upazila Livestock office</h3>
				<p> Narsangdi sador,Narsingdi.</p>
				<p>Mobile: 6546544</p>


			</div>


		</div>

		<div class="maincontant clear">

			<div class="upercontant clear">
				<div class="upleft clear">
					<div style="padding:20px;">
						<p> farmers name : {{$prescription->farmer->name}}</p>
						<p> farmers mobile : {{$prescription->farmer->phone}}</p>
					</div>
				</div>
				<div class="upleft clear">
					<div style="padding:20px;">
						species: {{$prescription->species->species}} <br>
						for: {{$prescription->species->for}} <br>
						age : {{$prescription->species->age}} <br>
						no of animal : {{$prescription->species->birds}} <br>
						weight : {{$prescription->species->weight}} <br>
						feeding : {{$prescription->species->feeding}} <br>
					</div>

				</div>
				<div class="upleft clear">
					<div style="padding:20px;">
						Owners complain :{{$prescription->complain->complain}}<br>
						Secrition<br>
						Illness fist seen : {{$prescription->complain->first_seen}}<br>
						Number of effected: {{$prescription->complain->affected}}<br>
						Medication : {{$prescription->complain->medication}}<br>
						Complain : {{$prescription->complain->complain}}<br>
					</div>
				</div>





			</div>
			<div class="downcontant clear">

				<div class="downleft clear">

					<h3> clinical sign : </h3>

					@foreach($prescription->signs as $sign)
					<li>{{$sign->details->name}}</li>
					@endforeach
					<h3>tenative digonstice</h3>

					@foreach($prescription->signs as $sign)
					<li>{{$sign->details->name}}</li>
					@endforeach

					@if($prescription->necropsies->count() >0)
					<h3>Necropsies</h3>

					@foreach($prescription->necropsies as $necropsy)
					<li>{{$necropsy->details->name}}</li>
					@endforeach
					@endif



					<h3>Advice</h3>

					@foreach($prescription->advices as $advice)
					<li>{{$advice->details->name}}</li>
					@endforeach


				</div>
				<div class="downright clear">
					<h1> Rx </h1>
					<p> Date :</p>

				</div>

			</div>

			<div class="footer">
				<P> প্রানি ও পাখিকে নিয়মিত টিকা দিন এবং ক্রিমির ঔষধ খাওয়ান। ঔষধের প্রত্তাহারকাল ও খামারের জৈব নিরাপত্তা মেনে চলুন। </P>
			</div>

		</div>
	</div>



</body>

</html>