<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

use DB;

use Illuminate\Support\Facades\Auth;

class PdfGeneratorController extends Controller
{
    public function requestPdf(Request $request)
    {
        $data = DB::select('select firstName, lastName, email, phone, rankName, source, destination, startDate, endDate, requests.created_at, divisionTitle,requestDesc, approveStatus 
        from requests,users,ranks,roles,divisions 
        where requestId = ? and users.rankId = ranks.rankId and roles.roleId = users.roleId and requests.userId = users.id and divisions.divisionId = users.divisionId',
        [$request->requestId]);
         
        $pdf = PDF::loadView('User.requestPdf',['data' => $data]);
       return $pdf->download('myrequest_pdf.pdf');
        return view('User.requestPdf',['data' => $data]);
        //return redirect('request');
    }
}
