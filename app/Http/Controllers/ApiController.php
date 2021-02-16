<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Controllers\Controller;


class ApiController extends Controller
{
    public function getAllMemes() {
        $memes = Image::get()->toJson(JSON_PRETTY_PRINT);
        return response($memes, 200);
    }

    public function createMeme(Request $request) {
        $meme = new Image;
   	    $meme->name = $request->name;
    	$meme->caption = $request->caption;
    	$meme->avatar = $request->avatar;
    	$meme->save();
    	echo $meme->caption;
    	return response()->json([
        "message" => "MEME record created"
    	], 201);
    }

  
}
