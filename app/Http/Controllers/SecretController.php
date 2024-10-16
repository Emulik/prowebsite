<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SecretController extends Controller
{
    public function storeSecret(Request $request)
    {
        $user = User::find(1);
        // dd($user->password);

        // $secret = Crypt::encryptString('I actually like Hello Kitty');
        $secret = Crypt::encryptString($user->password);
        $decrypted_secret = Crypt::decryptString($secret);

        // Use the encrypted and decrypted values as needed
        return response()->json(['encrypted' => $secret, 'decrypted' => $decrypted_secret]);
    }
}
