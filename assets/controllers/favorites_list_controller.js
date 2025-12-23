import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ["row", "tableBody"];

    connect() {
        // Listen for favorite button frame updates
        this.element.addEventListener(
            "turbo:frame-load",
            this.handleFavoriteToggle.bind(this)
        );
    }

    disconnect() {
        this.element.removeEventListener(
            "turbo:frame-load",
            this.handleFavoriteToggle.bind(this)
        );
    }

    handleFavoriteToggle(event) {
        const frame = event.target;

        // Check if this is a favorite button frame
        if (!frame.id || !frame.id.startsWith("favorite-")) {
            return;
        }

        // Check if the button now shows an empty star (unfavorited)
        const button = frame.querySelector("button");
        if (!button) return;

        const isNowFavorite = button.querySelector(".bi-star-fill") !== null;

        // If unfavorited, remove the row
        if (!isNowFavorite) {
            const pokemonId = frame.id.replace("favorite-", "");
            this.removeRow(pokemonId);
        }
    }

    removeRow(pokemonId) {
        // Find the row containing this favorite button
        const row = this.rowTargets.find(
            (r) => r.dataset.pokemonId === pokemonId
        );

        if (!row) return;

        row.remove();
        this.checkIfEmpty();
    }

    checkIfEmpty() {
        if (this.rowTargets.length === 0) {
            const table = this.tableBodyTarget.closest("table");
            if (table) {
                table.style.opacity = "0";
                setTimeout(() => {
                    table.remove();
                    this.showEmptyState();
                }, 300);
            }
        }
    }

    showEmptyState() {
        const section = this.element;
        const emptyMessage = document.createElement("h6");
        emptyMessage.className = "m-auto text-center";
        emptyMessage.textContent = "You don't have any favorite pokémon yet.";
        emptyMessage.style.opacity = "0";

        section.appendChild(emptyMessage);

        setTimeout(() => {
            emptyMessage.style.transition = "opacity 0.3s ease-in";
            emptyMessage.style.opacity = "1";
        }, 50);
    }
}
