<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\LabRequest;
use App\Models\Lab;
use App\Services\ImageManagerService;
use Illuminate\Http\Request;

class LabController extends Controller
{

    public function __construct(ImageManagerService $imageManagerService)
    {
        $this->imageManagerService = $imageManagerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::all();
        return view('dashboard.labs.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.labs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LabRequest $request)
    {
        $path = $this->imageManagerService->upload('photo','lab');
        $lab = Lab::create($request->validated());
        $lab->update([
            'photo' => $path
        ]);
        session()->flash('success','تمت اضافة التاج بنجاح');
        return redirect()->route('dashboard.labs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(lab $lab)
    {
        return view('dashboard.labs.edit', compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabRequest $request, Lab $lab)
    {

        $path = $lab->photo;
        if(request()->hasFile('photo')){
            $path = $this->imageManagerService->update('image','lab',$lab->photo);
        }
        $lab->update($request->validated());
        $lab->update([
            'photo' => $path
        ]);

        session()->flash('success','تمت تعديل التاج بنجاح');
        return redirect()->route('dashboard.labs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lab $lab)
    {
        $path = $this->imageManagerService->delete($lab->photo);
        $lab->delete();
        session()->flash('success','تمت حذف التاج بنجاح');
        return redirect()->route('dashboard.labs.index');
    }
}