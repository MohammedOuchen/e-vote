<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ConfiremedRequestVoter;
use App\Mail\RefusRequest;
use App\Models\Candidate;
use App\Models\Election;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Voter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CondidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           // $voters = User::role('voter')
           $requests = ModelsRequest::query()
                            ->with('user')
                            ->whereHas('user', function (Builder $query) {
                                $query->Role('condidate');
                            })
                            ->get();
            // dd($requests);
            return view('admin.condidate.index',[
                  'requests' => $requests
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $requestModel = ModelsRequest::findorFail($request['request_id']);
       $election =Election::where('type', $requestModel->type)
                        ->where('active', 1)
                        ->first();


        if(!$election){

            $request->session()->flash('error', 'Error ! Add new election !!');

        }else{

            $requestModel->status = 'VALIDATE';
            $requestModel->save();
            $user = User::findorFail($requestModel->user_id);
            $user->isconfirmed = true;
            $user->save();

            $condidate = Candidate::create([
                    'active' => true,
                    'request_id' => $requestModel->id,
                    'election_id' => $election->id
            ]);

            $request->session()->flash('status', 'Enregistrer');
            Mail::to($user->email)->send(new ConfiremedRequestVoter());
        }

       return redirect()->back();
    }

  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setStatus(Request $request)
    {
        $requestModel = ModelsRequest::findorFail($request['request_id']);
        $election =Election::where('type', $requestModel->type)
                         ->where('active', 1)
                         ->first();

        if(!$election){

        $request->session()->flash('error', 'Error ! Add new election !!');

        }else{

        $requestModel->status = 'NOT_VALIDATE';
        $requestModel->save();
        $user = User::findorFail($requestModel->user_id);
        $user->isconfirmed = false;
        $user->save();

        // $condidate = Candidate::create([
        //         'active' => true,
        //         'request_id' => $requestModel->id,
        //         'election_id' => $election->id
        // ]);

        $request->session()->flash('status', 'Enregistrer');
        Mail::to($user->email)->send(new RefusRequest());
        }

        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}

 //
