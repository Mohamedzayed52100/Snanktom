<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreatUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create new user ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        
        $name=$this->argument('name');
        $email=$this->argument('email');
        $password=$this->argument('password');
        $user =User::updateOrCreate([
            'name'=> $name, 
            'email'=>  $email, 
            'password'=> $password,
        ]);
        if($user)
        $this->info('the command run successfully');
    }
}
