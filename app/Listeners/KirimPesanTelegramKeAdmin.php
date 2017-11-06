<?php

namespace App\Listeners;

use App\Models\Telegram_Settings;
use App\Events\UserMengirimPesan;
use Illuminate\Queue\InteractsWithQueue;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Contracts\Queue\ShouldQueue;


class KirimPesanTelegramKeAdmin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserMengirimPesan  $event
     * @return void
     */
    public function handle(UserMengirimPesan $event)
    {
        $userID  = $event->request->user_id;
        $nama    = $event->request->nama;
        $subject = $event->request->subject;
        $pesan   = $event->request->pesan;
        $id_pesan= $event->id_pesan->id_pesan;
        $url     ="http://www.ppdbsmkpi/pesan_admin/$id_pesan";
        $telegram=  Telegram_Settings::get()->first();
        // a href=\"http://localhost:8000/pesan_admin/\"> <a>
        $txt     = "<b>Anda memiliki pesan dari user yang harus segera dijawab! \n============================\n</b> <b> ID Pesan: </b> <i>$id_pesan</i> \n <b> Nama: </b> <i>$nama</i> \n <b> Subject: </b> <i>$subject</i> \n <b> Pesan: </b> <i>$pesan</i> \n\n <a href=\"$url\">Balas Pesan</a>";
        Telegram::sendMessage([
            // 410626437
            'chat_id' => $telegram->chat_id,
            'text' => $txt,
            'parse_mode'=>'html',
        ]);
    }
}
