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

function landingpageAni(){

   let tl = gsap.timeline(".landing-page",{
            scrollTrigger: {
            trigger: '.img-container',
            pin: true, // pin the trigger element while active
            start: 'top top', // when the top of the trigger hits the top of the viewport
            end: '50 50', // end after scrolling 500px beyond the start
            scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
        }
    })

}
landingpageAni();