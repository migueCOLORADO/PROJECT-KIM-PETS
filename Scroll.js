window.addEventListener("scroll", function() {
    var menu = document.querySelector(".menu")
    menu.classList.toggle("abajo",window.scrollY>0)
    }
)