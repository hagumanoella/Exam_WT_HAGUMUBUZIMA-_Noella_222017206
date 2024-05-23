// JavaScript code
document.addEventListener("DOMContentLoaded", function() {
    var loginBtn = document.getElementById("login-btn");
    var dropdown = document.getElementById("dropdown");

    // Toggle dropdown menu on click
    loginBtn.addEventListener("click", function() {
        dropdown.classList.toggle("show");
    });

    // Hide dropdown when clicking outside
    window.addEventListener("click", function(event) {
        if (!event.target.matches('.fas fa-user')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    });

    // Logout functionality
    var logoutBtn = document.getElementById("logout");
    logoutBtn.addEventListener("click", function() {
        // Your logout logic here
        // For example, redirect to logout page or clear session
        console.log("Logout clicked");
    });
});
