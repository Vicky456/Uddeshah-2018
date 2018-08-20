<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.events');
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
        //dump($request);
        //
        if ($request->hasFile('profileimg')) {
            if ($request->file('profileimg')->isValid()) {
                try {


                    // $file = file_get_contents($request->file('profileimg'));//$request->file('profileimg');


                    $file = Input::file('file');
                    $type = pathinfo($file, PATHINFO_EXTENSION);
                    $imagedata = file_get_contents($request->file('profileimg'));


                    $img = 'data:image/' . $type . ';base64,' . base64_encode($imagedata);
                    //echo "<img src='$img'  />";


                    $sql="INSERT INTO `event_table` (`id`, `img`, `event_name`, `event_desc`, `flag_lable`, `dept`, `date_on`, `price`, `loc`) VALUES (NULL, '".$img."', '".$request->ename."', '".base64_encode($request->desc)."', '".$request->falg."', '".$request->club."', '".$request->date."','".$request->price."', '".$request->loc."')";

                    $ck=DB::connection('mysql')->select($sql);
                    $ck1=DB::connection('mysql')->select("UPDATE `event_catlog` SET `count`=`count`+1 WHERE `event_name`='".$request->falg."'");
                    if($ck){
                        echo "success";
                    }

                } catch (FileNotFoundException $e) {
                    echo "Error on Upload";

                }
            }
            return redirect("/Events");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
