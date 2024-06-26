const popup_search = document.querySelector("#popup_search");
const show_popup_search = document.querySelector("#show_popup_search");
const popup_search_inner_container = popup_search.querySelector(".inner_container");
const search_result = document.querySelector("#search_result")

show_popup_search.addEventListener("click", () => {
    popup_search.classList.add("active");
});

popup_search.addEventListener("click", () => {
    popup_search.classList.remove("active");
});

popup_search_inner_container.addEventListener("click", (event) =>{
    event.stopPropagation();
})

document.querySelector("#search").addEventListener("click", (event) =>{
    event.defaultPrevented();
    let query = document.querySelector("#query").value;
    let data = new FormData();
    data.append("query", query);
    fetch("ajax/search.php", {
        method: "POST",
        body: data,
    }).then(response => response.json()).then(json => {
        search_result.innerHTML = "";
        if (json.status) {
            for (let good of json.goods){
                let a = document.createElement("a");
                a.href = `good.php?id=${good.Id}`;
                a.classList.add("good");
                a.innerHTML = `
                <div class="image">
                    <img src="assets/goods/${good.Cover}" alt="">
                </div>
                <div class="text">
                    <p class="name">${good.Name}</p>
                </div>
                <div class="price">
                    <p>${good.Price}</p>
                </div>`;
                search_result.appendChild(a);
            }
        }
    })
});


const popup_login = document.querySelector("#popup_login");
const show_popup_login = document.querySelector("#show_popup_login");
const inner_container_login = popup_login.querySelector(".inner_container_login")

show_popup_login?.addEventListener("click", () => {
    popup_login.classList.add("active");
});

popup_login?.addEventListener("click", () => {
    popup_login.classList.remove("active");
});

inner_container_login?.addEventListener("click", (event) =>{
    event.stopPropagation();
})

const add_to_cart = document.querySelectorAll(".add_to_cart");

document.querySelectorAll(".add_to_cart").forEach(button =>{
    button.addEventListener("click", function(event){
        event.preventDefault();
        let good_id = this.getAttribute("data-id");
        let data = new FormData();
        data.append("good_id", good_id);
        fetch("ajax/add_to_cart.php",{
            method: "POST",
            body: data,
        }).then(response => response.json()).then(json => {
            this.innerText = "Добавлено";
        });
    });
});


document.querySelectorAll(".delet_button").forEach(button =>{
    button.addEventListener("click", function(event){
        event.preventDefault();
        let good_id = this.getAttribute("data-id");
        let data = new FormData();
        data.append("good_id", good_id);
        fetch("ajax/remove_from_cart.php",{
            method: "POST",
            body: data,
        }).then(response => response.json()).then(json => {
            location.reload();
        });
    });
});

const login_form = document.querySelector("#login_form");
const register_form = document.querySelector("#register_form");
document.querySelector("#switch_to_register").addEventListener("click", (event) =>{
    event.preventDefault();
    login_form.style.display = "none";
    register_form.style.display = "block";
})

document.querySelector("#switch_to_login").addEventListener("click", (event) =>{
    event.preventDefault();
    register_form.style.display = "none";
    login_form.style.display = "block";
})

const popup_message = document.querySelector("#popup_message");
popup_message?.addEventListener("click", ()=> {
    popup_message.classList.remove("active");
})
