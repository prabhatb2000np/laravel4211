<?php
class UserpraController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
    // $userspra = Userpra::all();
$userspra = Userpra::paginate(2);

        return View::make('userspra.index', compact('userspra'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
    return View::make('userspra.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
     $input = Input::all();
        $validation = Validator::make($input, Userpra::$rules);

        if ($validation->passes())
        {
            Userpra::create($input);

            return Redirect::route('userspra.index');
        }

        return Redirect::route('userspra.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
    $userpra = Userpra::find($id);
        if (is_null($userpra))
        {
            return Redirect::route('userspra.index');
        }
        return View::make('userspra.edit', compact('userpra'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
    $input = Input::all();
        $validation = Validator::make($input, Userpra::$rules);
        if ($validation->passes())
        {
            $userpra = Userpra::find($id);
            $userpra->update($input);
            return Redirect::route('userspra.show', $id);
        }
return Redirect::route('userspra.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
     Userpra::find($id)->delete();
        return Redirect::route('userspra.index');
  }
  
}
