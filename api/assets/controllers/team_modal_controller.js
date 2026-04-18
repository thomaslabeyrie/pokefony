import { Controller } from "@hotwired/stimulus";
import { Modal, Toast } from "bootstrap";

export default class extends Controller {
    static targets = ["teamNameInput"];
    static values = {
        pokemonId: Number,
        pokemonName: String
    };

    async createTeam(event) {
        event.preventDefault();

        const teamName = this.teamNameInputTarget.value.trim();
        if (!teamName) return;

        try {
            const response = await fetch('/teams/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    team_name: teamName,
                    pokemon_id: this.pokemonIdValue
                })
            });

            if (response.ok) {
                const html = await response.text();

                // Update the team button via Turbo Frame
                const frame = document.getElementById(`team-button-${this.pokemonIdValue}`);
                if (frame) {
                    frame.innerHTML = html;
                }

                // Close modal
                try {
                    const modalEl = this.element.closest('.modal');
                    if (modalEl) {
                        const modal = Modal.getInstance(modalEl);
                        if (modal) {
                            modal.hide();
                        }
                    }
                } catch (modalError) {
                    console.error('Error closing modal:', modalError);
                }

                // Show toast notification
                try {
                    this.showToast(teamName);
                } catch (toastError) {
                    console.error('Error showing toast:', toastError);
                }
            } else {
                const data = await response.json();
                alert(data.error || 'Failed to create team');
            }
        } catch (error) {
            console.error('Error creating team:', error);
            alert('Failed to create team');
        }
    }

    async addToExistingTeam(event) {
        const teamId = event.currentTarget.dataset.teamId;
        const teamName = event.currentTarget.dataset.teamName || 'team';

        try {
            const response = await fetch(`/teams/${teamId}/add/${this.pokemonIdValue}`, {
                method: 'POST',
            });

            if (response.ok) {
                const html = await response.text();

                // Update the team button via Turbo Frame
                const frame = document.getElementById(`team-button-${this.pokemonIdValue}`);
                if (frame) {
                    frame.innerHTML = html;
                }

                // Close modal
                try {
                    const modalEl = this.element.closest('.modal');
                    if (modalEl) {
                        const modal = Modal.getInstance(modalEl);
                        if (modal) {
                            modal.hide();
                        }
                    }
                } catch (modalError) {
                    console.error('Error closing modal:', modalError);
                }

                // Show toast notification
                try {
                    this.showToast(teamName);
                } catch (toastError) {
                    console.error('Error showing toast:', toastError);
                }
            } else {
                const data = await response.json();
                alert(data.error || 'Failed to add to team');
            }
        } catch (error) {
            console.error('Error adding to team:', error);
            alert('Failed to add to team');
        }
    }

    async removeFromTeam(event) {
        const teamId = event.currentTarget.dataset.teamId;
        const teamName = event.currentTarget.dataset.teamName || 'team';

        // Confirmation dialog
        const pokemonName = this.pokemonNameValue || 'this Pokemon';
        const formattedPokemonName = pokemonName.charAt(0).toUpperCase() + pokemonName.slice(1);
        if (!confirm(`Remove ${formattedPokemonName} from ${teamName}?`)) {
            return;
        }

        try {
            const response = await fetch(`/teams/${teamId}/remove/${this.pokemonIdValue}`, {
                method: 'POST',
            });

            if (response.ok) {
                const html = await response.text();

                // Update the team button via Turbo Frame
                const frame = document.getElementById(`team-button-${this.pokemonIdValue}`);
                if (frame) {
                    frame.innerHTML = html;
                }

                // Close modal
                try {
                    const modalEl = this.element.closest('.modal');
                    if (modalEl) {
                        const modal = Modal.getInstance(modalEl);
                        if (modal) {
                            modal.hide();
                        }
                    }
                } catch (modalError) {
                    console.error('Error closing modal:', modalError);
                }

                // Show toast notification
                try {
                    this.showRemoveToast(teamName);
                } catch (toastError) {
                    console.error('Error showing toast:', toastError);
                }
            } else {
                const data = await response.json();
                alert(data.error || 'Failed to remove from team');
            }
        } catch (error) {
            console.error('Error removing from team:', error);
            alert('Failed to remove from team');
        }
    }

    showToast(teamName) {
        const toastEl = document.getElementById("favoriteToast");
        if (!toastEl) {
            console.error('Toast element #favoriteToast not found');
            return;
        }

        const toastBody = toastEl.querySelector(".toast-body");
        if (!toastBody) {
            console.error('Toast body element not found');
            return;
        }

        const pokemonName = this.pokemonNameValue || 'Pokemon';
        const formattedPokemonName = pokemonName.charAt(0).toUpperCase() + pokemonName.slice(1);

        // Get the pokeball icon from an existing element or use inline SVG
        const existingIcon = document.querySelector('img[src*="poke_ball_icon_active"]');
        const iconSrc = existingIcon ? existingIcon.src : '/images/poke_ball_icon_active.svg';

        toastBody.innerHTML = `<img src="${iconSrc}" alt="" style="height: 16px; margin-right: 8px; vertical-align: middle;">${formattedPokemonName} added to ${teamName} team!`;

        const toast = new Toast(toastEl, {
            autohide: true,
            delay: 3000,
        });
        toast.show();
    }

    showRemoveToast(teamName) {
        const toastEl = document.getElementById("favoriteToast");
        if (!toastEl) {
            console.error('Toast element #favoriteToast not found');
            return;
        }

        const toastBody = toastEl.querySelector(".toast-body");
        if (!toastBody) {
            console.error('Toast body element not found');
            return;
        }

        const pokemonName = this.pokemonNameValue || 'Pokemon';
        const formattedPokemonName = pokemonName.charAt(0).toUpperCase() + pokemonName.slice(1);

        // Get the pokeball icon from an existing element
        const existingIcon = document.querySelector('img[src*="poke_ball_icon_active"]');
        const iconSrc = existingIcon ? existingIcon.src : '/images/poke_ball_icon_active.svg';

        toastBody.innerHTML = `<img src="${iconSrc}" alt="" style="height: 16px; margin-right: 8px; vertical-align: middle;">${formattedPokemonName} removed from ${teamName} team!`;

        const toast = new Toast(toastEl, {
            autohide: true,
            delay: 3000,
        });
        toast.show();
    }
}
