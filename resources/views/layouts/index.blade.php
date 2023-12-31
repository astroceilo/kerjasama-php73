@extends('layouts.master')
@section('title','Beranda')
@section('content')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
  window.onload = function() {
  
  var chart = new CanvasJS.Chart("chartPie", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	// title: {
	//   text: "Statistik Kerjasama"
	// },
	data: [{
	  type: "pie",
	  startAngle: 90,
      showInLegend: "true",
      legendText: "{label}",
	  yValueFormatString: "##0.00\"%\"",
	  // indexLabel: "{label} {x}({y})",
	  indexLabel: "{label} ({y})",
	  dataPoints: [
		{x: {{ $mou }},y: {{ ($mou / ($mou + $moa)) * 100 }}, label: "MoU"},
		{x: {{ $moa }},y: {{ ($moa / ($moa + $mou)) * 100 }}, label: "MoA"},
	  ]
	}]
  });
  chart.render();
  
  }
</script>
			
<!-- 
=============================================
	Theme Main Banner
============================================== 
-->
<div id="theme-main-banner" class="banner-one">
	<?php $count = 1;?>
	@foreach ( $tangkap1 as $row )
	<div data-src="{{ asset('storage/' . $row->poto) }}" class="@if($count == 1) active @endif">
		<div class="camera_caption">
			<div class="container">
				<p class="wow fadeInUp animated"><strong>{{ $row->judulcarousel }}</strong></p>
				<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">{!! $row->deskripsicarousel !!}</h1>
				<a href="/mitra" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">MITRA</a>
			</div> <!-- /.container -->
		</div> <!-- /.camera_caption -->
	</div>
	<?php $count++;?>
	@endforeach
</div> <!-- /#theme-main-banner -->


<!-- 
=============================================
	About Company Style Two
============================================== 
-->
<div class="about-compnay-two section-spacing">
	<div class="overlay">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-6 col-12 text">
					<div class="theme-title-one">
						<h2>{{ $tangkap3->judul }}</h2>
					</div> <!-- /.theme-title-one -->
					<p>{!! $tangkap3->deskripsi !!}</p>
				</div> <!-- /.col- -->
				<div class="col-lg-6 col-12 wrap">
					<iframe class="rounded" width="560" height="315" src="{{ $tangkap3->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					{{-- <div class="img-box">
						<a data-fancybox href="https://www.youtube.com/watch?v=yprwfSH4h9c" class="play">
							<i class="fa fa-play" aria-hidden="true"></i>
						</a>
					</div> --}}
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.overlay -->
</div> <!-- /.about-compnay-two -->


<!-- 
=============================================
	About Wakil Rektor
============================================== 
-->
<div class="about-compnay section-spacing" id="first">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 text-center">
				<img src="{{ asset('storage/' . $tangkap2->poto) }}" alt="img" style="width: 50%; display: initial;">
			</div>
			<div class="col-lg-6 col-12">
				<div class="text">
					<div class="theme-title-one">
						<h2 style="text-align: center;">Sambutan Wakil Rektor</h2>
						{{-- <p>{!! $tangkap2->deskripsi !!}</p> --}}
						<p>
							{!! Str::substr($tangkap2->deskripsi, 0, 300) !!}
						</p>
					</div> <!-- /.theme-title-one -->
					<div class="row mt-3">
						<div class="col-lg-6">
							<p><strong>{{ $tangkap2->nama }}</strong></p>
							<p>{{ $tangkap2->jabatan }}</p>
							{{-- <p>NIP. {{ $tangkap2->nip }}</p> --}}
						</div>
						<div class="col-lg-6">
							<a class="theme-button-one float-right" href="/wakil-rektor">Selanjutnya</a>
						</div>
					</div>
				</div> <!-- /.text -->
			</div> <!-- /.col- -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.about-compnay -->


<!--
=====================================================
	Free Consultation
=====================================================
-->
<div class="consultation-form section-spacing">
	<div class="container">
		{{-- <div class="theme-title-one">
			<h2 style="text-align: center;">Statistik Kerjasama</h2>
			<p style="text-align: center;">Bagian Kerjasama dan Pengembangan Lembaga UIN Sunan Gunung Djati Bandung</p>
		</div> <!-- /.theme-title-one --> --}}
		<div class="clearfix main-content no-gutters row">
			<div class="col-xl-6 col-lg-5 col-12">
				<div class="form-wrapper">
					<div class="theme-title-one">
						<h2 style="text-align: center;">Statistik Kerjasama</h2>
						<p style="text-align: justify;">Bagian Kerjasama dan Pengembangan Lembaga UIN Sunan Gunung Djati Bandung</p>
						<div class="row">
							<div class="col-lg-12 pt-4">
								<a class="theme-button-one float-left" href="/mitra">Selanjutnya</a>
							</div>
						</div>
					</div> <!-- /.theme-title-one -->
				</div> <!-- /.form-wrapper -->
			</div>
			<div class="col-xl-6 col-lg-7 col-12">
            	<div class="m-2" id="chartPie" style="height: 300px; width: 100%; padding-top: 50px;"></div>
			</div> <!-- /.col- -->
		</div> <!-- /.main-content -->
	</div> <!-- /.container -->
</div> <!-- /.consultation-form -->


<!-- 
=============================================
	About Company Style Two
============================================== 
-->
<div class="about-compnay-two section-spacing">
	<div class="overlay">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-6 col-12 wrap">
					<iframe class="rounded" width="560" height="315" src="{{ $tangkap4->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					{{-- <div class="img-box">
						<a data-fancybox href="https://www.youtube.com/watch?v=yprwfSH4h9c" class="play">
							<i class="fa fa-play" aria-hidden="true"></i>
						</a>
					</div> --}}
				</div>
				<div class="col-lg-6 col-12 text">
					<div class="theme-title-one">
						<h2>{{ $tangkap4->judul }}</h2>
					</div> <!-- /.theme-title-one -->
					<p>{!! $tangkap4->deskripsi !!}</p>
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.overlay -->
</div> <!-- /.about-compnay-two -->


<!--
=====================================================
	Latest News
=====================================================
-->
<div class="our-blog latest-news section-spacing">
	<div class="container">
		<div class="theme-title-one text-center">
			<h2>Berita Terbaru</h2>
			{{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers </p> --}}
		</div> <!-- /.theme-title-one -->
		<div class="wrapper">
			<div class="clearfix">
				<div class="latest-news-slider">
					@foreach ( $berita as $row )
					<div class="item">
						<div class="single-blog">
							<div class="image-box">
								<img src="{{ asset('storage/' . $row->poto) }}" alt="Image">
								<div class="overlay">
									<a href="#" class="date">
										{{ Carbon\Carbon::parse($row->created_at)->locale('id')->translatedFormat('l, d F Y') }}
									</a>
								</div>
							</div> <!-- /.image-box -->
							<div class="post-meta">
								<h5 class="title"><a href="{{ route('berita-detail', $row->slug) }}">{{ $row->judul }}</a></h5>
								<a href="{{ route('berita-detail', $row->slug) }}" class="read-more" style="text-decoration: none;">READ MORE</a>
							</div> <!-- /.post-meta -->
						</div> <!-- /.single-blog -->
					</div> <!-- /.col- -->
					@endforeach
				</div> <!-- /.latest-news-slider -->
			</div> <!-- /.row -->
		</div> <!-- /.wrapper -->
	</div> <!-- /.container -->
</div> <!-- /.our-blog -->


@endsection