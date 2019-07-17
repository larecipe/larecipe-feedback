<?php

namespace BinaryTorch\LarecipeFeedback\Http\Controllers;

use Illuminate\Http\Request;
use BinaryTorch\LarecipeFeedback\Feedback;
use BinaryTorch\LarecipeFeedback\Events\FeedbackReceived;

class FeedbackController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'rate'     => 'required|integer|min:1|max:5',
            'document' => 'required|string',
        ]);

        $feedback = Feedback::create([
            'document' => $request->document,
            'rate'     => $request->rate,
            'user_id'  => auth()->user() ? auth()->user()->getKey() : null,
        ]);

        event(new FeedbackReceived($feedback));

        return response()->json(['message' => 'Feedback received']);
    }
}