<div id="landing-cover">
    <div id="landing-cover-text-container">
        <span id="landing-cover-title">{{ $title }}</span>
        <span id="landing-cover-subtitle">{{ $subtitle }}</span>
    </div>

    <x-animation-card></x-animation-card>

    <img
        src="{{ asset('img/scroll-down-icon.svg') }}"
        alt="Scroll down"
        id="landing-cover-scroll-down-icon"
    >
</div>
