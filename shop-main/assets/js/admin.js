document.querySelectorAll(".switch_tab").forEach(button =>{
    button.addEventListener("click", function(){
        let id = this.getAttribute("data-id");
        document.querySelectorAll(".tab").forEach(tab =>{
            tab.style.display = "none";
        });
        document.querySelector(`.tab[data-id="${id}"]`).style.display = "block";
    })
})