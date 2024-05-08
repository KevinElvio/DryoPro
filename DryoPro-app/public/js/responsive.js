function Menu(){
    var open = document.querySelector('.open');
    var close = document.querySelector('.close');
    var area = document.querySelector('.area');
    var list = document.querySelector('.pilihan');
    
    open.addEventListener('click', function() {
        area.classList.remove("h-16");
        list.classList.remove("opacity-0");
        list.classList.add("opacity-100");
        open.classList.add("hidden");
        close.classList.remove("hidden");
    });

    close.addEventListener('click', function() {
        area.classList.add("h-16");
        list.classList.remove("opacity-100");
        list.classList.add("opacity-0");
        open.classList.remove("hidden");
        close.classList.add("hidden");
    });
};

