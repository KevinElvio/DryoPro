// console.log("HAlooo");
// alert("HALOO");

const dropdownBtn = document.querySelectorAll('.dropdownBtn');
const dropdownContent = document.querySelectorAll('.info');

dropdownBtn.forEach(function(btn, index) {
    btn.addEventListener("click", function() {
      dropdownContent[index].classList.toggle("hidden");
    });
});