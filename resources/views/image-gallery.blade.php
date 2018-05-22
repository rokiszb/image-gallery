
<div class="upload-container">
	<form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
		<label for="fileName">File Name</label>
		<input type="text" name="fileName" id="fileName">
		<label>Select image to upload:</label>
		<input type="file" name="file" id="file">
		<input type="submit" value="Upload" name="submit">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
	</form>
</div>
<div class="image-gallery">
	@foreach($images as $image)
		<div class="image">
			<img title="{{ $image->name }}" src="{!! asset('uploads/'.$image->hash.'') !!}" alt="{{ $image->name }}">
		</div>
	@endforeach
</div>
{{ $images->links() }}

