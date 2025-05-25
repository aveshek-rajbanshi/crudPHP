function overlaying(){

    let overlayContainer = document.querySelector(".overlay");
    let overlayMenu = document.querySelector(".overlay-menu");
    let menu = document.querySelector("#menuOperation");

    
    let menucontent = 1;
    menu.addEventListener("click",(e)=>{

        if(menucontent == 1){
            
            overlayContainer.style.height= "100vh";
            overlayMenu.style.opacity = "1";
            menu.innerHTML = "Close";
            menu.style.color = "#fff";
            menucontent = 0;
    }else{
            
            overlayContainer.style.height = "0vh";
            overlayMenu.style.opacity = "0";
            menu.innerHTML= "Menu";
            menu.style.color = "#0808cc";
            menucontent = 1;
        }
    });
        

}
overlaying();