@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Coming Soon Page')

@push('css')
    <link href="/assets/plugins/countdown/jquery.countdown.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin coming-soon -->
	<div class="coming-soon height-full">
		<!-- begin coming-soon-header -->
		<div class="coming-soon-header height-full d-flex flex-column align-items-centet justify-content-center">
			<div class="bg-cover"></div>
			<div class="desc">
				Our site is almost there and it’s rebuilt from scratch! A lot of great new features <br />and improvements are coming.
			</div>
			<div class="timer">
				<div id="timer"></div>
			</div>
            <!-- begin coming-soon-content -->
            <div class="coming-soon-content text-white" style="z-index: 99">
                <div class="desc">
                    We are launching a closed <b>beta</b> soon!<br /> Sign up to try it before others and be the first to know when we <b>launch</b>.
                </div>
                <p>
                    Follow us on 
                    <a href="javascript:;" class="text-white"><i class="fab fa-twitter fa-lg fa-fw text-info"></i> Twitter</a> and 
                    <a href="javascript:;" class="text-white"><i class="fab fa-facebook fa-lg fa-fw text-blue"></i> Facebook</a>
                </p>
            </div>
            <!-- end coming-soon-content -->
		</div>
		<!-- end coming-soon-header -->
	</div>
	<!-- end coming-soon -->
@endsection

@push('scripts')
<script src="/assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="/assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="/assets/js/demo/coming-soon.demo.js"></script>
@endpush