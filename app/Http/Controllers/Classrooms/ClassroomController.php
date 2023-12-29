<?php

namespace App\Http\Controllers\Classrooms;

use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroom;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $My_Classes = Classroom::all();
        $Grades = Grade::all();
        return view('pages.My_Classes.My_Classes', compact('My_Classes', 'Grades'));
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
    
    public function store(StoreClassroom $request)
    {
        $List_Classes = $request->List_Classes;
        try {
            $validated = $request->validated();
            foreach ($List_Classes as $List_Class) {
                $My_Classes = new Classroom();
                $My_Classes->Name =  $List_Class['Name'];
                $My_Classes->Name_en =  $List_Class['Name_en'];
                $My_Classes->Grade_id = $List_Class['Grade_id'];
                $My_Classes->save();
            }
            $notification = array(
                'message'=>trans('Message.insert-classroom'),
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
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
    public function update(Request $request, string $id)
    {
        try {
            $Classrooms = Classroom::findOrFail($request->id);
            $Classrooms->update([
                $Classrooms->Name = $request->Name ,
                $Classrooms->Name_en = $request->Name_en,
                $Classrooms->Grade_id = $request->Grade_id,
            ]);
            $notification = array(
                'message'=>trans('Message.update-classroom'),
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
        $Classrooms = Classroom::findOrFail($request->id)->delete();
        $notification = array(
            'message'=>trans('Message.delete-classroom'),
            'alert-type'=>'error'
        );
        return redirect()->back()->with($notification);
    }
    public function delete(Request $request)
    {
        // explode يعني افصل بين القيم
        $delete_all = explode(",", $request->delete_all_id);
        Classroom::whereIn('id', $delete_all)->delete();
        $notification = array(
            'message'=>trans('Message.delete-classroom'),
            'alert-type'=>'error'
        );
        return redirect()->back()->with($notification);
    }
    public function Filter_Classes(Request $request)
    {
        $Grades = Grade::all();
        $Search = Classroom::select('*')->where('Grade_id','=',$request->Grade_id)->get();
        return view('pages.My_Classes.My_Classes',compact('Grades'))->withDetails($Search);

    }
}
