<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Timesheet;
class TimesheetController extends Controller
{
    public function GetTimesheets()
    {
    return DB::table('timesheets')
    ->join('projects','timesheets.project_id','=','projects.id')
    ->join('categories','timesheets.category_id','=','categories.id')
    ->join('clients','timesheets.client_id','=','clients.id')
    ->join('users','projects.member_id','=','users.id')
    ->get([
        'timesheets.*',
        'projects.projectname',
        'clients.clientname',
        'users.name',
        'categories.categoryname'
    ]);
    }
    public function GetTimesheet($id)
    {
        return DB::table('timesheets')
        ->where('timesheets.id',$id)
        ->join('projects','timesheets.project_id','=','projects.id')
        ->join('categories','timesheets.category_id','=','categories.id')
        ->join('clients','timesheets.client_id','=','clients.id')
        ->join('users','projects.member_id','=','users.id')
        ->get([
            'timesheets.*',
            'projects.projectname',
            'clients.clientname',
            'users.name'
        ]);
    }
    public function PostTimesheet(Request $request)
    {
        DB::table('timesheets')->insert([
            'description' => $request->description,
            'time' => $request->time,
            'overtime' => $request->overtime,
            'date' => $request->date,
            'project_id' => $request->project_id,
            'category_id' => $request->category_id,
            'client_id' => $request->client_id,
        ]);
    }
}
