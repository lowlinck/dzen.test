<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class StoreContoller extends Controller
{
   public function __invoke(StoreRequest $request)
   {
       $request->validate();
       $input = $request->all();
       $input['user_id'] = auth()->user()->id;

       Comment::create($input);
       return back();
   }
}
