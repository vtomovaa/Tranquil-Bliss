function toggleDropdown(id, button) {
    var dropdown = document.getElementById(id);
    var icon = button.querySelector('.icon');

    if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
        icon.textContent = "+";
    } else {
        document.querySelectorAll('.dropdown-content').forEach(function (content) {
            content.classList.remove('show');
        });
        document.querySelectorAll('.icon').forEach(function (iconElement) {
            iconElement.textContent = "+";
        });

        dropdown.classList.add('show');
        icon.textContent = "-";
    }
}

window.onclick = function (event) {
    if (!event.target.closest('.dropbtn')) {
        document.querySelectorAll('.dropdown-content').forEach(function (content) {
            content.classList.remove('show');
        });
        document.querySelectorAll('.icon').forEach(function (icon) {
            icon.textContent = "+";
        });
    }
}