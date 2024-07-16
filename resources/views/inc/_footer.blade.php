<footer class="page-footer" role="contentinfo">
    <div class="d-flex align-items-center flex-1 text-muted">
        <span class="hidden-md-down fw-700">{{ $profileApp->app_tahun ?? '' }} - @php echo date('Y'); @endphp © {{ $profileApp->app_pengembang ?? '' }}
            by&nbsp;<a href="https://laravel.com/docs/10.x" title='laravel.com' class="btn-link font-weight-bold"
                target="_blank">Laravel
                v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a></span>
    </div>
    <div>
        <ul class="list-table m-0">
            <li><a href="{{ route('intel_introduction') }}" class="text-secondary fw-700">About</a></li>
            <li class="pl-3"><a href="{{ route('docs_licensing') }}" class="text-secondary fw-700">License</a></li>
            <li class="pl-3"><a href="{{ route('docs_general') }}" class="text-secondary fw-700">Documentation</a></li>
            <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary"
                    target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</footer>
