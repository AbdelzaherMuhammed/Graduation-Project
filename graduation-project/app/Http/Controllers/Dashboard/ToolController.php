<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ToolRequest;
use App\Models\Sponsor;
use App\Models\Tool;
use App\Services\ImageManagerService;
use Illuminate\Http\Request;

class ToolController extends Controller
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
        $tools = Tool::all();
        return view('dashboard.tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToolRequest $request)
    {
        $path = $this->imageManagerService->upload('photo','tool');
        $tool = Tool::create($request->validated());
        $tool->update([
            'photo' => $path
        ]);
        session()->flash('success','تمت اضافة التاج بنجاح');
        return redirect()->route('dashboard.tools.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        return view('dashboard.tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToolRequest $request, Tool $tool)
    {

        $path = $tool->photo;
        if(request()->hasFile('photo')){
            $path = $this->imageManagerService->update('image','tool',$tool->photo);
        }
        $tool->update($request->validated());
        $tool->update([
            'photo' => $path
        ]);

        session()->flash('success','تمت تعديل التاج بنجاح');
        return redirect()->route('dashboard.tools.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        $path = $this->imageManagerService->delete($tool->photo);
        $tool->delete();
        session()->flash('success','تمت حذف التاج بنجاح');
        return redirect()->route('dashboard.tools.index');
    }
}