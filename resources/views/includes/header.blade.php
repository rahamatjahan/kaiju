<header class="header-home animated">

    <a class="link" href="{{ route('about') }}">
        <img class="selfie" alt="{{ config('kaiju.name') }}"
            src="{{ config('kaiju.external-image') 
                ? config('kaiju.picture') 
                : asset('vendor/kaiju/assets') . '/' . config('kaiju.picture') }}" />
    </a>

    <h1 class="title">{{ config('kaiju.name') }}</h1>
    <h2 class="description">{{ config('kaiju.bio') }}</h2>

    <div class="social-links">

        @foreach (config('kaiju.socials') as $social => $link)
        <a class="link" data-title="{{ $link }}" href="{{ $link }}" target="_blank">
            <svg class="icon icon-{{ $social }}">
                <use xlink:href="#icon-{{ $social }}"></use>
            </svg>
        </a>
        @endforeach

    </div>

</header>