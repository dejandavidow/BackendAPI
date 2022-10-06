<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{
    public function GetClients()
    {
        return DB::table('clients')->paginate(5);
    }
    public function GetClient($id)
    {
        return DB::table('clients')->find($id);
    }
    public function PostClient(Request $request)
    {
        return DB::table('clients')->insert([
            'clientname' => $request->clientname,
            'adress' => $request->adress,
            'city' => $request->city,
            'postalcode' => $request->postalcode,
            'country' => $request->country,
        ]);
    }
    public function UpdateClient(Request $request,$id)
    {
        return DB::table('clients')->where('id',$id)->update([
            'clientname' => $request->clientname,
            'adress' => $request->adress,
            'city' => $request->city,
            'postalcode' => $request->postalcode,
            'country' => $request->country,
        ]);
    }
    public function DeleteClient($id)
    {
        return DB::table('clients')->where('id',$id)->delete();
    }
    public function Search(Request $request)
    {
        $querystring = $request->query('search');
        return DB::table('clients')->where('clientname','LIKE','%'.$querystring.'%')->paginate(5);
    }
}
