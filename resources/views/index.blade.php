<!DOCTYPE html>
<html>
<head>
	<title>Jango | Portfolio</title>
	<!-- Bootstrap 4 Required Scripts [Part 1] -->
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_index.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,900,900i|Roboto:100,300,400,900,900i|Raleway:100,600" rel="stylesheet">

</head>
<body>
	<div class="spacingmaster"></div> <!--hidden div for spacing-->

	<div class="container c1">

		<h1>Jango Agustin</h1>
		<table>
			<tr>
				<th class="nav-th animated pulsar"><h2 class="raleway600"><a href="/" class="links-th">HOME</a></h2></th>
				<th class="nav-th animated pulsar"><h2 class="raleway600"><a href="/index" class="links-th">PORTFOLIO</a></h2></th>
				<th class="nav-th animated pulsar"><h2 class="raleway600"><a href="#bottom" class="links-th">CONTACT</a></h2></th>
			</tr>
		</table>

	</div> <!--/.c1-->

	<div class="spacingmaster"></div> <!--hidden div for spacing-->

	<div class="container c2">
		<div class="row r1">

		@foreach ($projects as $project)
		<!-- THUMBNAIL 1 SQUARE 500x500-->
        <div class="thumbnailz col-lg-12 col-md-12 col-sm-12 col-xs-12 animated flipInX">
          <a href='' class="">
            <img class="img-fluid" src="/images/capstones/{{ $project->project_thumbnail }}" alt="">
          </a>
          <div class="schwing">
            
            <div class="card text-center card-schwing animated pulsar">
              <div class="card-body d-flex flex-column">
                <p class="card-title d-flex align-self-center ">

                    {{ $project->project_title }}

                </p>
                <p class="card-text d-flex align-self-center">

                    {{ $project->project_description }}

              	</p>
              	<div class="d-flex justify-content-center mt-auto">
                	<a href='{{ $project->link }}' class="btn btn-outline-info thumbnailz-btn">View Website</a>
            	</div>
              </div>
            </div>

          </div>
        </div>
        @endforeach
		

		</div> <!--/.r2-->
	</div><!--/.c2-->


	<div class="spacingmaster"></div> <!--hidden div for spacing-->

	<div class="spacingmaster-x2"></div> <!--hidden div for spacing-->
	<div class="spacingmaster-x2"></div> <!--hidden div for spacing-->

	@include ('footers.footermaster')

	<!-- Bootstrap 4 Required Scripts [Part 2] -->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>