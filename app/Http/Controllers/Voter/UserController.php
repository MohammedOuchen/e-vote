<?php

namespace App\Http\Controllers\Voter;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Collection\Collection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voters = User::role('condidate')
                   ->where('isconfirmed', true)
                   ->get();

        return view('pages.Voters.vote',[
            'voters' => $voters
        ]);
    }

    public function resultat(){

        // dd('ici');

        $elections = Election::query()
                           ->with(['condidates','condidates.request', 'condidates.request.user' ])
                           ->get();

        $collections = collect();

        foreach ($elections as $election) {

            foreach ($election->condidates as $condidate) {
                $nb_vote = 0;
                foreach ($election->users as $user) {
                    // dd($user->pivot->candidate_id);
                        if ($user->pivot->candidate_id == $condidate->id) {
                            $nb_vote++;
                        }
                }
                $collections->push(['candidat' => $condidate,
                                      'nb' =>  $nb_vote ]);
                // dump($condidate);
            }
        }

        // dd($collections);
        // foreach ($collections as $condidate) {
        //          dump($condidate);
        // }
        // dd();
        return view('pages.Voters.resultat', [
            'condidats' => $collections
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayElection(Request $request)
    {
        $election = Election::where('type', $request['election_type'])
                             ->where('active', true)
                             ->first();

        return view('pages.Voters.candidatList',[
            'users' => $election->users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vote = true;
        $user = User::role('condidate')
                        ->with(['requests.candidate'])
                        ->whereId($request['candidat_id'])
                        ->where('isconfirmed', true)
                        ->first();
        $election = $user->requests[0]->candidate->election;

        $election->users()->each(function($user) use (&$vote){
               if ($user->id == Auth::id()) {
                 $vote = false;
               }
        });
        if ($vote) {
            $election->users()->syncWithoutDetaching([Auth::id() => ['candidate_id' => $user->requests[0]->candidate->id]]);
            $request->session()->flash('status', 'Votre vote a été enregistré');
        }else{
            $request->session()->flash('error', 'Vous avez déja voter !');
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
        //
    }
}
