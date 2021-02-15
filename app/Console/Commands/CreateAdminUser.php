<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:admin {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update user role to admin.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::where('name', $this->argument('name'))->firstOrFail();

        $user->role = User::ROLE_ADMIN;

        $user->save();

        $this->info('User role updated.');
    }
}
