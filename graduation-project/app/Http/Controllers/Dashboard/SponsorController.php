<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SponsorRequest;
use App\Models\Sponsor;
use App\Services\ImageManagerService;
use Illuminate\Http\Request;

class SponsorController extends Controller
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
        $sponsors = Sponsor::all();
        return view('dashboard.sponsors.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SponsorRequest $request)
    {
        $path = $this->imageManagerService->upload('photo','sponsor');
        $sponsor = Sponsor::create($request->validated());
        $sponsor->update([
            'photo' => $path
        ]);
        session()->flash('success','تمت اضافة التاج بنجاح');
        return redirect()->route('dashboard.sponsors.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        return view('dashboard.sponsors.edit', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(SponsorRequest $request, Sponsor $sponsor)
    {

        $path = $sponsor->photo;
        if(request()->hasFile('photo')){
            $path = $this->imageManagerService->update('image','sponsor',$sponsor->photo);
        }
        $sponsor->update($request->validated());
        $sponsor->update([
            'photo' => $path
        ]);

        session()->flash('success','تمت تعديل التاج بنجاح');
        return redirect()->route('dashboard.sponsors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        $path = $this->imageManagerService->delete($sponsor->photo);
        $sponsor->delete();
        session()->flash('success','تمت حذف التاج بنجاح');
        return redirect()->route('dashboard.sponsors.index');
    }
}