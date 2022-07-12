<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeeperRequest;
use App\Http\Requests\UpdateKeeperRequest;
use App\Models\Keeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $keepers = Keeper::whereUserId($user_id)->get();
        return view('keepers.index', compact('keepers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keepers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeeperRequest $request)
    {
        Keeper::create($request->validated());

        return redirect()->route('keepers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Keeper $keeper)
    {
        return view('keepers.show', compact('keeper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Keeper $keeper)
    {
        return view('keepers.edit', compact('keeper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeeperRequest $request, Keeper $keeper)
    {
        $keeper->update($request->validated());

        return redirect()->route('keepers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keeper $keeper)
    {
        $keeper->delete();
        
        return redirect()->route('keepers.index');
    }
}
