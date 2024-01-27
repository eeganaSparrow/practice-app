<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Models\Tweet;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request)
    {
        $tweet = Tweet::where('id', $request->id())->firstOrFail();
        return view('tweet.update')
            ->with('tweet', $tweet);
    }
}
