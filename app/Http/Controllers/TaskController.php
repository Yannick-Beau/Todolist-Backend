<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function list()
  {
    // https://laravel.com/docs/6.x/eloquent#retrieving-models

    // On récupère nos categories en base grace au model
    $tasksList = Task::all();

    // On renvoi tout ça en JSON ... et c'est tout !
    return response()->json( $tasksList, 200 );
  }

  public function add(Request $request)
  {
    $task = new Task();

    // On rempli les propriétés de notre
    // nouvelle category avec les info envoyées en $_POST
    // On vérifie qu'on a pas reçu n'importe quoi au passage
    $title = $request->input('title'); // Presque ... :D
    $categoryId = $request->input('categoryId');
    $completion = $request->input('completion');
    $status = $request->input('status');

    $task->title = $title;
    $task->category_id = $categoryId;
    $task->completion = $completion;
    $task->status = $status;

    if($task->save()){
        return response()->json( $task, 201 );
    }
    else {
        return response()->json( ['error' => 'Internal Server Error'], 500 );
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
    $task = Task::find( $id );
    $task->delete();

    // Méthode DESTROY
    // Category::destroy( $id );

    return response()->json( null, 204 );
  }
}
