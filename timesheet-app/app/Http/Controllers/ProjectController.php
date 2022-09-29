<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function GetProjects()
    {
    //   $member = Member::find(1);
    //   return $member->projects()->get();
    //return DB::table('projects')->join('members','projects.member_id','=','members.id')->get(['projects.id','projects.projectname','members.fullname']);
    return DB::table('projects')
    ->join('members','projects.member_id','=','members.id')
    ->join('clients','projects.client_id','=','clients.id')
    ->get(['projects.*','members.fullname','members.username','members.email','members.status','members.role','members.hours',
    'clients.clientname','clients.adress','clients.city','clients.postalcode','clients.country'
    ]);
    }
    public function GetProject($id)
    {
        return DB::table('projects')
        ->where('projects.id',$id)
        ->join('members','projects.member_id','=','members.id')
        ->join('clients','projects.client_id','=','clients.id')
        ->get(['projects.*','members.fullname','members.username','members.email','members.status','members.role','members.hours',
        'clients.clientname','clients.adress','clients.city','clients.postalcode','clients.country'
        ]);
    }
    public function PostProject(Request $request)
    {
        DB::table('projects')->insert([
            "projectname" => $request->projectname,
            "description" => $request->description,
            "archive" => $request->archive,
            "status" => $request->status,
            "client_id" => $request->client_id,
            "member_id" => $request->member_id,
        ]);
    }
    public function UpdateProject(Request $request,$id)
    {
        DB::table('projects')->where('id',$id)->update([
            "projectname" => $request->projectname,
            "description" => $request->description,
            "archive" => $request->archive,
            "status" => $request->status,
            "client_id" => $request->client_id,
            "member_id" => $request->member_id,
        ]);
    }
    public function DeleteProject($id)
    {
        DB::table('projects')->where('id',$id)->delete();
    }
    public function SearchProjects(Request $request)
    {
        $querystring = $request->query('search');
        return DB::table('projects')->where('projectname','LIKE','%'.$querystring.'%')->get();
    }
}
