<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teacher_deatil extends Controller
{
    function hello(){
        echo "hello";
    }

    function teacher_detail(){
        $data = DB::table('teacher_details')->orderBy('position_num','ASC')->get();
        //printf($data);
        return view('teacher_detail', ['results' => $data]);
    }

    function main_page(){
        return view('main');
    }

    function semster($branch){
        //printf($branch);
       
        return view("semster")->with('branch',$branch);
    }

    function branch(){
        //printf($req["data"]);
        //printf($dataa);
        return view("branch");
    }

    function time_table($branch,$sem){
        $data = DB::table("time_table_pdf")->where("branch",$branch)->where("sem_num",$sem)->get();
        //printf($data);
        //return view("time_table");
        if ($data->count() > 0) {
            //ofund
            return view('time_table',['results' => $data]);
            // Query returned data
            // Perform actions when there is data
        } else {
            return view('file_not');
            //nopeee
            // Query returned null or empty result set
            // Perform actions when there is no data
        }
    }

    function query($query){
        $data = DB::table("user_data")->where('roll_no','like','%'.$query.'%')->orWhere('name','like','%'.$query.'%')->get();
        //printf($data);

        
        if ($data->count() > 0) {
            //ofund
            return view('search',["results"=>$data]);
            // Query returned data
            // Perform actions when there is data
        } else {
            return view('no_record');
            //nopeee
            // Query returned null or empty result set
            // Perform actions when there is no data
        }
    }

    function mst($roll_num){
        $data = DB::table("user_data")->where("roll_no",$roll_num)->get();
        $data2 = DB::table("mst_record")->where("roll_no",$roll_num)->get();
        //printf($data);
        //printf($data2);
        if ($data->count() > 0) {
            //ofund
            return view("mst",["results"=>$data , "results2"=>$data2]);
            // Query returned data
            // Perform actions when there is data
        } else {
            return view('no_record');
            //nopeee
            // Query returned null or empty result set
            // Perform actions when there is no data
        }
    }

    function mst_query(){
        return view("search_query");
    }

    function team(){
        $data = DB::table("team_member")->orderBy("position","asc")->get();
        return view("team_member",["results"=>$data]);
    }
    

    function complaint(){
        return view("complaint");
    }

    function reg_comp(Request $req){
        $title = $req['title'];
        $desc = $req['desc'];
        $cut = date('Y-m-d H:i:s'); 
        /*
        $data = new DB::table("comp");
        $data->title = $title;
        $data->desc = $desc;
        $data->status = "ok";
        $data->insert_time = $cut;
        $data->save();
*/
        DB::table("comp")->insert([
            "title"=>$title,
            "desc"=>$desc,
            "status"=>"ok",
            "insert_time"=>$cut
        ]);
        
        return view("thanks_comp");
    }

}
