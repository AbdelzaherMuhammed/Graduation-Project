<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TutorialRequest;
use App\Models\Tutorial;
use App\Services\ImageManagerService;
use Illuminate\Http\Request;

class TutorialController extends Controller
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
        $tutorials = Tutorial::all();
        return view('dashboard.tutorials.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tutorials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorialRequest $request)
    {
        $path = $this->imageManagerService->upload('video','tutorial');
        $tutorial = Tutorial::create($request->validated());
        $tutorial->update([
            'video' => $path
        ]);
        session()->flash('success','تمت اضافة التاج بنجاح');
        return redirect()->route('dashboard.tutorials.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorial $tutorial)
    {
        return view('dashboard.tutorials.edit', compact('tutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(TutorialRequest $request, Tutorial $tutorial)
    {

        $path = $tutorial->video;
        if(request()->hasFile('video')){
            $path = $this->imageManagerService->update('image','tutorial',$tutorial->video);
        }
        $tutorial->update($request->validated());
        $tutorial->update([
            'video' => $path
        ]);

        session()->flash('success','تمت تعديل التاج بنجاح');
        return redirect()->route('dashboard.tutorials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorial $tutorial)
    {
        $path = $this->imageManagerService->delete($tutorial->video);
        $tutorial->delete();
        session()->flash('success','تمت حذف التاج بنجاح');
        return redirect()->route('dashboard.tutorials.index');
    }
}