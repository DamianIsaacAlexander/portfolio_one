function myFunction() 
{
    let x = document.getElementById("nav-list");
    if(x.classList.contains("active"))
    {
        x.classList.remove("active");
        x.classList.add("inactive");
    } 
    else
    {
        x.classList.add("active");
        x.classList.remove("inactive")
    }
}

window.addEventListener('click', (e) => {
    e.stopPropagation();
    let target = e.target;
    let navIconElement = document.getElementById("nav-icon");
    let navListElement = document.getElementById("nav-list");
    if(target !== navIconElement && navListElement.classList.contains("active")){
        navListElement.classList.remove("active");
        navListElement.classList.add("inactive");
    }
});