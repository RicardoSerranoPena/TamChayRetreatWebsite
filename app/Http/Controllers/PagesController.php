<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class PagesController
 *
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index() {
      return view('pages.index');
    }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function about() {
      return view('pages.about');
    }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function guidelines() {
      return view('pages.guidelines');
    }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function rooms() {
      return view('pages.rooms');
    }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function partnerships() {
      return view('pages.partnerships');
    }
}
