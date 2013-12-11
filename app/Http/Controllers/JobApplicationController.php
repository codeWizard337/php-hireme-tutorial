<?php

namespace App\Http\Controllers;

use App\JobApplication;
use App\Status;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller
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
     * Display current user job applications' status.
     *
     * @return \Illuminate\Http\Response
     */
    public function status() {
        return view('user.status', [
            'applications' => Auth::user()->applications,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return abort(404, "No Page");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->authorize('user', User::class);

        $application = new JobApplication;
        $application->status_id = Status::pending();
        $application->user_id = Auth::id();
        $application->job_id = $request->job_id;
        $application->save();

        return redirect()->route('job.show', [ 'job' => $request->job_id ]);
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
        return abort(404, "No Page");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->authorize('update_job', JobApplication::findOrFail($id)->job);

        $application = JobApplication::findOrFail($id);

        if ($request->verdict === 'accept') {
            $application->status_id = Status::accepted();
        } else if ($request->verdict === 'reject') {
            $application->status_id = Status::rejected();
        }

        $application->save();

        return redirect()->route('job.show', [ 'job' => $application->job->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $this->authorize('owner', JobApplication::withTrashed()->findOrFail($id)->user);

        $application = JobApplication::withTrashed()->findOrFail($id);

        if ($request->verdict === 'publish') {
            $application->status_id = Status::is_published();

            $detail = new UserDetail;
            $detail->type = 2;
            $detail->title = $application->job->position . ' at ' . $application->job->company->name;
            $detail->description = $application->job->description;
            $detail->user_id = Auth::id();
            $detail->save();

        } else if ($request->verdict === 'delete') {
            $application->status_id = Status::is_deleted();
        }

        $application->save();

        JobApplication::destroy($id);
        return redirect()->route('user.status');
    }
}
