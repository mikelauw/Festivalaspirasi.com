<!DOCTYPE html>

<head>
	@include('part.head')
</head>

<body class="style_4">

    <div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-5">
	                <a href="/"><img src="{{env('APP_URL')}}img/logo.svg" alt="" width="50" height="55"></a>
	            </div>
	            <div class="col-7">
	                <div id="social">
	                    <ul>
	                        <li><a href="/" style="font-size:25px"><i class="fa fa-home"></i></a></li>
							<li></li>
							<li><a href="#0" data-toggle="modal" data-target="#terms-txt" style="font-size:25px"><i class="fa fa-folder-open"></i></a></li>
							<li></li>
							<!-- <li><a href="#0" style="font-size:20px"><i class="fa fa-envelope-open"></i></a></li>
							<li></li> -->
	                        <li><a href="#0" data-toggle="modal" data-target="#about-txt" style="font-size:25px"><i class="fa fa-question-circle"></i></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</header>
    
 
    @yield('content')


    
    
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel" style="color:black !important">Available Soon</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Under Construction</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<div class="modal fade" id="about-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel" style="color:black !important">Apa sih festivalaspirasi.com ?</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Banyak pejabat publik yang memanfaatkan media sosial sebagai sarana untuk berkomunikasi dengan masyarakat. Bisa saling berbalas komentar terkait aktivitas yang dilakukan, atau isu terkini yang sedang dibahas.</p> 
					<p>Tetapi, untuk bisa mengumpulkan aspirasi yang kemudian dapat dieskalasi tidaklah mudah, karena isinya terlalu beragam.</p>
					<p>Anggota Dewan dari PSI Kota Bandung lalu berinisiatif untuk membuat website sebagai platform yang khusus menampung berbagai aspirasi masyarakat. Hal ini tentu akan mempermudah proses kerja mereka dalam menyerap aspirasi masyarakat.</p>
					<p>Jadi, tunggu apa lagi? Mari berkontribusi untuk jalannya Pemerintahan Kota Bandung yang lebih baik lagi!</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
    @include('part.foot')

</body>