<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
		  crossorigin="anonymous">
	<link rel="stylesheet"
		  href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
	<link rel="stylesheet"
		  href="css/test.css"
</head>
<body class="test">
<div class="container">
	<div class="row scaffold-bar">
		<span>{{App Titel}}</span>
	</div>
	<div class="controllable-bar">
		<div class="row togglebtn justify-content-center">
			<div>
				<i class="fa-duotone fa-power-off fa-6x"></i>
			</div>
		</div>
		<div class="row">
			<div class="slidecontroll">
				<label for="customRange1"
					   class="form-label">{{Option1}}</label>
				<input type="range"
					   class="form-range"
					   min="0"
					   max="5"
					   step="0.5"
					   id="customRange1"
					   value="0">

				<label for="customRange2"
					   class="form-label">{{Option2}}</label>
				<input type="range"
					   class="form-range"
					   min="0"
					   max="5"
					   step="0.5"
					   id="customRange2"
					   value="0">

				<label for="customRange3"
					   class="form-label">{{Option3}}</label>
				<input type="range"
					   class="form-range"
					   min="0"
					   max="5"
					   step="0.5"
					   id="customRange3"
					   value="0">
			</div>
		</div>
		<div class="row freqsettings">
			<div class="col-6">
				<label for="minfreq">{{MinFreq}}</label>
				<input type="text" id="minfreq" value="1000Hz">
			</div>
			<div class="col-6">
				<label for="maxfreq">{{MaxnFreq}}</label>
				<input type="text" id="maxfreq" value="1588Hz">
			</div>
		</div>
	</div>
</div>
</body>
</html>