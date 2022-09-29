<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function GetMembers()
    {
        return DB::table('members')->paginate(5);
    }
    public function GetMember($id)
    {
        return DB::table('members')->find($id);
    }
    public function PostMember(Request $request)
    {
        DB::table('members')->insert([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'hours' => $request->hours,
            'status' => $request->status,
            'role' => $request->role
        ]);
    }
    public function UpdateMember(Request $request,$id)
    {
        DB::table('members')->where('id',$id)->update([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'hours' => $request->hours,
            'status' => $request->status,
            'role' => $request->role
        ]);
    }
    public function DeleteMember($id)
    {
        DB::table('members')->delete($id);
    }
    public function SearchMembers(Request $request)
    {
        $query = $request->query('search');
        return DB::table('members')->where('fullname','LIKE','%'.$query.'%')->get();
    }
}
