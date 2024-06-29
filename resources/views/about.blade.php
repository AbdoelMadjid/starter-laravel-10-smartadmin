@extends('admin.inc.main')
@section('title', 'About')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'info-circle',
                'heading1' => 'About',
            ])
            @endcomponent
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g shadow-5">
            <h3>
                SmartAdmin Team
                <small class="mb-0">We build cool things...</small>
            </h3>
            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                <div
                    class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                    <img src="/admin/img/demo/authors/sunny.png" alt="Sunny A."
                        class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                    <div class="ml-2 mr-3">
                        <h5 class="m-0">
                            Sunny A. (UI/UX Expert)
                            <small class="m-0 fw-300">
                                Lead Author
                            </small>
                        </h5>
                        <a href="https://twitter.com/@myplaneticket" class="text-info fs-sm"
                            target="_blank">@myplaneticket</a>
                        -
                        <a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank"
                            title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                    </div>
                </div>
                <div
                    class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                    <img src="/admin/img/demo/authors/josh.png" alt="Jos K."
                        class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                    <div class="ml-2 mr-3">
                        <h5 class="m-0">
                            Jos K. (ASP.NET Developer)
                            <small class="m-0 fw-300">
                                Partner &amp; Contributor
                            </small>
                        </h5>
                        <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                        <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank"
                            title="Contact Jos"><i class="fal fa-envelope"></i></a>
                    </div>
                </div>
                <div
                    class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                    <img src="/admin/img/demo/authors/jovanni.png" alt="Jovanni Lo"
                        class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                    <div class="ml-2 mr-3">
                        <h5 class="m-0">
                            Jovanni L. (PHP Developer)
                            <small class="m-0 fw-300">
                                Partner &amp; Contributor
                            </small>
                        </h5>
                        <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                        <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank"
                            title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                    </div>
                </div>
                <div
                    class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                    <img src="/admin/img/demo/authors/roberto.png" alt="Jovanni Lo"
                        class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                    <div class="ml-2 mr-3">
                        <h5 class="m-0">
                            Roberto R. (Rails Developer)
                            <small class="m-0 fw-300">
                                Partner &amp; Contributor
                            </small>
                        </h5>
                        <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                        <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank"
                            title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <p>
                Last but not least, we would like to thank each and everyone of you, our loyal customers, for your patience
                and continued support in SmartAdmin. Without you this would not have been possible!
            </p>
            <p>
                Sincerely,<br>
                The SmartAdmin Team<br>
            </p>
        </div>

        <p class="fs-lg">
            <a href="#" class="fw-500 fs-xl">> Ready to join our dedicated team?</a><br>
            We are always on the lookout to expand and add unique app flavors to SmartAdmin. If you think you can contribute
            and create your very own flavors, get in touch with us or <a href="#" target="_blank">click here to
                learn
                more</a> about our partnership program.
        </p>
    </main>
@endsection
