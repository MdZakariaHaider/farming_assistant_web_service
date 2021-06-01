<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;


class ReportController extends Controller
{
   public function Report(){
    $title = 'Report';
    $search =[];
    
       return view('Backend.content.Report',compact('title','search')) ;
   }

   public function ReportGenerate(){
    $title = 'Report';
    $search =[];
        if (isset($_GET['from_date'])) {
            $from_date = date('Y-m-d', strtotime($_GET['from_date']));
            $to_date = date('Y-m-d', strtotime($_GET['to_date']));

        }
            if ($to_date<$from_date) {
                return redirect()->back()->with('error', 'Date is not correct');
            }
            $search = booking::whereBetween('created_at',[$from_date, $to_date])->get();
            // dd($search);
            return view('Backend.content.Report',compact('title','search')) ;

   }
}
