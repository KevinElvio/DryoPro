// alert("halo");
const tombol = document.querySelector('.tombol');
const wadah = document.querySelector('.wadah');
const text = document.querySelector('.text');
const status = document.querySelector('.status');

let isActive = false;

tombol.addEventListener('click', () =>{
    isActive = !isActive;

    if (isActive) {
      // text.style.transform = 'translateX(100%)';
      tombol.classList.remove('bg-red-600');
      tombol.classList.add('bg-green-500');
      wadah.classList.remove('ml-3');
      wadah.classList.add('ml-20');
      text.classList.remove('ml-20');
      text.classList.add('ml-3');
      text.innerHTML = "On";
      status.classList.remove('text-red-500');
      status.classList.add('text-green-500');
      status.innerHTML = "Hidup";
    
    } else {
      // text.style.transform = 'translateX(0)';
      tombol.classList.remove('bg-green-500');
      tombol.classList.add('bg-red-600');
      wadah.classList.remove('ml-20');
      wadah.classList.add('ml-3');
      text.classList.remove('ml-3');
      text.classList.add('ml-20');
      text.innerHTML = "Off";
      status.classList.add('text-red-500');
      status.classList.remove('text-green-500');
      status.innerHTML = "Mati";
    }
});