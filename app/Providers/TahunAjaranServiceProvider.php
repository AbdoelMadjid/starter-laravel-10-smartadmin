<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TahunAjaran;

class TahunAjaranServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Mengambil tahun ajaran yang aktif (aktif = 'Y') dan membagikannya ke semua view
        $tahunAjaranAktif = TahunAjaran::where('aktif', 'Y')->first();

        // Menggunakan view composer untuk membagikan data ke view
        view()->composer('*', function ($view) use ($tahunAjaranAktif) {
            $view->with('tahunAjaranAktif', $tahunAjaranAktif);
        });
    }

    public function register()
    {
        //
    }
}
