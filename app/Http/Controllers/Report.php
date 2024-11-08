<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Report extends Controller
{
    //
    public function generateUsersReport()
    {
        $users = User::all(); // Assuming you have a User model and users table
        $pdf = PDF::loadView('report', ['users' => $users]);
        return $pdf->download('users_report.pdf');
    }

}
