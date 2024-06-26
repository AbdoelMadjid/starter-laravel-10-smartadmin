@extends('admin.inc.main')
@section('title', 'Dashboard')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/page-invoice.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'home',
                'heading1' => 'Dashboard',
                'heading2' => 'Admin',
                'sup' => 'ADDON',
                'pagedescription' => 'Administration with dashboard',
            ])
                <div class="subheader-block d-lg-flex align-items-center">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Selamat Datang</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-primary-500">
                            Abdul Madjid
                        </span>
                    </div>
                </div>
                <div
                    class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Status</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-danger-500">
                            MASTER
                        </span>
                    </div>
                </div>
            @endcomponent
        </div>

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g shadow-5">
            <div class="input-group input-group-lg mb-g">
                <input type="text" class="form-control shadow-inset-2" placeholder="Search Threads">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fal fa-search"></i></span>
                </div>
            </div>
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
            <p>
                Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking around
                the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey, we have
                taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All feedback will
                be used to make your favorite theme that much better, but these were some of the highlights.
            </p>
            <p>
                A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is and a revolutionary
                view on what a good bootstrap based template should be, having something new to look at can make anyone feel
                invigorated. And let's be honest, who doesn't like a modern update of your favorite theme! While most you
                are still happy with the current variations, around 50% of you have asked for vue.js support. With this
                framework rapidly gaining popularity it is surely one to include in the family of frameworks! And, last, but
                certainly not least, a very large majority of a staggering 90% wanted more plugins and regular updates.
            </p>
            <p>
                SmartAdmin takes great care to ensure that valuable and popular plugins are supported as much as possible on
                a drop-in basis, meaning without doing heavy modifications to extend the look and feel of your favorite
                admin template :) . And if the plugin is in demand enough, we won't hesitate to put in the hours to support
                the look and feel of SmartAdmin.
            </p>
            <p>
                But how you ask? Well in order to make the next version of SmartAdmin the best ever and to re-deliver on our
                promise of continued support and quality, we wrote the theme from the ground-up using the latest Bootstrap
                practises. As a result we are better able to support new frameworks as they come up and ensure that plugin
                support is quick and reliable. In addition we have partnered up with some of the communities best developers
                to ensure that our tailor made variations are of top-notch quality and follow the principles that we at
                SmartAdmin take to heart.
            </p>
            <p>
                We're really confident that SmartAdmin 4.0 will bring back that first theme experience while still keeping
                the familiarity that you have grown used to. It's a brand new theme, but with all the things you love and
                then some. And to ensure that you our loyal customers get this experience first-hand, we will be publishing
                the HTML update free-of-charge as an update to your current SmartAdmin license!
            </p>
            <p>
                Last but not least, we would like to thank each and everyone of you, our loyal customers, for your patience
                and continued support in SmartAdmin. Without you this would not have been possible!
            </p>
            <p>
                Sincerely,<br>
                The SmartAdmin Team<br>
            </p>
        </div>
        <div class="container">
            <div data-size="A4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex align-items-center mb-5">
                            <h2 class="keep-print-font fw-500 mb-0 text-primary flex-1 position-relative">
                                SmartAdmin WebApp
                                <small class="text-muted mb-0 fs-xs">
                                    227 Cobblestone Road 30000 Bedrock, Cobblestone County
                                </small>
                                <!-- barcode demo only -->
                                <img id="barcode" alt=""
                                    class="position-absolute pos-top pos-right height-3 mt-1 hidden-md-down"
                                    src="data:image/png;base64,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">
                            </h2>
                        </div>
                        <h3 class="fw-300 display-4 fw-500 color-primary-600 keep-print-font pt-4 l-h-n m-0">
                            INVOICE
                        </h3>
                        <div class="text-dark fw-700 h1 mb-g keep-print-font">
                            # 1
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 d-flex">
                        <div class="table-responsive">
                            <table class="table table-clean table-sm align-self-end">
                                <tbody>
                                    <tr>
                                        <td>
                                            Issue Date:
                                        </td>
                                        <td>
                                            05/04/2019
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Due Date:</strong>
                                        </td>
                                        <td>
                                            05/25/2019
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Net:
                                        </td>
                                        <td>
                                            21
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Currency:
                                        </td>
                                        <td>
                                            USD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            P.O. #
                                        </td>
                                        <td>
                                            1/3-147
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-4 ml-sm-auto">
                        <div class="table-responsive">
                            <table class="table table-sm table-clean text-right">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Bill to:</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Slate Rock and Gravel Company</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            222 Rocky Way
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            30000 Bedrock, Cobblestone County
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            +555 7 123-5555
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            fred@slaterockgravel.bed
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Attn: Fred Flintstone
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table mt-5">
                                <thead>
                                    <tr>
                                        <th class="text-center border-top-0 table-scale-border-bottom fw-700"></th>
                                        <th class="border-top-0 table-scale-border-bottom fw-700">Item</th>
                                        <th class="border-top-0 table-scale-border-bottom fw-700">Description</th>
                                        <th class="text-right border-top-0 table-scale-border-bottom fw-700">Unit Cost</th>
                                        <th class="text-center border-top-0 table-scale-border-bottom fw-700">Qty</th>
                                        <th class="text-right border-top-0 table-scale-border-bottom fw-700">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center fw-700">1</td>
                                        <td class="text-left strong">Origin License</td>
                                        <td class="text-left">Extended License</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$999.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center fw-700">2</td>
                                        <td class="text-left">Custom Services</td>
                                        <td class="text-left">Instalation and Customization (cost per hour)</td>
                                        <td class="text-right">$150.00</td>
                                        <td class="text-center">20</td>
                                        <td class="text-right">$3,000.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center fw-700">3</td>
                                        <td class="text-left">Hosting</td>
                                        <td class="text-left">1 year subcription</td>
                                        <td class="text-right">$499.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$499.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center fw-700">4</td>
                                        <td class="text-left">Platinum Support</td>
                                        <td class="text-left">1 year subcription 24/7</td>
                                        <td class="text-right">$3,999.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$3,999.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 ml-sm-auto">
                        <table class="table table-clean">
                            <tbody>
                                <tr>
                                    <td class="text-left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="text-right">$8,497.00</td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Discount (20%)</strong>
                                    </td>
                                    <td class="text-right">$1,699.40</td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>VAT (10%)</strong>
                                    </td>
                                    <td class="text-right">$679.76</td>
                                </tr>
                                <tr class="table-scale-border-top border-left-0 border-right-0 border-bottom-0">
                                    <td class="text-left keep-print-font">
                                        <h4 class="m-0 fw-700 h2 keep-print-font color-primary-700">Total</h4>
                                    </td>
                                    <td class="text-right keep-print-font">
                                        <h4 class="m-0 fw-700 h2 keep-print-font">$7,477.36</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Paid</strong>
                                    </td>
                                    <td class="text-right">
                                        <strong>$0</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left keep-print-font">
                                        <h4 class="m-0 fw-700 h2 keep-print-font color-primary-700">Amount Due</h4>
                                    </td>
                                    <td class="text-right keep-print-font">
                                        <h4 class="m-0 fw-700 h2 keep-print-font text-danger">$7,477.36</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="py-5 text-primary">
                            Fred, thank you very much. We really appreciate your business.
                            <br>
                            Please send payments before the due date.
                        </h4>
                        <p class="mt-2 text-muted mb-0">
                            Payment details: ACC:123006705 IBAN:US100000060345 SWIFT:BOA447
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
