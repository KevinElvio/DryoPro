// function ubahStatus(value) {
//   if (value == true) {
//     value = "On";
//     document.querySelector('.statusText').innerHTML = 'Menyala';
//     document.querySelector('.statusText').style.color = 'green';
//   }
//   else {
//     value = "Off";
//     document.querySelector('.statusText').innerHTML = 'Mati';
//     document.querySelector('.statusText').style.color = 'red';
//   }
//   document.getElementById('status').innerHTML = value;

//   var xmlhttp = new XMLHttpRequest();
//   var url = "/kontrol?stat=" + value;

//   xmlhttp.onreadystatechange = function() {
//       if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//           document.getElementById('status').innerHTML = xmlhttp.responseText;
//       }

//       console.log(xmlhttp.responseText);
      
//     xmlhttp.open("GET", url, false);
//     xmlhttp.send();
//   }

// };



// xmlhttp.onreadystatechange = function () {
//   if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//     var response = JSON.parse(xmlhttp.responseText);
//     if (response.status === 'success') {
//       document.getElementById('status').innerHTML = value;
//     }
//   }

// xmlhttp.onreadystatechange = function () {
//   if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//     var response = JSON.parse(xmlhttp.responseText);
//     if (response.status === 'success') {
//       document.getElementById('status').innerHTML = value;
//     }
//   }


// function ubahStatus(value) {
//   var newValue = value ? "On" : "Off";

//   var xhr = new XMLHttpRequest();
//   var url = "/kontrol?stat=" + newValue;

//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//       console.log(xhr.responseText);
//       document.getElementById('status').innerHTML = newValue;
//     }
//   };

//   xhr.open("GET", url);
//   xhr.send();
// }







