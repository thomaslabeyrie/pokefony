import { Controller } from "@hotwired/stimulus";
import { Modal } from "bootstrap";

export default class extends Controller {
    static values = {
        pokemonId: Number,
        pokemonName: String
    };

    async loadModal(event) {
        event.preventDefault();

        const modalId = `addToTeamModal-${this.pokemonIdValue}`;

        // Check if modal already exists
        let modalEl = document.getElementById(modalId);

        if (!modalEl) {
            // Fetch modal content from server
            try {
                const url = this.hasPokemonNameValue
                    ? `/teams/modal/${this.pokemonIdValue}?name=${encodeURIComponent(this.pokemonNameValue)}`
                    : `/teams/modal/${this.pokemonIdValue}`;
                const response = await fetch(url);
                const html = await response.text();

                // Append modal to body
                document.body.insertAdjacentHTML('beforeend', html);
                modalEl = document.getElementById(modalId);
            } catch (error) {
                console.error('Error loading modal:', error);
                return;
            }
        }

        // Show the modal
        const modal = new Modal(modalEl);
        modal.show();
    }
}
