//Línea de código añadida por SHOW//
@param int
@return \Illuminate\Http\Response

public function show($id)
{
    $user = User::find($id);

    return view ('showUser', compact('user'));
}

//Acaba línea del SHOW//

@param int
@return \Illuminate\Http\Response

public function edit($id)
{
    $user = User::find($id);

    return view ('editUser', compact('user'));
}

//Línea de código añadida por UPDATE//

@param \Illuminate\Http\Request
@param int
@return \Illuminate\Http\Response

public function update(Request $request, $id)
{
    $user = request()->except('_token', '_method');

    User::where('id', '=', $id)->update($user);

    return redirect()->route('home');
{
//Línea de código añadida por UPDATE//



