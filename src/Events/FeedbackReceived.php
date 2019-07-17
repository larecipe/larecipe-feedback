<?php

namespace BinaryTorch\LarecipeFeedback\Events;

use Illuminate\Queue\SerializesModels;
use BinaryTorch\LarecipeFeedback\Feedback;
use Illuminate\Foundation\Events\Dispatchable;

class FeedbackReceived
{
    use Dispatchable, SerializesModels;

    public $feedback;

    /**
     * Create a new event instance.
     *
     * @param Feedback $feedback
     */
    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
    }
}
