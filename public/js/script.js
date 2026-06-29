document.addEventListener("DOMContentLoaded", function () {

    // Sidebar
    const menuBtn = document.getElementById("menu-btn");
    const sidebar = document.querySelector(".sidebar");

    if (menuBtn && sidebar) {
        menuBtn.addEventListener("click", function () {
            sidebar.classList.toggle("close");
        });
    }

    // Profile Dropdown
    const profileBtn = document.getElementById("profileBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");

    if (profileBtn && dropdownMenu) {

        profileBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            dropdownMenu.classList.toggle("show");
        });

        document.addEventListener("click", function () {
            dropdownMenu.classList.remove("show");
        });

        dropdownMenu.addEventListener("click", function (e) {
            e.stopPropagation();
        });

    }

});