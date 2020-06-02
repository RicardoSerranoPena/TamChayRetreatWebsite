<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Message;

class MessagesController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $messages = Message::all();
    return view('admin.messages')->with('messages', $messages);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    return view('pages.contact');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required | email',
      'message' => 'required'
    ]);

    $message = new Message;
    $message->name = $request->input('name');
    $message->phone = $request->input('phone');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    $message->save();

    Mail::to('ngoc@tamchayretreat.com')
      ->send(new CustomerMessage($message));

    return redirect('/contact/create')->with('success', 'message sent');
    }

  /**
   * Display the specified resource.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function edit($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    //
  }
}
