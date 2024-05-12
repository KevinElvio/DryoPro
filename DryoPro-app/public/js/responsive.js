// $(document).ready(function() {
//     setInterval(function() {
//         $("#suhu").load("{{ url('bacasuhu') }}");
//         $("#kelembaban").load("{{ url('bacakelembaban') }}");
//     }, 1000);
// });

function Menu() {
    var open = document.querySelector('.open');
    var close = document.querySelector('.close');
    var area = document.querySelector('.area');
    var list = document.querySelector('.pilihan');

    open.addEventListener('click', function () {
        area.classList.remove("h-16");
        list.classList.remove("opacity-0");
        list.classList.add("opacity-100");
        open.classList.add("hidden");
        close.classList.remove("hidden");
    });

    close.addEventListener('click', function () {
        area.classList.add("h-16");
        list.classList.remove("opacity-100");
        list.classList.add("opacity-0");
        open.classList.remove("hidden");
        close.classList.add("hidden");
    });
};

document.addEventListener("DOMContentLoaded", function () {
    const dropdownBtns = document.querySelectorAll('.dropdownBtn');

    dropdownBtns.forEach(function (btn) {
        btn.addEventListener("click", function () {
            const contentId = this.getAttribute('data-id');
            const dropdownContent = document.querySelector('.info[data-id="' + contentId + '"]');
            dropdownContent.classList.toggle("hidden");
        });
    });
});


function ubahStatus(checked) {
    var value = checked ? "On" : "Off";
    var statusText = document.querySelector('.statusText');
    var statusElement = document.getElementById('status');
    statusText.innerHTML = checked ? 'Menyala' : 'Mati';
    statusText.style.color = checked ? 'green' : 'red';
    statusElement.innerHTML = value;
    

    console.log(value);

    // document.getElementById('toogleForm').submit();

    $.ajax({
        url: '/kontrol?status=' + value,
        method: 'get',
        success: function(response) {
            console.log('Respons dari server:', response);
        },
        error: function(xhr, status, error) {
            console.error('Terjadi kesalahan:', error);
        }
    });


};









