<?php

namespace App\Http\Controllers\section;

use App\Models\Grade;
use App\Models\Section;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSections;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Section لازم يكون نفس الاسم بتاع العلاقه بين الجدولين الي في الموديل
        $Grades = Grade::with(['Sections'])->get();
        $Classrooms = Classroom::all();
        $list_Grades = Grade::all();
        // $teachers = Teacher::all();
        return view('pages.Sections.Sections',compact('list_Grades','Grades','Classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSections $request)
    {
        try {
            $validated = $request->validated();
            $Sections = new Section();
            $Sections->Name = $request->Name ;
            $Sections->Name_en = $request->Name_en; 
            $Sections->Grade_id = $request->Grade_id;
            $Sections->Class_id = $request->Class_id;
            $Sections->Status = 1;
            $Sections->save();
            // $Sections->teachers()->attach($request->teacher_id);
            $notification = array(
                'message'=>trans('Message.insert-section'),
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }      
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSections $request, string $id)
    {
        try {
            $validated = $request->validated();
            $Sections = Section::findOrFail($request->id);
            $Sections->Name = $request->Name;
            $Sections->Name_en = $request->Name_en;
            $Sections->Grade_id = $request->Grade_id;
            $Sections->Class_id = $request->Class_id;
            if(isset($request->Status)) {
              $Sections->Status = 1;
            } else {
              $Sections->Status = 2;
            }          
            //  // update pivot tABLE
            //   if (isset($request->teacher_id)) {
            //       $Sections->teachers()->sync($request->teacher_id);
            //   } else {
            //       $Sections->teachers()->sync(array());
            //   }
            $Sections->save();
            $notification = array(
                'message'=>trans('Message.update-section'),
                'alert-type'=>'info'
            );
            return redirect()->back()->with($notification);
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Section::findOrFail($request->id)->delete();
        $notification = array(
            'message'=>trans('Message.delete-section'),
            'alert-type'=>'error'
        );
        return redirect()->back()->with($notification);
    }
}
