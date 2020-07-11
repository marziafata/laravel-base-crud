<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studenti = Student::all();
        return view('students.index', compact('studenti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'code' => 'required|numeric|max:65536|unique:students,code',
            'email' => 'required|max:255|email:rfc,dns|unique:students,email'
        ]);
        $dati = $request->all();
        $nuovo_studente = new Student();
        $nuovo_studente->fill($dati);
        $nuovo_studente->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studente = Student::find($id);
        return view('students.show', compact('studente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studente = Student::find($id);
        if($studente) {
            return view('students.edit', compact('studente'));
        }
        return abort('404');
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
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'code' => 'required|numeric|max:65536',
            'email' => 'required|max:255|email:rfc,dns'
        ]);
        $dati = $request->all();
        $studente = Student::find($id);
        $studente->update($dati);
        return redirect()->route('students.show', ['student' => $studente->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studente = Student::find($id);
        $studente->delete();
        return redirect()->route('students.index');
    }
}
