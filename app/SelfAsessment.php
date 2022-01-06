<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelfAsessment extends Model
{
    protected $table = [
        "self_asessments"
    ];

    protected $fillable = [
        "id",
        "first_name",
        "last_name",
        "email",
        "company_name",
        "q1",
        "q2",
        "q3",
        "q4",
        "q5",
        "q6",
        "q7",
        "q8",
        "q9",
        "q10",
        "q11",
        "q12",
        "q13",
        "q14",
        "q15",
    ];

    public $incrementing = false;
}
