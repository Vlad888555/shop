const popup_search = document.querySelector("#popup_search");
const show_popup_search = document.querySelector("#show_popup_search");
const popup_search_inner_container = popup_search.querySelector(".inner_container");

show_popup_search.addEventListener("click", () => {
    popup_search.classList.add("active");
});

popup_search.addEventListener("click", () => {
    popup_search.classList.remove("active");
});

popup_search_inner_container.addEventListener("click", (event) =>{
    event.stopPropagation();
})

const popup_login = document.querySelector("#popup_login");
const show_popup_login = document.querySelector("#show_popup_login");
const inner_container_login = popup_login.querySelector(".inner_container_login")

show_popup_login.addEventListener("click", () => {
    popup_login.classList.add("active");
});

popup_login.addEventListener("click", () => {
    popup_login.classList.remove("active");
});

inner_container_login.addEventListener("click", (event) =>{
    event.stopPropagation();
})

