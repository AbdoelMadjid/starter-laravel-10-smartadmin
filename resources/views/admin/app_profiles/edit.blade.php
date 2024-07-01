<!DOCTYPE html>
<html>

<head>
    <title>Edit App Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Profile</h1>
        <form action="{{ route('app_profiles.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="app_nama" class="form-control" value="{{ $appProfile->app_nama }}" required>
            </div>
            <div class="form-group">
                <label>Deskripsi:</label>
                <textarea name="app_deskripsi" class="form-control" required>{{ $appProfile->app_deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label>Tahun:</label>
                <input type="number" name="app_tahun" class="form-control" value="{{ $appProfile->app_tahun }}"
                    required min="1900" max="{{ date('Y') + 1 }}">
            </div>
            <div class="form-group">
                <label>Pengembang:</label>
                <input type="text" name="app_pengembang" class="form-control"
                    value="{{ $appProfile->app_pengembang }}" required>
            </div>
            <div class="form-group">
                <label>Icon:</label>
                <input type="file" name="app_icon" class="form-control">
                <img src="{{ asset('admin/img/' . $appProfile->app_icon) }}" alt="Icon" width="100">
            </div>
            <div class="form-group">
                <label>Logo:</label>
                <input type="file" name="app_logo" class="form-control">
                <img src="{{ asset('admin/img/' . $appProfile->app_logo) }}" alt="Logo" width="100">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
