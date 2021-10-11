<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {
        return view('user');
    }


    public function create()
    {
        return view('create-user');
    }


    public function exportUser()
    {
        // return (new UsersExport)->download('users.csv', \Maatwebsite\Excel\Excel::CSV);
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
