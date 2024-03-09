class NotFoundPage {
    constructor() {
        this.notFoundBackButton = el("not-found-back-button");

        this.#registerEvents();
    }

    #registerEvents() {
        this.notFoundBackButton.addEventListener("click", back);
    }
}

const page = new NotFoundPage();