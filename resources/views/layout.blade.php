<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <meta name=description content="{{ config('kaiju.bio') }}">
    <meta name=author content="{{ config('kaiju.name') }}">
    <meta property="og:image" content="{{ asset('vendor/kaiju/assets') . '/' . config('kaiju.picture') }}">
    <meta property="og:type" content="profile">

    <!-- Begin Jekyll SEO tag v2.5.0 -->
    <title>@yield('title') | {{ config('kaiju.name') }}</title>
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:locale" content="en_US" />
    <meta name="description" content="{{ config('kaiju.description') }}" />
    <meta property="og:description" content="{{ config('kaiju.description') }}" />
    <link rel="canonical" href="{{ config('kaiju.url') }}" />
    <meta property="og:url" content="{{ config('kaiju.url') }}" />
    <meta property="og:site_name" content="{{ config('kaiju.name') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@" />
    <script type="application/ld+json">
        {
            "description": "{{ config('kaiju.description') }}",
            "@type": "WebSite",
            "url": "{{ config('kaiju.url') }}",
            "name": "{{ config('kaiju.name') }}",
            "headline": "@yield('title')",
            "@context": "http://schema.org"
        }
    </script>
    <!-- End Jekyll SEO tag -->


    <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('vendor/kaiju/assets') }}/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="{{ asset('vendor/kaiju/assets') }}/images/favicon/favicon-196x196.png"
        sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('vendor/kaiju/assets') }}/images/favicon/favicon-96x96.png"
        sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('vendor/kaiju/assets') }}/images/favicon/favicon-32x32.png"
        sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('vendor/kaiju/assets') }}/images/favicon/favicon-16x16.png"
        sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('vendor/kaiju/assets') }}/images/favicon/favicon-128.png"
        sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


    <link rel="canonical" href="{{ config('kaiju.url') }}">
    <link rel="alternate" type="application/rss+xml" title="" href="http://localhost:4000/feed.xml" />
    <link rel="stylesheet" href="{{ asset('vendor/kaiju/assets') }}/css/style.css">
</head>

