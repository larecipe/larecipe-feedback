<?php

namespace BinaryTorch\LarecipeFeedback;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string
     */
    protected $table = "larecipe_feedbacks";
}
