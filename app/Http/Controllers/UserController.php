<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCheckExistRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private function calculateAge($date_of_birth)
    {
        $birthDate = new \DateTime($date_of_birth);
        $currentDate = new \DateTime();
        $age = $currentDate->diff($birthDate)->y;
        return $age;
    }

    public function register(UserRegisterRequest $request)
    {
        $request->validated();

        $userData = $request->all();
        $userData['password'] = Hash::make($request->password);
        $userData['age'] = $this->calculateAge($request->date_of_birth);

        $user = User::create($userData);
        $user = new UserResource($user);
        $token = $user->createToken('betteru-')->plainTextToken;

        return response([
            'data' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(UserLoginRequest $request)
    {
        $request->validated();
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response(['message' => 'Email or Password Is Invalid'], 409);
        }

        $user = new UserResource($user);
        $token = $user->createToken('betteru-')->plainTextToken;

        return response([
            'data' => $user,
            'token' => $token,
        ], 200);
    }

    public function checkExistUser(UserCheckExistRequest $request)
    {
        $request->validated();
        $user = User::where('email', $request->email)->first();
        if (! $user) {
            return $this->resDataNotFound('User With Current Email');
        }

        return response(['message' => 'User Found'], 200);
    }

    public function logout()
    {
        $user = auth()->user();
        $user->tokens()->delete();

        return response(['message' => 'Logged Out'], 200);
    }

    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function showById($id)
    {
        $user = User::find($id);
        if (! $user) {
            return $this->resDataNotFound('User With Current ID');
        }

        return new UserResource($user);
    }

    public function showCurrent()
    {
        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $calculatedAge = $this->calculateAge($user["date_of_birth"]);
        if ($user["age"] !== $calculatedAge) {
            $user->update(['age' => $calculatedAge]);
        }

        return new UserResource($user);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $request->validated();
        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $user = User::find($id);
        if (! $user) {
            return $this->resDataNotFound('User With Current ID');
        }

        $userData = $request->all();
        $user->update($userData);

        $calculatedAge = $this->calculateAge($user["date_of_birth"]);
        if ($user["age"] !== $calculatedAge) {
            $user->update(['age' => $calculatedAge]);
        }

        $user = new UserResource($user);

        return $this->resUpdatedData($user);
    }

    public function delete($id)
    {
        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $user = User::find($id);
        if (! $user) {
            return $this->resDataNotFound('User With Current ID');
        }

        $user->delete();

        return $this->resDataDeleted('User');
    }
}
