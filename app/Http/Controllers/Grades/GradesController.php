<?php

namespace App\Http\Controllers\Grades;

use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrades;
use App\Http\Controllers\Controller;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $Grades = Grade::all();
    return view('pages.grades.grades',compact('Grades'));
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
    public function store(StoreGrades $request)
    {
        try {
            $validated = $request->validated();
            $data = $validated;
            $Grades = Grade::create($data);
            $notification = array(
                'message'=>trans('Message.insert-grades'),
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
    public function update(StoreGrades $request)
    {
        try {
            $Grades = Grade::findOrFail($request->id);
            $validated = $request->validated();
            $data = $validated;
            $Grades->update($data);
            $notification = array(
                'message'=>trans('Message.update-grades'),
                'alert-type'=>'info'
            );
            return redirect()->back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // بنجيب عدد الصفوف التابعه للمرحله  
        $MyClass_id = Classroom::where('Grade_id',$request->id)->pluck('Grade_id');
        if($MyClass_id->count() == 0){
            $Grades = Grade::findOrFail($request->id)->delete();
            $notification = array(
                'message'=>trans('Message.delete-grades'),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message'=>trans('Message.check-grades'),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
