    

document.addEventListener('DOMContentLoaded', (event) => {
    //Code view
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });

    //Code tab menu
    const viewBtn = document.querySelectorAll(".view-title ul li");
    const viewCont = document.querySelectorAll(".view-cont > div");

    viewBtn.forEach((element, index) => {
        element.addEventListener("click", function(){
            
            viewBtn.forEach( el => {
                el.classList.remove("active");
            });
            element.classList.add("active");

            viewCont.forEach( el => {
                el.style.display = "none";
            })
            viewCont[index].style.display = "block";
        });
    })

    //Modal
    document.querySelector(".info button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });

    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
});



    

