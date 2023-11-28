<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\SaveFeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    
    public function index()
    {
        return view('website.feedback');
    }

    public function save(SaveFeedbackRequest $request)
    {
        Feedback::create($request->all());
        toastr()->success('feedback has been send succussfully');
        return redirect()->route('home');
    }

}
