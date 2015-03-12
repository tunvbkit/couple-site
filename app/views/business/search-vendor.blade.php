<ul class="result-search">
	@if(!empty($check))
		@foreach($vendors as $vendor)
			<li onclick="seclectVendor({{$vendor->id}})">{{$vendor->name}}</li>
			<input type="hidden" class="li-result{{$vendor->id}}" value='{{$vendor->id}}'>
		@endforeach()	
	@else
		<li>Tên người nhận không tồn tại</li>
	@endif
</ul>