<body>
    <div class="wrapper-normal">
        <div class="{{ request()->is('blog/post/*') ? 'post' : 'page' }} {{ basename(request()->path()) ?: 'home' }}">

            @yield('header')

            @include('kaiju::includes.nav')
        
            @yield('content')
        
            @include('kaiju::includes.footer')

        </div>
    </div>

    <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>

            <symbol id="icon-rss" viewBox="0 0 1024 1024">
                <title>rss</title>
                <path class="path1"
                    d="M122.88 122.88v121.19c362.803 0 656.896 294.195 656.896 656.998h121.293c0-429.773-348.416-778.189-778.189-778.189zM122.88 365.414v121.293c228.813 0 414.362 185.498 414.362 414.413h121.242c0-295.834-239.821-535.706-535.603-535.706zM239.053 668.621c-64.205 0-116.224 52.122-116.224 116.275s52.019 116.224 116.224 116.224 116.173-52.019 116.173-116.224-51.968-116.275-116.173-116.275z">
                </path>
            </symbol>

            <symbol id="icon-facebook" viewBox="0 0 1024 1024">
                <title>facebook</title>
                <path class="path1"
                    d="M870.4 51.2h-716.8c-56.32 0-102.4 46.080-102.4 102.4v716.8c0 56.371 46.080 102.4 102.4 102.4h358.4v-358.4h-102.4v-126.72h102.4v-104.96c0-110.797 62.054-188.621 192.819-188.621l92.314 0.102v133.376h-61.286c-50.893 0-70.246 38.195-70.246 73.626v86.528h131.482l-29.082 126.669h-102.4v358.4h204.8c56.32 0 102.4-46.029 102.4-102.4v-716.8c0-56.32-46.080-102.4-102.4-102.4z">
                </path>
            </symbol>

            <symbol id="icon-twitter" viewBox="0 0 1024 1024">
                <title>twitter</title>
                <path class="path1"
                    d="M886.579 319.795c0.41 8.294 0.563 16.691 0.563 24.986 0 255.488-194.406 549.99-549.888 549.99-109.21 0-210.739-32-296.294-86.886 15.155 1.792 30.515 2.714 46.080 2.714 90.624 0 173.926-30.925 240.026-82.688-84.531-1.587-155.955-57.395-180.531-134.195 11.776 2.202 23.91 3.379 36.352 3.379 17.664 0 34.765-2.304 50.944-6.707-88.422-17.818-155.034-95.898-155.034-189.594 0-0.819 0-1.587 0-2.406 26.061 14.49 55.91 23.194 87.552 24.218-51.866-34.714-86.016-93.798-86.016-160.922 0-35.379 9.523-68.608 26.214-97.178 95.283 116.992 237.773 193.894 398.387 201.984-3.277-14.182-4.966-28.877-4.966-44.083 0-106.701 86.477-193.178 193.229-193.178 55.603 0 105.83 23.398 141.107 60.979 43.981-8.704 85.35-24.781 122.726-46.899-14.438 45.107-45.107 82.995-84.992 106.906 39.117-4.71 76.288-15.002 111.002-30.413-25.907 38.81-58.675 72.806-96.461 99.994z">
                </path>
            </symbol>

            <symbol id="icon-github" viewBox="0 0 1024 1024">
                <title>github</title>
                <path class="path1"
                    d="M674.816 579.021c-36.762 0-66.56 41.318-66.56 92.109 0 50.893 29.798 92.211 66.56 92.211s66.56-41.318 66.56-92.211c-0.051-50.79-29.798-92.109-66.56-92.109zM906.547 339.251c7.629-18.688 7.936-124.877-32.512-226.611 0 0-92.723 10.189-233.011 106.496-29.44-8.192-79.258-12.186-128.973-12.186-49.818 0-99.584 3.994-129.024 12.186-140.339-96.307-233.062-106.496-233.062-106.496-40.397 101.734-39.987 207.923-32.461 226.611-47.514 51.61-76.544 113.613-76.544 198.195 0 367.923 305.306 373.811 382.31 373.811 17.51 0 52.122 0.102 88.781 0.102 36.608 0 71.27-0.102 88.678-0.102 77.107 0 382.31-5.888 382.31-373.811 0-84.582-28.979-146.586-76.493-198.195zM513.434 866.048h-2.867c-193.075 0-343.501-22.989-343.501-210.688 0-45.005 15.872-86.682 53.606-121.293 62.822-57.702 169.216-27.187 289.894-27.187 0.512 0 1.024 0 1.485 0 0.512 0 0.922 0 1.382 0 120.678 0 227.123-30.515 289.997 27.187 37.632 34.611 53.504 76.288 53.504 121.293 0 187.699-150.374 210.688-343.501 210.688zM349.235 579.021c-36.762 0-66.56 41.318-66.56 92.109 0 50.893 29.798 92.211 66.56 92.211 36.813 0 66.611-41.318 66.611-92.211 0-50.79-29.798-92.109-66.611-92.109z">
                </path>
            </symbol>

            <symbol id="icon-gitlab" viewBox="0 0 500 500">
                <title>gitlab</title>
                <path class="path1"
                    d="M249.9,476.8L249.9,476.8l90.7-279.1H159.2L249.9,476.8L249.9,476.8zM32.1,197.7L32.1,197.7L4.5,282.5c-2.5,7.7,0.2,16.2,6.8,21l238.5,173.3L32.1,197.7L32.1,197.7zM32.1,197.7h127.1L104.6,29.6c-2.8-8.6-15-8.6-17.9,0L32.1,197.7L32.1,197.7zM467.6,197.7L467.6,197.7l27.6,84.8c2.5,7.7-0.2,16.2-6.8,21L249.9,476.8L467.6,197.7L467.6,197.7   zM467.6,197.7H340.5l54.6-168.1c2.8-8.6,15-8.6,17.9,0L467.6,197.7L467.6,197.7z">
                </path>
            </symbol>

            <symbol id="icon-youtube" viewBox="0 0 1024 1024">
                <title>youtube</title>
                <path class="path1"
                    d="M512 117.76c-503.194 0-512 44.749-512 394.24s8.806 394.24 512 394.24 512-44.749 512-394.24-8.806-394.24-512-394.24zM676.096 529.101l-229.888 107.315c-20.122 9.318-36.608-1.126-36.608-23.347v-202.138c0-22.17 16.486-32.666 36.608-23.347l229.888 107.315c20.122 9.421 20.122 24.781 0 34.202z">
                </path>
            </symbol>

            <symbol id="icon-mail" viewBox="0 0 1024 1024">
                <title>mail</title>
                <path class="path1"
                    d="M80.589 270.643c24.986 13.414 371.098 199.373 384 206.285s29.594 10.189 46.387 10.189c16.794 0 33.485-3.277 46.387-10.189s359.014-192.87 384-206.285c25.037-13.466 48.691-65.843 2.765-65.843h-866.253c-45.926 0-22.272 52.378 2.714 65.843zM952.986 383.437c-28.416 14.797-378.214 197.069-395.622 206.182s-29.594 10.189-46.387 10.189-28.979-1.075-46.387-10.189-365.21-191.437-393.626-206.234c-19.968-10.445-19.763 1.792-19.763 11.213s0 373.402 0 373.402c0 21.504 28.979 51.2 51.2 51.2h819.2c22.221 0 51.2-29.696 51.2-51.2 0 0 0-363.93 0-373.35s0.205-21.658-19.814-11.213z">
                </path>
            </symbol>

            <symbol id="icon-spotify" viewBox="0 0 1024 1024">
                <title>spotify</title>
                <path class="path1"
                    d="M512 61.44c-248.883 0-450.56 201.626-450.56 450.56 0 248.781 201.677 450.56 450.56 450.56 248.934 0 450.509-201.728 450.509-450.56 0-248.883-201.523-450.56-450.509-450.56zM690.074 742.502c-8.858 0-15.053-3.379-21.555-7.322-60.877-36.915-136.294-56.269-218.010-56.269-41.677 0-86.682 4.966-133.632 14.592l-5.734 1.434c-5.939 1.434-12.032 3.021-16.691 3.021-18.995 0-33.843-14.746-33.843-33.587 0-19.098 10.752-32.614 28.774-35.994 56.115-12.8 108.954-19.046 161.382-19.046 94.976 0 179.866 22.016 252.467 65.485 12.442 7.27 20.275 15.667 20.275 34.202-0.051 18.483-15.002 33.485-33.434 33.485zM736.819 611.379c-10.598 0-17.562-4.045-23.706-7.629-109.722-65.075-273.050-86.682-407.603-50.842-2.253 0.666-4.301 1.28-6.144 1.894-5.069 1.587-9.779 3.174-16.435 3.174-22.118 0-40.090-18.074-40.090-40.346 0-21.453 11.213-36.454 31.437-42.189 51.866-14.234 100.557-23.654 170.65-23.654 113.254 0 223.078 28.416 309.146 79.923 15.667 8.96 22.784 21.197 22.784 39.475 0 22.221-17.971 40.192-40.038 40.192zM789.862 461.875c-9.984 0-16.128-2.406-25.344-7.373-74.394-44.646-190.464-71.219-310.733-71.219-62.669 0-119.603 6.912-169.267 20.326-1.69 0.41-3.277 0.87-5.018 1.382-5.274 1.587-11.878 3.482-18.688 3.482-26.419 0-47.053-20.89-47.053-47.565 0-23.194 13.005-40.909 34.816-47.36 59.955-17.715 128.973-26.675 205.107-26.675 137.114 0 267.571 30.464 357.939 83.507 16.998 9.677 25.344 24.32 25.344 44.646 0 26.266-20.685 46.848-47.104 46.848z">
                </path>
            </symbol>

            <symbol id="icon-lastfm" viewBox="0 0 315 315">
                <title>lastfm</title>
                <path class="path1"
                    d="M264.467 135.355c-2.688-0.92-5.289-1.773-7.787-2.594C236.855 126.26 230 123.449 230 112.41 c0-9.572 6.799-16.26 16.533-16.26c7.986 0 13.502 3.307 19.039 11.41c2.156 3.158 6.348 4.188 9.721 2.389l19.148-10.205 c1.762-0.938 3.076-2.541 3.652-4.453c0.576-1.91 0.367-3.973-0.582-5.729c-11.123-20.596-27.912-31.037-49.9-31.037 c-16.592 0-30.648 5.227-40.654 15.117c-9.918 9.803-15.16 23.453-15.16 39.471c0 33.607 21.297 47.508 58.063 60.156 c21.045 7.311 25.965 10.137 25.965 21.121c0 13.578-11.727 23.434-27.885 23.434c-0.486 0-0.98-0.008-1.48-0.025 c-17.377-0.607-22.725-9.088-30.789-28.297c-12.947-30.814-28.082-67.734-29.205-70.543c-0.012-0.031-0.025-0.064-0.037-0.096 c-16.416-39.535-49.057-62.209-89.555-62.209C43.457 56.654 0 101.9 0 157.518c0 55.598 43.457 100.828 96.873 100.828 c29.217 0 56.559-13.49 75.016-37.014c1.674-2.133 2.064-5.004 1.025-7.508l-11.541-27.781c-1.125-2.711-3.729-4.514-6.66-4.619 c-2.945-0.105-5.654 1.512-6.971 4.135c-9.977 19.9-29.469 32.262-50.869 32.262c-31.658 0-57.414-27.053-57.414-60.303 c0-33.26 25.756-60.32 57.414-60.32c23.029 0 44.1 14.273 52.432 35.516c0.023 0.055 0.045 0.111 0.068 0.166l28.574 67.982 l3.293 7.617c13.811 33.602 34.273 48.652 66.359 48.797h0.133c38.348 0 67.268-26.699 67.268-62.103 C315 159.674 295.66 145.965 264.467 135.355z">
                </path>
            </symbol>

            <symbol id="icon-instagram" viewBox="0 0 1024 1024">
                <title>instagram</title>
                <path class="path1"
                    d="M870.4 51.2h-716.8c-56.32 0-102.4 46.080-102.4 102.4v716.8c0 56.371 46.080 102.4 102.4 102.4h716.8c56.32 0 102.4-46.029 102.4-102.4v-716.8c0-56.32-46.080-102.4-102.4-102.4zM511.181 794.778c156.621 0 283.546-127.027 283.546-283.597 0-17.306-2.202-33.997-5.274-50.381h80.947v369.459c0 19.558-15.872 35.328-35.482 35.328h-645.837c-19.61 0-35.482-15.77-35.482-35.328v-369.459h79.309c-3.123 16.384-5.325 33.075-5.325 50.381 0 156.621 127.027 283.597 283.597 283.597zM333.978 511.181c0-97.894 79.36-177.203 177.254-177.203 97.843 0 177.254 79.309 177.254 177.203s-79.411 177.254-177.254 177.254c-97.946 0-177.254-79.36-177.254-177.254zM834.918 307.2h-82.688c-19.558 0-35.43-15.974-35.43-35.43v-82.79c0-19.558 15.872-35.379 35.379-35.379h82.688c19.661 0 35.533 15.821 35.533 35.379v82.739c0 19.507-15.872 35.482-35.482 35.482z">
                </path>
            </symbol>

            <symbol id="icon-linkedin" viewBox="0 0 1024 1024">
                <title>linkedin</title>
                <path class="path1"
                    d="M256 153.6c0 54.374-36.352 101.171-102.451 101.171-62.208 0-102.349-44.134-102.349-98.509 0-55.808 38.912-105.062 102.4-105.062s101.171 46.592 102.4 102.4zM51.2 972.8v-665.6h204.8v665.6h-204.8z">
                </path>
                <path class="path2"
                    d="M358.4 534.733c0-79.104-2.611-145.203-5.222-202.291h184.013l9.114 88.218h3.891c25.907-41.523 89.395-102.4 195.686-102.4 129.638 0 226.918 86.784 226.918 273.51v381.030h-204.8v-351.283c0-81.613-31.078-143.872-102.4-143.872-54.374 0-81.613 44.032-95.898 80.333-5.222 13.005-6.502 31.13-6.502 49.306v365.517h-204.8v-438.067z">
                </path>
            </symbol>

            <symbol id="icon-google" viewBox="0 0 1024 1024">
                <title>google</title>
                <path class="path1"
                    d="M522.2 438.8v175.6h290.4c-11.8 75.4-87.8 220.8-290.4 220.8-174.8 0-317.4-144.8-317.4-323.2s142.6-323.2 317.4-323.2c99.4 0 166 42.4 204 79l139-133.8c-89.2-83.6-204.8-134-343-134-283 0-512 229-512 512s229 512 512 512c295.4 0 491.6-207.8 491.6-500.2 0-33.6-3.6-59.2-8-84.8l-483.6-0.2z">
                </path>
            </symbol>

            <symbol id="icon-google-plus" viewBox="0 0 1317 1024">
                <title>google-plus</title>
                <path class="path1"
                    d="M821.143 521.714q0 118.857-49.714 211.714t-141.714 145.143-210.857 52.286q-85.143 0-162.857-33.143t-133.714-89.143-89.143-133.714-33.143-162.857 33.143-162.857 89.143-133.714 133.714-89.143 162.857-33.143q163.429 0 280.571 109.714l-113.714 109.143q-66.857-64.571-166.857-64.571-70.286 0-130 35.429t-94.571 96.286-34.857 132.857 34.857 132.857 94.571 96.286 130 35.429q47.429 0 87.143-13.143t65.429-32.857 44.857-44.857 28-47.429 12.286-42.286h-237.714v-144h395.429q6.857 36 6.857 69.714zM1316.571 452v120h-119.429v119.429h-120v-119.429h-119.429v-120h119.429v-119.429h120v119.429h119.429z">
                </path>
            </symbol>

            <symbol id="icon-pinterest" viewBox="0 0 1024 1024">
                <title>pinterest</title>
                <path class="path1"
                    d="M512 68.4c-245 0-443.6 198.6-443.6 443.6 0 188 117 348.4 282 413-3.8-35-7.4-89 1.6-127.2 8-34.6 52-220.4 52-220.4s-13.2-26.6-13.2-65.8c0-61.6 35.8-107.8 80.2-107.8 37.8 0 56.2 28.4 56.2 62.4 0 38-24.2 95-36.8 147.6-10.6 44.2 22 80.2 65.6 80.2 78.8 0 139.4-83.2 139.4-203.2 0-106.2-76.4-180.4-185.2-180.4-126.2 0-200.2 94.6-200.2 192.6 0 38.2 14.6 79 33 101.2 3.6 4.4 4.2 8.2 3 12.8-3.4 14-10.8 44.2-12.4 50.4-2 8.2-6.4 9.8-14.8 6-55.4-25.8-90-106.8-90-171.8 0-140 101.6-268.4 293-268.4 153.8 0 273.4 109.6 273.4 256.2 0 152.8-96.4 276-230.2 276-45 0-87.2-23.4-101.6-51 0 0-22.2 84.6-27.6 105.4-10 38.6-37 86.8-55.2 116.2 41.6 12.8 85.6 19.8 131.4 19.8 245 0 443.6-198.6 443.6-443.6 0-245.2-198.6-443.8-443.6-443.8z">
                </path>
            </symbol>

            <symbol id="icon-medium" viewBox="0 0 179.2 179.2">
                <title>medium</title>
                <path transform="scale(0.1,-0.1) translate(0,-1536)"
                    d="M597 1115v-1173q0 -25 -12.5 -42.5t-36.5 -17.5q-17 0 -33 8l-465 233q-21 10 -35.5 33.5t-14.5 46.5v1140q0 20 10 34t29 14q14 0 44 -15l511 -256q3 -3 3 -5zM661 1014l534 -866l-534 266v600zM1792 996v-1054q0 -25 -14 -40.5t-38 -15.5t-47 13l-441 220zM1789 1116 q0 -3 -256.5 -419.5t-300.5 -487.5l-390 634l324 527q17 28 52 28q14 0 26 -6l541 -270q4 -2 4 -6z" />
            </symbol>

            <symbol id="icon-vimeo" viewBox="0 0 21 21">
                <title>vimeo</title>
                <path
                    d="M17.811,2.018c2.017,0.053,3.026,1.198,3.036,3.438c0,0.147-0.005,0.3-0.013,0.457c-0.089,1.899-1.502,4.486-4.245,7.76 c-2.829,3.43-5.229,5.147-7.2,5.156c-1.226,0-2.244-1.05-3.061-3.151l-0.858-2.88L4.622,9.922C3.997,7.838,3.329,6.798,2.616,6.798 c-0.156,0-0.697,0.304-1.626,0.91L0,6.537l1.536-1.276l1.511-1.263C4.4,2.914,5.429,2.328,6.135,2.241 c0.094-0.01,0.188-0.013,0.284-0.013c1.449,0,2.354,1.041,2.709,3.124C9.326,6.54,9.49,7.506,9.623,8.248 C9.752,8.992,9.86,9.51,9.946,9.805c0.479,1.97,0.995,2.96,1.55,2.968c0.426,0,1.082-0.642,1.968-1.926 c0.866-1.319,1.332-2.296,1.392-2.932c0.019-0.129,0.026-0.25,0.026-0.362c0-0.861-0.474-1.29-1.418-1.29 c-0.479,0-0.99,0.102-1.537,0.299c0.98-3.021,2.864-4.534,5.65-4.544C17.655,2.018,17.732,2.018,17.811,2.018z" />
            </symbol>

            <symbol id="icon-stackoverflow" viewBox="0 0 878 1024">
                <title>stackoverflow</title>
                <path class="path1"
                    d="M736.571 932.571h-638.857v-274.286h-91.429v365.714h821.714v-365.714h-91.429v274.286zM198.286 633.143l18.857-89.714 447.429 94.286-18.857 89.143zM257.143 419.429l38.286-83.429 414.286 193.714-38.286 82.857zM372 216l58.286-70.286 350.857 293.143-58.286 70.286zM598.857 0l272.571 366.286-73.143 54.857-272.571-366.286zM188.571 840.571v-90.857h457.143v90.857h-457.143z">
                </path>
            </symbol>

            <symbol id="icon-reddit" viewBox="0 0 1024 1024">
                <title>reddit</title>
                <path class="path1"
                    d="M1024 483.429q0 33.143-16.857 60.286t-45.429 41.429q6.857 26.286 6.857 54.857 0 88.571-60.857 164t-166 119.143-228.571 43.714-228.286-43.714-165.714-119.143-60.857-164q0-26.857 6.286-53.714-29.143-14.286-46.857-42t-17.714-60.857q0-46.857 33.143-80.286t80.571-33.429q48.571 0 82.857 36 124.571-86.857 294.286-92.571l66.286-297.714q1.714-7.429 8.571-12t14.857-2.857l210.857 46.286q10.286-21.143 30.857-34t45.143-12.857q35.429 0 60.571 24.857t25.143 60.286-25.143 60.571-60.571 25.143-60.286-24.857-24.857-60.286l-190.857-42.286-59.429 269.714q171.429 5.143 296.571 91.429 33.143-34.857 81.714-34.857 47.429 0 80.571 33.429t33.143 80.286zM238.857 597.143q0 35.429 24.857 60.571t60.286 25.143 60.571-25.143 25.143-60.571-25.143-60.286-60.571-24.857q-34.857 0-60 25.143t-25.143 60zM701.714 800q6.286-6.286 6.286-14.857t-6.286-14.857q-5.714-5.714-14.286-5.714t-14.857 5.714q-23.429 24-69.143 35.429t-91.429 11.429-91.429-11.429-69.143-35.429q-6.286-5.714-14.857-5.714t-14.286 5.714q-6.286 5.714-6.286 14.571t6.286 15.143q24.571 24.571 67.714 38.857t70 16.857 52 2.571 52-2.571 70-16.857 67.714-38.857zM700 682.857q35.429 0 60.286-25.143t24.857-60.571q0-34.857-25.143-60t-60-25.143q-35.429 0-60.571 24.857t-25.143 60.286 25.143 60.571 60.571 25.143z">
                </path>
            </symbol>

            <symbol id="icon-quora" viewBox="0 0 76 76">
                <title>quora</title>
                <path class="path1"
                    d="M67.9,59.1c0,0-0.4,5.3-5.2,5.3c-3.7,0-6.3-2.8-8.7-6.5c6.8-5.9,11.1-14.7,11.1-24.6C65.1,15.4,51.1,1,33.8,1 S2.6,15.4,2.6,33.2s14,32.2,31.3,32.2c3.1,0,6.2-0.5,9-1.4C46.5,69.8,51,75,58.2,75c14.6,0,15.2-15.9,15.2-15.9L67.9,59.1 L67.9,59.1z M33.8,60.2c-10.1,0-18.2-12.1-18.2-26.9S23.8,6.3,33.8,6.3s18.2,12.1,18.2,26.9c0,5.9-1.3,11.4-3.5,15.8 c-2.5-3.5-5.4-6.5-9.7-7.5c-7.5-1.7-14,1.7-16.1,3.4l1.9,4c0,0,2-1.1,6.8,0c3.1,0.7,5.4,4.9,8.1,9.8C37.9,59.7,35.9,60.2,33.8,60.2   z">
                </path>
            </symbol>

            <symbol id="icon-microphone" viewBox="-8 -4 34 37">
                <title>quora</title>
                <path clip-rule="evenodd"
                    d="M10.8,22.8V26h5v2h-5h-3h-5v-2h5v-3.2C3.4,22.2,0,18.7,0,14.4v-3  c0-0.1,0-0.3,0-0.4h2.8c0,0.3-0.1,0.6-0.1,0.9V14c0,3.3,2.9,6,6.5,6c3.6,0,6.5-2.7,6.5-6v-2.1c0-0.3,0-0.6-0.1-0.9h2.8  c0,0.1,0,0.3,0,0.4v3C18.6,18.7,15.2,22.2,10.8,22.8z M9.3,18c-2.5,0-4.5-2-4.5-4.5v-9C4.8,2,6.8,0,9.3,0s4.5,2,4.5,4.5v9  C13.8,16,11.8,18,9.3,18z"
                    fill="#0D0D0D" fill-rule="evenodd" />
            </symbol>

        </defs>
    </svg>

<script src="{{ asset('vendor/kaiju/assets') }}/js/md.js"></script>

</body>

</html>