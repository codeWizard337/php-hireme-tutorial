<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return abort(404, "No Page");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('user.detail.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => [ 'required' ],
        ]);

        $detail = new UserDetail;
        $detail->type = $request->profileType;
        $detail->title = $request->title;
        $detail->description = $request->description;
        $detail->user_id = Auth::id();
        $detail->save();

        return redirect()->route('user.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return abort(404, "No Page");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $this->authorize('owner', UserDetail::findOrFail($id)->user);

        return view('user.detail.edit', [
            'detail' => UserDetail::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->authorize('owner', UserDetail::findOrFail($id)->user);

        $this->validate($request, [
            'title' => [ 'required' ],
        ]);

        $detail = UserDetail::findOrFail($id);
        $detail->title = $request->title;
        $detail->description = $request->description;
        $detail->save();

        return redirect()->route('user.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->authorize('owner', UserDetail::findOrFail($id)->user);

        UserDetail::destroy($id);
        return redirect()->route('user.profile');
    }
}
