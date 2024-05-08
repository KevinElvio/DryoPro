
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

