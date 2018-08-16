@extends('fontend.inc.template')
@section('content')
<div class="text-center" style="padding-top: 10px">
	<form action="{{route('Share')}}">		
		<a class="my-btn" style="color: #ffffff;">
			เลือกรูป
		</a>
		<br><br>
		@if($data == 1)
		<div class="container-fluid">		
			<img src="{{asset('images/protect.png')}}" alt="frame" style="width: 100%;">
			<br><br>
		</div>
		@elseif($data == 2)
		<div class="container-fluid">		
			<img src="{{asset('images/activity.png')}}" alt="frame" style="width: 100%;">
			<br><br>
		</div>
		@elseif($data == 3)
		<div class="container-fluid">		
			<img src="{{asset('images/manage.png')}}" alt="frame" style="width: 100%;">
			<br><br>
		</div>
		@elseif($data == 4)
		<div class="container-fluid">		
			<img src="{{asset('images/opportunity.png')}}" alt="frame" style="width: 100%;">
			<br><br>
		</div>
		@endif
		<div class="container-fluid">
			<a class="my-btn" style="background-color: #2161BF;color: #ffffff;padding-bottom: 20px;">ตกแต่งให้สวยงามด้วย Sticker</a>
			<img src="{{asset('images/sticker_panel.png')}}" alt="sticker_panel" style="width: 100%;margin-top: -10px">
			<br><br>
			<input type="submit" class="my-btn" value="ตกลง">
		</div>
	</form>
</div>
@endsection