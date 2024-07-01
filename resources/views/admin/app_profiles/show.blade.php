<!DOCTYPE html>
<html>

<head>
    <title>App Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">App Profile</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $appProfile->app_nama }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $appProfile->app_deskripsi }}</td>
            </tr>
            <tr>
                <th>Tahun</th>
                <td>{{ $appProfile->app_tahun }}</td>
            </tr>
            <tr>
                <th>Pengembang</th>
                <td>{{ $appProfile->app_pengembang }}</td>
            </tr>
            <tr>
                <th>Icon</th>
                <td><img src="{{ asset('admin/img/' . $appProfile->app_icon) }}" alt="Icon" width="100"></td>
            </tr>
            <tr>
                <th>Logo</th>
                <td><img src="{{ asset('admin/img/' . $appProfile->app_logo) }}" alt="Logo" width="100"></td>
            </tr>
        </table>
        <a href="{{ route('app_profiles.edit') }}" class="btn btn-primary">Edit</a>
    </div>
</body>

</html>
