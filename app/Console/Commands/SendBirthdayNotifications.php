<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class SendBirthdayNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:birthday-notifications';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send birthday notifications to users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
{
    $users = User::whereMonth('tgl_lahir', now()->month)
        ->whereDay('tgl_lahir', now()->day)
        ->whereYear('tgl_lahir', '<=', now()->year) // Pastikan tidak mengirim notifikasi di masa depan
        ->where(function ($query) {
            $query->whereNull('last_birthday_notification_sent')
                ->orWhereYear('last_birthday_notification_sent', '<', now()->year);
        })
        ->get();

    foreach ($users as $user) {
        // Kirim notifikasi ke pengguna
        Notification::make()
            ->title('Selamat Ulang Tahun! 🎉')
            ->body('Kami berharap Anda memiliki hari yang menyenangkan, ' . $user->nama_pp . '! 😊')
            ->sendToDatabase($user);

        // Kirim notifikasi ke admin dengan role 'Super Admin'
        $superAdmins = User::whereHas('roles', function ($query) {
            $query->where('name', 'super_admin');
        })->get();

        foreach ($superAdmins as $admin) {
            Notification::make()
                ->title('Pengguna Berulang Tahun')
                ->body('Pengguna ' . $user->nama_pp . ' sedang berulang tahun hari ini.')
                ->sendToDatabase($admin);
        }

        Log::info('Notification displayed: ' . $user->nama_pp);

        // Update status terakhir notifikasi ulang tahun dikirimkan
        $user->update(['last_birthday_notification_sent' => now()]);
    }

    return 0;
}
}


