<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Carbon;

class UploadController extends Controller {

	public function upload(Request $request){

		$validatedData = $request->validate([
			'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			'fileName' => 'required|min:2|max:30',
		]);

		if ($validatedData) {
			// saving file to public/uploads
			$image = $request->file('file');
			$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads');
			$image->move($destinationPath, $input['imagename']);

			//saving to databsae
			$image = new Image;
			$image->hash = $input['imagename'];
			$image->name = $request->fileName;
			$image->created_at = Carbon::now()->format('Y-m-d H:i:s');
			$image->save();

			return back()->with('success','Image Upload successful');
		}
	}
}