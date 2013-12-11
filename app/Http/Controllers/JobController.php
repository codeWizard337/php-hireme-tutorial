<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $result = Job::where('position', 'like', '%' . $request->q . '%')
            ->orWhereHas('company', function($query) use ($request) {
                return $query->where('name', 'like', '%'. $request->q . '%');
            });

        if ($request->has('company')) {
            $result = Job::where('company_id', $request->company);
        }

        if ($request->has('type')) {
            $result = Job::where('is_fulltime', $request->type === 'fulltime');
        }

        return view('job.index', [
            'jobs' => $result->paginate(5)->appends($request->all()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $this->authorize('recruiter', User::class);

        return view('job.add', [
            'companies' => Auth::user()->companies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->authorize('recruiter', User::class);

        $this->validate($request, [
            'contact' => [ 'required' ],
            'position' => [ 'required' ],
            'salary' => [ 'required' ],
            'address' => [ 'required' ],
            'city' => [ 'required' ],
            'description' => [ 'required' ],
            'qualification' => [ 'required' ],
        ]);

        $job = new Job;
        $job->position = $request->position;
        $job->qualification = $request->qualification;
        $job->description = $request->description;
        $job->address = $request->address;
        $job->city = $request->city;
        $job->salary = $request->salary;
        $job->contact = $request->contact;
        $job->is_fulltime = ($request->is_fulltime === 'true');

        $job->company_id = $request->company_id;
        $job->save();

        return redirect()->route('job.show', [ 'job' => $id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('job.show', [
            'job' => Job::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $this->authorize('update_job', Job::findOrFail($id));

        return view('job.edit', [
            'job' => Job::findOrFail($id),
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
        $this->authorize('update_job', Job::findOrFail($id));

        $this->validate($request, [
            'contact' => [ 'required' ],
            'position' => [ 'required' ],
            'salary' => [ 'required' ],
            'address' => [ 'required' ],
            'city' => [ 'required' ],
            'description' => [ 'required' ],
            'qualification' => [ 'required' ],
        ]);

        $job = Job::findOrFail($id);
        $job->position = $request->position;
        $job->qualification = $request->qualification;
        $job->description = $request->description;
        $job->address = $request->address;
        $job->city = $request->city;
        $job->salary = $request->salary;
        $job->contact = $request->contact;
        $job->is_fulltime = ($request->is_fulltime === 'true');
        $job->save();

        return redirect()->route('job.show', [ 'job' => $id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->authorize('update_job', Job::findOrFail($id));

        Job::find($id)->applications()->delete();
        Job::destroy($id);
        return redirect()->route('company.index');
    }
}
