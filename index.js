document.addEventListener("DOMContentLoaded", function(event) 
{ 
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
});