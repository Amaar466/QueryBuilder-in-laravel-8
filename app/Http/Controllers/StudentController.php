<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Conditions for fet the data query builder
        // get
        // where
        // orwhere
        // wherein
        // wherebetween
        // wherenotbetween

        //$data = DB::table('Students')->get();

        //$data = DB::table('Students')->where('id' , 3)->orwhere('name', 'bilal')->get();
        // $data = DB::table('Students')->wherenotBetween('id' , [3,7])->get();
        //$data = DB::table('Students')->wherein('name' , ['bilal','ali'])->get();
        // $data = DB::table('Students')->where('name' , 'ali')
        // ->orWhere(function($query){
        //     $query->where('name' , 'bilal')
        //     ->where('id' , '<' , 2);
        // })->get();


        // $data = DB::table('Students')->select('id' , 'name','email' , 'phone')->get();

        //$data= DB::table('Students')->where('id', 1)->value('name');
        //$data = Student::select('email' )->where('name' , 'bilal')->get();  
        //$data = DB::table('Students')->get();
        $data = DB::table('Students')->orderBy('name' , 'asc')->get();
        return view('showstudent', compact('data'));

        exit();
        //dd($student);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        );
        $result = DB::table('Students')->insertgetid($data);
        return redirect()->route('student.add')->with('status', 'Data Stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $data = DB::table('Students')->find($id);
        return view('editstudent', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        );
        $result = DB::table('Students')->where('id' , $id)->update($data);
       
        return redirect()->route('student.show')->with('status', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        
       $data = DB::table('Students')->where('id' , $id)->delete();
       return redirect()->route('student.show')->with('status' , "Data Deleted");

    }
}
