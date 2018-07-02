<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function index() {
      return view('products.indexSearch');
  }
  public function search(Request $request)
  {
  $query = Request::input('search');

  $articles = DB::table('products')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);

  return view('products.search', compact('products', 'query'));
 }
}
