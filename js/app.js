function add_active_class() {
    var navigation = document.querySelector(".navigation");
    navigation.classList.toggle("active");
}

function remove_active_class() {
    var navigation = document.querySelector(".navigation");
    navigation.classList.remove("active");
}