<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('Resources/assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Resources/assets/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{ asset('Resources/assets/images/img-01.png') }}" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="{{route('send.email') }}">
				@csrf
                <span class="contact1-form-title">
					Send Mail!
				</span>
              <h5> <span>From</span> </h5>
                <x-input type="text" name="sender" id="sender" placeholder=" Email"/>
                <h5> <span>To</span> </h5>
                <x-input type="text" name="name" id="name" placeholder="Name"/>
                <x-input type="text" name="email" id="email" placeholder="Receiver email"/>
                <x-input type="text" name="title" id="title" placeholder="Title"/>
                <x-input type="text" name="message" id="message" placeholder="Message"/>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('Resources/assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Resources/assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Resources/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Resources/assets/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Resources/assets/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="{{ asset('Resources/assets/js/main.js') }}"></script>

</body>
</html>
