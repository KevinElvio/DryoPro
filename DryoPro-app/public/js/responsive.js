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

document.addEventListener("DOMContentLoaded", function() {
    const dropdownBtns = document.querySelectorAll('.dropdownBtn');

    dropdownBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            const contentId = this.getAttribute('data-id');
            const dropdownContent = document.querySelector('.info[data-id="' + contentId + '"]');
            dropdownContent.classList.toggle("hidden");
        });
    });
});

function ubahStatus(value) {
    if (value == true) {
      value = "On";
      document.querySelector('.statusText').innerHTML = 'Menyala';
      document.querySelector('.statusText').style.color = 'green';
    }
    else {
      value = "Off";
      document.querySelector('.statusText').innerHTML = 'Mati';
      document.querySelector('.statusText').style.color = 'red';
    }
    document.getElementById('status').innerHTML = value;
  
    var xmlhttp = new XMLHttpRequest();
    var url = "/kontrol?stat=" + value;
  
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('status').innerHTML = xmlhttp.responseText;
        }
  
        console.log(xmlhttp.responseText);
        
      xmlhttp.open("GET", url, false);
      xmlhttp.send();
    }
  
  };

