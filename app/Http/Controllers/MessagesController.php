<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    //
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
      'email' => 'required',
      'message' => 'required'
    ]);

    $message = new Message;
    $message->name = $request->input('name');
    $message->phone = $request->input('phone');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    $message->save();

    return redirect('/contact')->with('success', 'message sent');
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
