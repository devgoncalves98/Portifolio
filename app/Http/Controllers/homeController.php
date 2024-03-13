<?php
  namespace App\Http\Controllers;

  class homeController extends Controller{
  public function show(){
    return  view('home');
  }
}