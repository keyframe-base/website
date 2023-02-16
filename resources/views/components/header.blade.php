<header>
    <x-header-logo></x-header-logo>

    <div id="header-all-button-container">
        <div id="header-button-container">
            <x-header-button
                title="Animations"
                link="{{ url('/') }}"
                tooltip="Click to view the list of animations"
            ></x-header-button>

            <x-header-button
                title="Categories"
                link="{{ url('/categories') }}"
                tooltip="Click to view the list of categories"
            ></x-header-button>

            <iframe src="https://ghbtns.com/github-btn.html?user=keyframe-base&repo=website&type=star&count=true" frameborder="0" scrolling="0" width="150" height="20" title="GitHub"></iframe>
        </div>

        <div id="header-image-button-container">
            <x-header-image-button
                link="https://github.com/keyframe-base/website/"
                alt="GitHub's Logo"
                image-name="github-logo"
                tooltip="Visit GitHub of Keyframe Base"
            ></x-header-image-button>
        </div>
    </div>
</header>
