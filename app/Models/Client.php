<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\Client as BasePassportClient;

class Client extends BasePassportClient
{
    use HasFactory;

    /**
     * Determine if the client should skip the authorization prompt.
     */
    public function skipsAuthorization(): bool
    {
        return $this->first_party;
    }
}
