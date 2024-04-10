// console.log("HAlooo");
// alert("HALOO");

// const dropdownBtn = document.querySelectorAll('.dropdownBtn');
// const dropdownContent = document.querySelectorAll('.info');

// dropdownBtn.forEach(function(btn, index) {
//     btn.addEventListener("click", function() {
//       dropdownContent[index].classList.toggle("hidden");
//     });
//   });


// dropdownPanduan.js
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

