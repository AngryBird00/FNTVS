<html lang="en" data-uw-w-loader="" data-uw-rm-lang="false">
<div id="in-page-channel-node-id" data-channel-name="in_page_channel_P3mSZX"></div>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.0" uw-rm-meta-viewport="">
    <link rel="icon" href="/favicon.ico">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <style>
        .app-loader-container {
            height: 100vh;
            background-color: #f6f8f9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .app-loader {
            display: block;
            width: 1em;
            height: 1em;
            font-size: 48px;
            border-radius: 50%;
            border: 0.125em solid hsla(210, 10%, 75%, 0.25);
            border-top-color: #b9bfc6;
            animation: appLoader 1s infinite linear;
        }

        @keyframes appLoader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <link href="{{ asset('frontend/css/vue/app.2a5d36041115ee86.css') }}" rel="stylesheet">
    <link rel="canonical" href="">
    <link rel="icon" type="image/png" href="https://d10cq78zmnjvsx.cloudfront.net/images/global/favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="p:domain_verify" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="description"
        content="Invest in world-class private market investments like real estate, venture capital, and private credit.  is America's largest direct-access alternative asset manager.">
    <meta property="og:description"
        content="Invest in world-class private market investments like real estate, venture capital, and private credit.  is America's largest direct-access alternative asset manager.">
    <meta property="og:image" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vue/marketing-site-home.ea4e2f1afb8e596e.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vue/password.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vue/question-framework.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vue/question-framework-prompt.css') }}">
    <meta property="og:title" content="@yield('title')">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="padding-top: 0px; margin: 0px;" data-new-gr-c-s-check-loaded="14.1184.0" data-gr-ext-installed="">
    <div id="app">
        <div class="toast-container"></div>
        <div data-dd-privacy="mask-user-input" class="page bg-color-white">
            <div class="page__main">
                <header data-context="header" class="bb">
                    <div class="display-none-md container">
                        <div class="page__header-inner display-flex justify-content-space-between"><a href="{{ url('/') }}"
                                target="_self" class="router-link-active" data-test="-logo-mobile"
                                data-uw-rm-brl="PR" data-uw-original-href="{{ url('/') }}"><img
                                    src="https://d10cq78zmnjvsx.cloudfront.net/interface/logo-hz-color.svg"
                                    alt=" logo" data-uw-rm-alt-original=" logo" role="img"
                                    data-uw-rm-alt="ALT" style="width: 137px;"></a><button data-v-4813c0de=""
                                tabindex="0" data-test="cancel-modal-mobile" type="button"
                                class="text-color-current-color link"><span data-v-4813c0de=""
                                    class="show-for-sr">Cancel</span><svg version="1.1" viewBox="0 0 16 16"
                                    class="svg-icon svg-fill" data-v-4813c0de="">
                                    <g stroke="currentColor" stroke-width="2.5">
                                        <path pid="0" d="M2 2l12 12M2 14L14 2"></path>
                                    </g>
                                </svg></button></div>
                    </div>
                    <div class="display-none-smo container">
                        <div class="page__header-inner display-flex align-items-center justify-content-space-between">
                            <div class="display-flex align-items-center"><a href="{{ url('/') }}" target="_self"
                                    class="router-link-active" data-test="-logo-desktop" data-uw-rm-brl="PR"
                                    data-uw-original-href="https://.com/"><img
                                        src="https://d10cq78zmnjvsx.cloudfront.net/interface/logo-hz-color.svg"
                                        alt=" logo" data-uw-rm-alt-original=" logo" role="img"
                                        data-uw-rm-alt="ALT" style="width: 137px;"></a></div><button data-v-4813c0de=""
                                tabindex="0" data-test="cancel-modal-desktop" type="button"
                                class="mr-300 text-color-current-color link"><span data-v-4813c0de=""
                                    class="show-for-sr">Cancel</span><svg version="1.1" viewBox="0 0 16 16"
                                    class="svg-icon svg-fill" data-v-4813c0de="">
                                    <g stroke="currentColor" stroke-width="2.5">
                                        <path pid="0" d="M2 2l12 12M2 14L14 2"></path>
                                    </g>
                                </svg></button>
                        </div>
                    </div>
                </header>
                <div id="main-content" data-context="main" class="page__content">
                   @yield('content')
                </div>
            </div>
            <div id="footer">
                <div class="container" data-context="footer">
                    <div class="bt"></div>
                    <div class="pt-150 pb-150">
                        <div class="footer__disclaimers eta muted">
                            <p> {{ config('app.name') }}, LLC (“{{ config('app.name') }}“) operates a website at .com and certain mobile apps
                                (the “Platform“). By using the Platform, you accept our <a
                                    href="/website-documents/Terms%20of%20Service" target="_blank"
                                    class="link text-color-current-color text-decoration-underline text-link--dark-mode"
                                    data-uw-rm-brl="PR"
                                    data-uw-original-href=""
                                    aria-label="Terms of Service - open in a new tab" data-uw-rm-ext-link=""
                                    uw-rm-external-link-id="">Terms
                                    of Service</a> and <a href="" target="_blank"
                                    class="link text-color-current-color text-decoration-underline text-link--dark-mode"
                                    data-uw-rm-brl="PR"
                                    data-uw-original-href=""
                                    aria-label="Privacy Policy - open in a new tab" data-uw-rm-ext-link=""
                                    uw-rm-external-link-id="">Privacy
                                    Policy</a>. All images and return and projection figures shown are for illustrative
                                purposes only, may assume additional investments over time, and are not actual
                                customer or model returns or projections. Past performance is no guarantee of future
                                results. Any historical returns, expected returns, or probability projections may not
                                reflect actual future performance. All securities involve risk and may result in partial
                                or total loss. While the data we use from third parties is believed to be reliable, we
                                cannot ensure the accuracy or completeness of data provided by investors or other third
                                parties. Neither  nor any of its affiliates provide tax advice and do not
                                represent in any manner that the outcomes described herein will result in any particular
                                tax consequence. Prospective investors should confer with their personal tax advisors
                                regarding the tax consequences based on their particular circumstances. Neither
                                nor any of its affiliates assume responsibility for the tax consequences for any
                                investor of any investment. <a href="" target="_blank"
                                    class="text-color-current-color text-decoration-underline text-link--dark-mode"
                                    data-uw-rm-brl="PR" data-uw-original-href=""
                                    aria-label="Full Disclosure - open in a new tab" data-uw-rm-ext-link=""
                                    uw-rm-external-link-id=""> Full
                                    Disclosure </a></p>
                            <p> The publicly filed offering circulars of the issuers sponsored by Rise Companies Corp.,
                                not all of which may be currently qualified by the Securities and Exchange Commission,
                                may be found at <a href="/oc" target="_self"
                                    class="text-color-current-color text-decoration-underline text-link--dark-mode"
                                    data-uw-rm-brl="PR"
                                    data-uw-original-href="">.com/oc</a>. For investors
                                and potential investors who are residents of the State of Washington, please send all
                                correspondence, including any questions or comments, to washingtonstate@.com.
                            </p>
                            <p>  takes any potential security issues seriously, and encourages the responsible
                                and timely reporting of unknown security issues. Please send any discovered security
                                concerns to <a href="mailto:securitydisclosure@.com" target="_self"
                                    class="text-color-current-color text-decoration-underline text-link--dark-mode">securitydisclosure@.com</a>
                            </p>
                            <p> © 2024 {{ config('app.name') }}, LLC. All Rights Reserved. eREIT, eFund and eDirect are trademarks of
                                Rise Companies Corp. Proudly designed and coded in Washington, D.C. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
