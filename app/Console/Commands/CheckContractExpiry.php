<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Console\Command;

class CheckContractExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-contract-expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $today = Carbon::now()->format('Y-m-d');
        // $users = User::whereDate('end_kontrak', $today)->get();

        // foreach ($users as $user) {
        //     Notification::make()
        //         ->title('Contract Expiry')
        //         ->body("The contract for user {$user->name} has expired today.")
        //         ->send();
        // }

        // $this->info('Checked contract expiry and sent notifications.');
    }
}
