class IndexPage {
    constructor() {
        this.headerButton = el("header-button");
        this.ctaExploreAnimationsButton = el("cta-explore-animations-button");
        this.ctaWatchTutorialButton = el("cta-watch-tutorial-button");
        this.usageStepsButton = el("usage-steps-button");
        this.examplesButton = el("examples-button");

        this.#registerEvents();
    }

    #registerEvents() {
        this.headerButton.addEventListener("click", () => this.openCatalog());
        this.ctaExploreAnimationsButton.addEventListener("click", () => this.openCatalog());
        this.ctaWatchTutorialButton.addEventListener("click", () => this.openCatalog());
        this.usageStepsButton.addEventListener("click", () => this.openCatalog());
        this.examplesButton.addEventListener("click", () => this.openCatalog());
    }

    openCatalog() {
        redirect("/catalog");
    }
}

const page = new IndexPage();