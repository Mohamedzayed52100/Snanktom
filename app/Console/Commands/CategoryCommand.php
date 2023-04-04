<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use  Illuminate\Support\Facades\DB;
use  Illuminate\Support\Str;
class CategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       DB::table('catgeory')->insert([
        'name'=>Str::random(10),
       ]);
    }
}
