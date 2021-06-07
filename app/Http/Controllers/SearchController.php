<?php

namespace App\Http\Controllers;

use App\Models\search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\search  $search
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $deta=DB::table('searches')->get();


       return view('search',compact('deta'));
    }

    public function result(Request $req)
    {

        $date = $req->get('date');
        $order_id = $req->get('order_id');
        $order_by = $req->get('order_by');
        $depot = $req->get('depot');
        $order_value = $req->get('order_value');


       $deta=DB::table('searches')->where(['date'=>$date])
                                  ->orwhere(['order_id'=>$order_id])
                                  ->orwhere(['order_by'=>$order_by])
                                  ->orwhere(['depot'=>$depot])
                                  ->orwhere(['order_value'=>$order_value])
                                  ->get();
   

       return view('search',compact('deta'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(search $search)
    {
        //
    }
}
