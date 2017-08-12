<?php

namespace App\Http\Controllers;

use App\Event;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Event $event)
    {
        return view('photos.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
        'description' => 'required|max:140',
        'picture' => 'required|image',
        'event_id' => 'required|exists:events,id',
        ];
        $this->validate($request, $rules);

        $fields = $request->only([
                'description',
                'picture',
                'event_id',
            ]);

        $fields['user_id'] = Auth::user()->id;
        Photo::unguard();
        $photo = Photo::create($fields);
        return redirect()->route('events.show', $fields['event_id']);
    }
}
