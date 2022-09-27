<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Member::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newmember = new Member;
        $newmember->fullname = $request->fullname;
        $newmember->username = $request->username;
        $newmember->password = $request->password;
        $newmember->email = $request->email;
        $newmember->hours = $request->hours;
        $newmember->status = $request->status;
        $newmember->role = $request->role;
        $newmember->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return $member;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newmember = Member::find($id);
        $newmember->fullname = $request->fullname;
        $newmember->username = $request->username;
        $newmember->password = $request->password;
        $newmember->email = $request->email;
        $newmember->hours = $request->hours;
        $newmember->status = $request->status;
        $newmember->role = $request->role;
        $newmember->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memberfordelete = Member::find($id);
        $memberfordelete->delete();
    }
}
