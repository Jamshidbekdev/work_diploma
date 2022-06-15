<?php
namespace App\Traits;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

trait FileStorage
{
    public static function crop(Request $request, int $width, int $height, string $folder_name)
    {
        // dd($request);
        // if ($user->img != '') {
        //     unlink(storage_path('app\public\\' . $user->img));
        // }
        //Make directory for avatar
        Storage::disk('public')->makeDirectory($folder_name);

        // $image_name = $request->file('img')->store('users',['disk'=>'public']);
        $image_name = time() . $request->file('img')->getClientOriginalName();
        $full_path_thumb = storage_path('app/public/'.$folder_name.'/' . $image_name);

        // Crop Image
        $thumbs = Image::make($request->file('img'));
        $thumbs
            ->fit($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($full_path_thumb);

        $image_name = $folder_name.'/'.$image_name;

        return $image_name;
    }
}
?>
