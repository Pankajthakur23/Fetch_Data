<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    public function Index()

    {
        $data['employee']=Employee::all();
        return view('Index',$data);
    }

}
