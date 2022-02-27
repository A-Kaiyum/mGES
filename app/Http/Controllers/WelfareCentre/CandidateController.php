<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function showCandidateProfile($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('WelfareCentre.candidate.show-candidate-profile', compact('offeredCandidate'));
    }
}
