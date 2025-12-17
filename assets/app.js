import "./stimulus_bootstrap.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "./styles/app.css";

// Import Bootstrap JavaScript
import * as bootstrap from "bootstrap";

// Optional: Initialize Bootstrap components
document.addEventListener("DOMContentLoaded", function () {
    // Example: Initialize all tooltips
    const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
    );
    [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );
});

console.log("This log comes from assets/app.js - welcome to AssetMapper! 🎉");
