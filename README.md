<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<div align="center">
  
[![GitHub WidgetBox](https://github-widgetbox.vercel.app/api/profile?username=abdoelmadjid&data=followers,repositories,stars,commits&theme=viridescent)](https://github.com/abdoelmadjid)
<!-- <h3 align ="center"> <strong> Let`s Code.Build & FUN </strong> </h3>  -->

![](https://komarev.com/ghpvc/?username=abdoelmadjid&color=brightgreen&style=for-the-badge)
[![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/abdoelmadjid/)
[![Gmail](https://img.shields.io/badge/%20-Send%20Mail-black?color=14171A&labelColor=ef5350&logo=gmail&logoColor=ffffff&style=for-the-badge)](mailto:abdulmadjid.mpd@gmail.com)
[![Facebook](https://img.shields.io/badge/Facebook-%231877F2.svg?style=for-the-badge&logo=Facebook&logoColor=white)](https://facebook.com/abdulmadjid.mpd)
[![Twitter](https://img.shields.io/badge/Twitter-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white)](https://x.com/AbdoelMadjid)
[![Instagram](https://img.shields.io/badge/Instagram-%405DE6.svg?style=for-the-badge&logo=Instagram&logoColor=white)](https://x.com/AbdoelMadjid)

</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#about-the-project">About The Project</a></li>
    <li><a href="#flat-form">Flat Form</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

Aplikasi ini adalah aplikasi capaian kompetensi siswa (LCKS) yang di pergunakan sebagai rapor siswa kurikulum merdeka. 
Aplikasi ini menggunakan template [smartadmin](https://wrapbootstrap.com/user/MyOrange).
Aplikasi Capaian Kompetensi Siswa (LCKS) di buat untuk mempermudah proses penilaian KBM di SMKN 1 Kadipaten. 

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- FLAT FORM -->
## Flat Form
- Laravel v10.42.0
- PHP v8.2.3
- Template SmartAdmin 


<!-- INSTALLATION -->
## Installation

```console
git clone https://github.com/AbdoelMadjid/starter-laravel-10-smartadmin.git
```

```console
composer install
```

```console
composer dump-autoload
```

```console
cp .env.example .env
```

```console
php artisan key:generate
```

```html
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=??
DB_USERNAME=root DB_PASSWORD=
```

```console
php artisan migrate
```

```console
php artisan db:seed
```



## Fitur yang di tambahkan

<table>
<tr>
<th>No.</th>
<th>Project</th>
<th>Keterangan</th>
</tr>
<tr>
<td>1.</td>
<td>Multi User</td>
<td>
Role : <br>
- Admin : abdulmadjid@gmail.com/password <br>
- Wali Kelas : tabiin@gmail.com/password <br>
- Guru Mapel : adelina@gmail.com/password <br>
- Siswa : ikbara@gmail.com/password <br>
</td>
</tr>
<tr>
<td valign='top'>2.</td>
<td valign='top'>Akses User</td>
<td>
Akses yang di gunakan memilah role, dengan memfilter bagian submenu dengan script berikut :<br>

```console
@if (auth()->user()->role == 'Admin')
    @include('inc.mainmenu._menu_master')
@endif
@if (auth()->user()->role == 'Wali Kelas')
    @include('inc.mainmenu._menu_walikelas')
@endif
@if (auth()->user()->role == 'Guru Mapel')
    @include('inc.mainmenu._menu_gurumapel')
@endif
@if (auth()->user()->role == 'Siswa')
    @include('inc.mainmenu._menu_siswa')
@endif
```

Opsi Login dengan Aktif dan Non Aktifkan, untuk role jika posisi tidak aktif tidak bisa login

-   Middleware CheckRoleStatus

```console
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $roleStatus = OpsiLogin::where('peran', $user->role)->first();

            if ($roleStatus && $roleStatus->aktif === 'N') {
                Auth::logout();
                return back()->with('error', 'Peran Anda sedang dinonaktifkan. Silakan hubungi administrator.');
            }
        }

        return $next($request);
    }
```

-   Implementasi

```console
Route::get('/dashboard', [TemplateController::class, 'index'])->middleware(['auth', 'check.role.status']);
```

</td>
</tr>
<tr>
<td>2.</td>
<td>Akses User</td>
<td>
Akses yang di gunakan memilah role, dengan memfilter bagian submenu dengan script berikut :<br>

```console
@if (auth()->user()->role == 'Admin')
    @include('inc.mainmenu._menu_master')
@endif
@if (auth()->user()->role == 'Wali Kelas')
    @include('inc.mainmenu._menu_walikelas')
@endif
@if (auth()->user()->role == 'Guru Mapel')
    @include('inc.mainmenu._menu_gurumapel')
@endif
@if (auth()->user()->role == 'Siswa')
    @include('inc.mainmenu._menu_siswa')
@endif
```

</td>
</tr>
</table>

## Installer Laravel v10.42.0 (PHP v8.2.3)

```console
git clone https://github.com/AbdoelMadjid/starter-laravel-10-smartadmin.git
```

```console
composer install
```

```console
composer dump-autoload
```

```console
cp .env.example .env
```

```console
php artisan key:generate
```

```html
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=??
DB_USERNAME=root DB_PASSWORD=
```

```console
php artisan migrate
```

```console
php artisan db:seed
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
