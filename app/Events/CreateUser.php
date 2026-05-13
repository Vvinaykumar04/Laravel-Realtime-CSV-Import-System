<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;



class CreateUser
{
    use Dispatchable, SerializesModels;

    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    
}
