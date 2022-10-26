<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::orderBy("Title")->get();

        return view("events.index",compact("events"));

    }

   
    public  function  create(){

        return view("events.createEvent");
    }

    public function  store(Request $request){
        $request->validate([
            'Title'=>'required|min:6',
            'description' =>'required|max:20', 
            'location' =>'required'   
        ],

        [
'Title.required'=>'u need to fill the title'

        ]
    );

        $input =$request->all();

        if($image=$request->file("picture")){
            $destinationPath="images/";
            $name=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$name);
            $input["picture"]="$name";
        }

        Event::create($input);

        return redirect()
            ->route('event')
            ->withStatus('event successfully registered.');



    }

    public function edit(Event $event){
        return view("events.editEvent",compact("event"));
    }

    public function update(Request $request,Event $event){
        $input =$request->all();
        if($image=$request->file("picture")){
            $destinationPath="images/";
            $name=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$name);
            $input["picture"]="$name";
        }

        $event->update($input);

        return redirect()
            ->route('event')
            ->withStatus('evnnt successfully registered.');
    }

    public function  destroy(Event $event){
        $event->delete();
        return redirect()->route("event")->with("sucess","event deleted successfully");
    }
}
