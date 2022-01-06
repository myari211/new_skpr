<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;

class GuestController extends Controller
{
    public function index(){
        return view('guest.home');
    }


    public function service() {
        return view('guest.service');
    }


    public function work() {
        $project = DB::table('projects')->get();

        return view('guest.work', compact('project'));
    }

    public function work_details($id) {
        $project = DB::table('projects')->where('id', $id)->first();

        // dd($project);

        return view('guest.work_details', compact('project'));
    }

    public function self_assesment() {
        return view('guest.self_assesment');
    }

    public function proposal(){
        return view('guest.proposal');
    }

    public function self_assesment_request() {
        return view('guest.assesment');
    }

    public function self_assesment_post(Request $request) {
        $uuid = Uuid::uuid4()->getHex();

        $this->self_assesment_process($request, $uuid);

        return redirect()->route('result', $uuid);
    }   

    private function self_assesment_process($request, $uuid) {
        DB::table('self_asessments')
            ->insert([
                "id" => $uuid,
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "company_name" => $request->company_name,
                "q1" => $request->q1,
                "q2" => $request->q2,
                "q3" => $request->q3,
                "q4" => $request->q4,
                "q5" => $request->q5,
                "q6" => $request->q6,
                "q7" => $request->q7,
                "q8" => $request->q8,
                "q9" => $request->q9,
                "q10" => $request->q10,
                "q11" => $request->q11,
                "q12" => $request->q12,
                "q13" => $request->q13,
                "q14" => $request->q14,
                "q15" => $request->q15,
                "q16" => $request->q16,
                "q17" => $request->q17,
                "q18" => $request->q18,
                "q19" => $request->q19,
                "q20" => $request->q20,
                "q21" => $request->q21,
                "q22" => $request->q22,
                "q23" => $request->q23,
                "q24" => $request->q24,
                "q25" => $request->q25,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        }

    public function result($id) {
        $value = DB::table('self_asessments')
            ->where('id', $id)
            ->first();

        $number = 0;

        if($value->q1 === "yes") {
            $number = $number+1;
        }

        if($value->q2 === "yes") {
            $number = $number+1;
        }

        if($value->q3 === "yes") {
            $number = $number+1;
        }

        if($value->q4 === "yes") {
            $number = $number+1;
        }

        if($value->q5 === "yes") {
            $number = $number+1;
        }

        if($value->q6 === "yes") {
            $number = $number+1;
        }

        if($value->q7 === "yes") {
            $number = $number+1;
        }

        if($value->q8 === "yes") {
            $number = $number+1;
        }

        if($value->q9 === "yes") {
            $number = $number+1;
        }

        if($value->q10 === "yes") {
            $number = $number+1;
        }

        if($value->q11 === "yes") {
            $number = $number+1;
        }

        if($value->q12 === "yes") {
            $number = $number+1;
        }

        if($value->q13 === "yes") {
            $number = $number+1;
        }

        if($value->q14 === "yes") {
            $number = $number+1;
        }

        if($value->q15 === "yes") {
            $number = $number+1;
        }

        if($value->q16 === "yes") {
            $number = $number+1;
        }

        if($value->q17 === "yes") {
            $number = $number+1;
        }

        if($value->q18 === "yes") {
            $number = $number+1;
        }

        if($value->q19 === "yes") {
            $number = $number+1;
        }

        if($value->q20 === "yes") {
            $number = $number+1;
        }

        if($value->q21 === "yes") {
            $number = $number+1;
        }

        if($value->q22 === "yes") {
            $number = $number+1;
        }

        if($value->q23 === "yes") {
            $number = $number+1;
        }

        if($value->q24 === "yes") {
            $number = $number+1;
        }

        if($value->q25 === "yes") {
            $number = $number+1;
        }

        $result = ($number/25)*100;
        
        return view('guest.result', compact('value', 'result'));
    }
}
