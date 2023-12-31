@extends('layouts.master')
@section('title','Frequently Asked Questions')
@section('content')

			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Frequently Asked Questions</h2>
						{{-- <p>{!! $tangkap2->deskripsicarousel !!}</p> --}}
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!--
			=====================================================
				Faq Page
			=====================================================
			-->
			<div class="faq-page section-spacing">
				<div class="container">
					<div class="theme-title-one">
						{{-- <h2 class="text-center">Frequently Asked Questions</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
					</div> <!-- /.theme-title-one -->

	        		<div class="faq-panel">
						<div class="panel-group theme-accordion" id="accordion">
							<?php $count = 0 ?>
                    		@foreach ( $faq as $row )
							<div class="panel">
								<div class="panel-heading @if($count == 0) active-panel @endif">
									<h6 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$count}}">
											<p>{!! $row->pertanyaan !!}</p>
										</a>
									</h6>
								</div>
								<div id="collapse{{$count}}" class="panel-collapse collapse @if($count == 0) show @endif">
									<div class="panel-body">
										<p>{!! $row->jawaban !!}</p>
									</div>
								</div>
							</div> <!-- /panel 1 -->
							<?php $count++ ?>
							@endforeach
						</div> <!-- end #accordion -->
					</div> <!-- /.faq-panel -->
				</div> <!-- /.container -->
			</div> <!-- /.faq-page -->


@endsection