function menuToggle(){
    const   menuBtn = document.getElementById('menu-btn'),
            thingThatExpands = document.getElementById('thing-that-expands'),
            head = document.getElementById('head'),
            headStartHeight = head.getBoundingClientRect().height;
    let     targetHeight = thingThatExpands.getBoundingClientRect().height;

    menuBtn.addEventListener('click', function(event){
        targetHeight = thingThatExpands.getBoundingClientRect().height;
        if(event.target.innerHTML == "Menu"){
            event.target.innerHTML = "Close";
            head.style.height = targetHeight + "px";
            console.log(`header height after expanding the menu is ${targetHeight}px`);
        } else {
            event.target.innerHTML = "Menu";
            head.style.height = `${headStartHeight}px`;
        }
    });
}

export {menuToggle};

