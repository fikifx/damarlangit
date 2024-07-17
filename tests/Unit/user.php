<?php
use Tests\TestCase;
use App\Models\User;
use Carbon\Carbon;
use Filament\Notifications\Notification;

class UserTest extends TestCase
{
    public function testUlangTahunNotification()
    {
        // Simulasi tanggal ulang tahun yang ingin diuji
        Carbon::setTestNow(Carbon::create(null, 7, 1)); // Contoh: 1 Juli

        // Ambil contoh pengguna yang sudah ada
        $user = User::where('t_lahir', '1990-07-01')->first(); // Ganti dengan kondisi sesuai pengguna yang Anda miliki

        if ($user) {
            // Verifikasi bahwa notifikasi ulang tahun dikirimkan
            Notification::fake();

            // Simpan pengguna untuk memicu event saved
            $user->save();

            // Pastikan notifikasi dikirim dengan benar
            Notification::assertSentTo(
                $user,
                function ($notification) {
                    return $notification->title === 'Selamat Ulang Tahun!'
                        && $notification->body === 'Selamat ulang tahun! Semoga hari ini menjadi spesial untuk Anda.';
                }
            );
        } else {
            $this->fail('Pengguna dengan tanggal lahir yang sesuai tidak ditemukan.');
        }

        // Reset waktu simulasi setelah selesai pengujian
        Carbon::setTestNow(); // Reset ke waktu sebenarnya
    }
}
