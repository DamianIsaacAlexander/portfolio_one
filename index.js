function myFunction() {
    console.log("hello")
    let x = document.getElementById("nav-list");
    if(x.classList.contains("active")){
        x.classList.remove("active");
        x.classList.add("inactive");
    } else{
        x.classList.add("active");
        x.classList.remove("inactive")
    }
}