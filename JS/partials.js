function dropdownmenu() {
    var dropdown = document.getElementById("prof_dropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

// Optional: Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.username')) {
        var dropdown = document.getElementById("prof_dropdown");
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        }
    }
}


