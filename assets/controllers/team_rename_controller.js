import { Controller } from "@hotwired/stimulus";
import { Toast } from "bootstrap";

export default class extends Controller {
    static targets = ["display", "input", "editButton", "saveButton", "cancelButton", "form"];
    static values = {
        teamId: Number,
        teamName: String,
        context: String  // 'index' or 'show'
    };

    connect() {
        // Initialize in display mode
        this.editMode = false;
    }

    // Enter edit mode
    startEdit() {
        this.editMode = true;

        // Hide display elements
        this.displayTarget.classList.add('d-none');
        this.editButtonTarget.classList.add('d-none');

        // Show input and action buttons
        this.formTarget.classList.remove('d-none');

        // Set input value to current name and focus
        this.inputTarget.value = this.teamNameValue;
        this.inputTarget.focus();
        this.inputTarget.select();
    }

    // Cancel editing
    cancelEdit() {
        this.editMode = false;

        // Show display elements
        this.displayTarget.classList.remove('d-none');
        this.editButtonTarget.classList.remove('d-none');

        // Hide input and action buttons
        this.formTarget.classList.add('d-none');

        // Reset input to original value
        this.inputTarget.value = this.teamNameValue;
    }

    // Save renamed team
    async save(event) {
        event.preventDefault();

        const newName = this.inputTarget.value.trim();

        // Client-side validation
        if (!newName) {
            this.showErrorToast('Team name cannot be empty');
            return;
        }

        if (newName.length > 100) {
            this.showErrorToast('Team name cannot exceed 100 characters');
            return;
        }

        // No change, just exit edit mode
        if (newName === this.teamNameValue) {
            this.cancelEdit();
            return;
        }

        // Disable buttons during request
        this.saveButtonTarget.disabled = true;
        this.cancelButtonTarget.disabled = true;

        try {
            const response = await fetch(`/teams/${this.teamIdValue}/rename`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    name: newName,
                    context: this.contextValue
                })
            });

            if (response.ok) {
                const html = await response.text();

                // Replace the Turbo Frame content
                const frame = this.element.closest('turbo-frame') || this.element;
                frame.innerHTML = html;

                // Update the stored value
                this.teamNameValue = newName;

                // Exit edit mode
                this.editMode = false;

                // Show success toast
                this.showSuccessToast(newName);
            } else {
                // Handle error response
                const data = await response.json();
                this.showErrorToast(data.error || 'Failed to rename team');

                // Re-enable buttons
                this.saveButtonTarget.disabled = false;
                this.cancelButtonTarget.disabled = false;
            }
        } catch (error) {
            console.error('Error renaming team:', error);
            this.showErrorToast('Failed to rename team');

            // Re-enable buttons
            this.saveButtonTarget.disabled = false;
            this.cancelButtonTarget.disabled = false;
        }
    }

    // Handle Enter key (save) and Escape key (cancel)
    handleKeydown(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            this.save(event);
        } else if (event.key === 'Escape') {
            this.cancelEdit();
        }
    }

    showSuccessToast(teamName) {
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

        // Use pokeball icon like other team operations
        const iconSrc = '/images/poke_ball_icon_active.svg';
        toastBody.innerHTML = `<img src="${iconSrc}" alt="" style="height: 16px; margin-right: 8px; vertical-align: middle;">Team renamed to "${teamName}"`;

        const toast = new Toast(toastEl, {
            autohide: true,
            delay: 3000,
        });
        toast.show();
    }

    showErrorToast(message) {
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

        toastBody.innerHTML = `<i class="bi bi-exclamation-triangle-fill me-2" style="color: #dc3545;"></i>${message}`;

        const toast = new Toast(toastEl, {
            autohide: true,
            delay: 4000,
        });
        toast.show();
    }
}
