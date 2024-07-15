    <!--
        base vendor bundle:
        DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
        + pace.js (recommended)
        + jquery.js (core)
        + jquery-ui-cust.js (core)
        + popper.js (core)
        + bootstrap.js (core)
        + slimscroll.js (extension)
        + app.navigation.js (core)
        + ba-throttle-debounce.js (core)
        + waves.js (extension)
        + smartpanels.js (extension)
        + src/../jquery-snippets.js (core)
    -->
    <script src="/admin/js/vendors.bundle.js"></script>
    <script src="/admin/js/app.bundle.js"></script>
    <script src="/admin/js/confirmRedirect.js"></script>
    <script src="/admin/js/customAlert.js"></script>
    {{-- <script src="/admin/js/logout.js"></script> --}}
    {{--
    <script type="text/javascript">
        /* Activate smart panels */
        $('#js-page-content').smartPanel();
    </script>
    --}}
    <script src="/admin/js/notifications/toastr/toastr.js"></script>
    {{-- <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if (session('success'))
            toastr.success('{{ session('success') }}', null, {
                iconClass: 'toast-success'
            });
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}', null, {
                iconClass: 'toast-error'
            });
        @endif

        @if (session('info'))
            toastr.info('{{ session('info') }}', null, {
                iconClass: 'toast-info'
            });
        @endif

        @if (session('warning'))
            toastr.warning('{{ session('warning') }}', null, {
                iconClass: 'toast-warning'
            });
        @endif
    </script> --}}
