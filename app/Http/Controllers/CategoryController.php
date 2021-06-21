<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function list()
  {
    // https://laravel.com/docs/6.x/eloquent#retrieving-models

    // On récupère nos categories en base grace au model
    $categoriesList = Category::all();

    // On renvoi tout ça en JSON ... et c'est tout !
    return response()->json( $categoriesList, 200 );
  }

  public function add(Request $request)
  {
    $category = new Category();

    // On rempli les propriétés de notre
    // nouvelle category avec les info envoyées en $_POST
    // On vérifie qu'on a pas reçu n'importe quoi au passage
    $category->name = $request->input('name'); // Presque ... :D
    $category->status =$request->input('status');

    if($category->save()){
        return response()->json( $category, 201 );
    }
    else {
        return response()->json(['error' => 'Internal Server Error'], 500);
    }

  }

  public function edit()
  {

  }

  // La méthode delete reçoit en paramètre les
  // variables de l'URL, définies dans la route
  public function delete( $id )
  {
    // https://laravel.com/docs/6.x/eloquent#deleting-models

    // Méthode "S6"
    $category = Category::find( $id );
    $category->delete();

    // Méthode DESTROY
    // Category::destroy( $id );

    return response()->json( null, 204 );
  }
}
