import { Controller } from "@hotwired/stimulus";
import { Toast } from "bootstrap";

export default class extends Controller {
    connect() {
        // Listen for turbo:frame-load event to show toast after favorite toggle
        this.element.addEventListener(
            "turbo:frame-load",
            this.showToast.bind(this)
        );
    }

    disconnect() {
        this.element.removeEventListener(
            "turbo:frame-load",
            this.showToast.bind(this)
        );
    }

    showToast(event) {
        // Get the frame element to check if it's a favorite button
        const frame = event.target;
        if (!frame.id || !frame.id.startsWith("favorite-")) {
            return;
        }

        // Check if the button has the filled star (is favorite) or empty star
        const button = frame.querySelector("button");
        if (!button) return;

        const isFavorite = button.querySelector(".bi-star-fill") !== null;
        const pokemonName = this.getPokemonName(frame);

        // Update toast message
        const toastEl = document.getElementById("favoriteToast");
        const toastBody = toastEl.querySelector(".toast-body");

        if (isFavorite) {
            toastBody.textContent = `${pokemonName} added to favorites.`;
        } else {
            toastBody.textContent = `${pokemonName} removed from favorites.`;
        }

        // Show the toast
        const toast = new Toast(toastEl, {
            autohide: true,
            delay: 3000,
        });
        toast.show();
    }

    getPokemonName(frame) {
        // Try to find the pokemon name from the same row
        const row = frame.closest("tr");
        if (row) {
            const nameCell = row.querySelector("td.fw-bold a");
            if (nameCell) {
                return nameCell.textContent.trim();
            }
        }
        return "Pokémon";
    }
}
