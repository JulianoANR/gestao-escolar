<?php

namespace App\Services\Users;

use App\Http\Requests\UpdateUserRequest;

class UpdateUserService {

    public static function handle(UpdateUserRequest $request, $user){
        $user->update($request->validated());
        if($request->hasFile('profile_path_image')){
            $user->profile_path_image = $request->profile_path_image->store("users/".$user->matricula);
        }
        return $user->save();
    }
}
