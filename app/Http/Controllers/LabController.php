<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lab;
use Illuminate\Support\Facades\DB;


class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $labs = Lab::all();
            return view('labs.index',[
            'labs' => $labs
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('labs.create');
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
        $lab = new Lab();
        $lab->name = $request->name;
        $lab->type = $request->type;
        $lab->max_coms = $request->max_coms;
        $lab->save();
        // return redirect('dashboard')->with('status', 'Profile updated!');
        return redirect()->action('LabController@index')->with('status', 'Profile updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // *** โชว์ทุกอันที่มีไอดีเข้ามา
        $lab = Lab::find($id);

        $computers = DB::table('computers')->where('lab_id', $id)->get();
        return view('labs.show',[
                        'computers'=>$computers,
                        'lab'=>$lab
                        
                        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lab = Lab::find($id);
        $lab->delete();
        return redirect()->action('LabController@index')->with('status', 'Delete Lab Done');

    }
}
