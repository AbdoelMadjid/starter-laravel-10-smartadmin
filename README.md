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
<a id="readme-top"></a>
<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#about-the-project">About The Project</a></li>
    <li><a href="#flat-form">Flat Form</a></li>
    <li><a href="#application-development-plan">Application Development Plan</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#roadmap-project">Roadmap Project</a></li>
    <li><a href="#license">License</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

This application is an application for student competency achievements which is used as a report card for independent curriculum students. 
This application uses the [smartadmin](https://wrapbootstrap.com/user/MyOrange) template.
The Student Competency Achievement application was created to simplify the process of assessing teaching and learning activities at SMKN 1 Kadipaten.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- FLAT FORM -->
## Flat Form
- Laravel v10.42.0
- PHP v8.2.3
- Template SmartAdmin 

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Application Development Plan
The following is the development plan, the points of which will continue to be updated.
- Role (more than 2 users)
- User access is limited by active and inactive
- On and off options of some features
- Menu options to be displayed or not
- ...



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
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=??
DB_USERNAME=root
DB_PASSWORD=
```

```console
php artisan migrate
```

```console
php artisan db:seed
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Roadmap Project
### Multi User
Role : <br>
- Admin : abdulmadjid@gmail.com/password <br>
- Wali Kelas : tabiin@gmail.com/password <br>
- Guru Mapel : adelina@gmail.com/password <br>
- Siswa : ikbara@gmail.com/password <br>

### User Access
The access used is to sort roles, by filtering the submenu section with the following script:

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

Active and Deactivated Login Options, for roles if the position is inactive you cannot log in

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

-   Implementation

```console
Route::get('/dashboard', [TemplateController::class, 'index'])->middleware(['auth', 'check.role.status']);
```

### Fitur Show
-   Content Setting and Other Features

Several features are set to be displayed or not

<i>Middleware Fitur</i>
```console
    public static function getFiturAktif()
    {
        $fitur = AppFitur::where('aktif', 'Y')->get();
        $hasil = [];

        foreach ($fitur as $f) {
            // Mengambil view berdasarkan nama_fitur
            if (view()->exists("inc.fitur.{$f->nama_fitur}")) {
                $hasil[] = "inc.fitur.{$f->nama_fitur}";
            }
        }

        return $hasil;
    }
```

<i>Implementation</i>
```console
    @foreach (App\Helpers\Fitures::getFiturAktif() as $fiturView)
        @include($fiturView)
    @endforeach
```
feature files are saved in View -> inc -> fitur

-   Mainmenu Show   
Several menu groups are created so that they can be displayed or not.

<i>Helper Fitures.php</i>
```console
    public static function isMainMenuTemplateActive()
    {
        $fitur = AppFitur::where('nama_fitur', '_mainmenu_template')->first();
        return $fitur && $fitur->aktif === 'Y';
    }
```
<i>Implementation</i>
```console
   @if (App\Helpers\Fitures::isMainMenuTemplateActive())
        @include('inc.mainmenu._menu_depelover')
        @include('inc.mainmenu._menu_intel_app')
        @include('inc.mainmenu._menu_tools_component_app')
        @include('inc.mainmenu._menu_plugin_addon_app')
        @include('inc.mainmenu._menu_layouts_app')
    @endif
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
