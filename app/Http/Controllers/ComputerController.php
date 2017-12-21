<?php

namespace App\Http\Controllers;
use App\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComputerController extends Controller
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
    public function create(Request $request)
    {
        //
        // dd($request->id);
        return view('computers.create',[
            'lab_id'=>$request->id
        ]);
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
        $computer = new Computer();
        $computer->name = $request->name;
        $computer->ip = $request->ip;
        $computer->link = $request->link;
        $computer->lab_id = $request->lab_id;
        $computer->save();
        // return redirect('dashboard')->with('status', 'Profile updated!');
        return redirect()->action('LabController@show', ['id' => $request->lab_id])->with('status', 'Add Computer Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // check respond code file
        // 
        // 
        //         
        // function checkExternalFile($url)
        // {
        //     $ch = curl_init($url);
        //     curl_setopt($ch, CURLOPT_NOBODY, true);
        //     curl_exec($ch);
        //     $retCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //     curl_close($ch);
        
        //     return $retCode;
        // }
        // $computer = Computer::find($id);
        
        // $fileExists = checkExternalFile($computer->link);
        // echo $fileExists;


        // $computers = DB::table('computers')->where('lab_id', $id)->get();
        $computer = Computer::find($id);
        return view('computers.show',[
                        'computer'=>$computer
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
        $computer = Computer::find($id);
        $computer->delete();
        return redirect()->action('LabController@show', ['id' => $computer->lab_id])->with('status', 'Delete Computer Done');
    }

   
}
