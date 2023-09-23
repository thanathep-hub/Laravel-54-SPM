<?php

namespace App\Http\Controllers\GR60;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class JobDtController extends Controller
{
    public function JobDtShow()
    {
        $listJobDt = DB::select(/** @lang text */ "
        SELECT DISTINCT vPdIndexJobDt.JobNo, StrainCode, SeedTypeName, FmName, ZoneName_, SeasonCode, PsName, vPdIndexJobDt.idJob, dSsJobReceiveFm.Status, Weight, Humidity 
	        FROM vPdIndexJobDt
	        LEFT JOIN devsk.dSsJobReceiveFm ON vPdIndexJobDt.idJob = dSsJobReceiveFm.idJob
	        WHERE 1 = 1 AND idSeasonPd = '88' AND stCancel IS NULL AND idJobLine <> '10'"
        );

        //dd($listJobDt);
       return view('GR60.JobDtGR', compact('listJobDt'));
       // return view('GR60.JobDtGR', ['listJobDt' => $listJobDt]);
    }
    public function update(Request $request, $id){
        dd("test");
    }
}
