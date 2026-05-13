<?php

namespace App\Listeners;

use App\Events\CreateUser;
use App\Events\UserCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessCsvImport implements ShouldQueue
{
    // public $queue = 'createuserqueue';

    public function handle(CreateUser $event): void
    {

                // ✅ correct file path
        $fullPath = storage_path('app/public/' . $event->path);
       

        // ❌ file exists check (important for debugging)
        if (!file_exists($fullPath)) {
     
            dd("File not found: " . $fullPath);
        }


        // ✅ read CSV
        $data = array_map('str_getcsv', file($fullPath));



        // remove header row
        array_shift($data);

    

        foreach ($data as $row) {
            $user = User::create([
                'name' => $row[0],
                'email' => $row[1],
                'phone' => $row[2],
                'password' => bcrypt('123456')
            ]);

            event(new UserCreated($user));
            logger('broadcast sent');
        }
    }
}