@php
    $secret = Crypt::encryptString($user->password);
    $decrypted_secret = Crypt::decryptString($secret);
@endphp

<p>Encrypted: {{ $secret }}</p>
<p>Decrypted: {{ $decrypted_secret }}</p>