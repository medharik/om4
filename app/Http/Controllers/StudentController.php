<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all();
        $titre="liste des etudiants";
        // return view("students/index",["students"=>$students,'titre'=>$titre])
        // return view("students/index",compact('students','titre'));
        return $students;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$titre="Nouvel etudiant :";
        return view("students.create",compact('titre'));
    }

    /**
     * Store a newly created resource in storage database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$data=$request->all();
        // $student=new Student($data);
        // $student->save();
        Student::create($request->all());
        // return redirect()->route('students.index');
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        $titre="detail de l'etudiant : ".$student->nom;
        return view("students.show",compact('student','titre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        $titre="Edition de l'etudiant : ".$student->nom;
        return view("students.edit",compact('student','titre'));

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
        $student=Student::find($id);
        // $student->nom=$request->nom;
        // $student->save();
        $student->update($request->all());
        return $this->index();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return $this->index();
    }
}
