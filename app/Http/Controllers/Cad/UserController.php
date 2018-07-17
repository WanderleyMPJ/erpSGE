<?php

namespace App\Http\Controllers\cad;

use App\Events\Cad\UserCreatedEvent;
use App\Http\Resources\cad\UserResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return UserResource::collection($users);
    }
    public function store(Request $request)
    {
        $user = User::create($request->all());
        event(new UserCreatedEvent($user));
        return new UserResource($user);
    }
    public function show(User $user)
    {
        return new UserResource($user);
    }
    public function update(UserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        return new UserResource($user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return response([], 204);
    }
}
