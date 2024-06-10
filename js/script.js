let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

const cookieBox = document.querySelector(".wrapper"),
  buttons = document.querySelectorAll(".button");

const executeCodes = () => {
  if (document.cookie.includes("codinglab")) return;
  cookieBox.classList.add("show");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      cookieBox.classList.remove("show");

      if (button.id == "acceptBtn") {
       
        document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
      }
    });
  });
};

window.addEventListener("load", executeCodes);


function editRecord(id, nama, alamat, tempat_tujuan) {
  document.getElementById('id').value = id;
  document.getElementById('nama').value = nama;
  document.getElementById('alamat').value = alamat;
  document.getElementById('tempat_tujuan').value = tempat_tujuan;
}

function editRecord(id, nama_museum, tanggal, waktu_mulai, waktu_selesai, keterangan) {
  document.getElementById('id').value = id;
  document.getElementById('nama_museum').value = nama_museum;
  document.getElementById('tanggal').value = tanggal;
  document.getElementById('waktu_mulai').value = waktu_mulai;
  document.getElementById('waktu_selesai').value = waktu_selesai;
  document.getElementById('keterangan').value = keterangan;
}

function toggleForm() {
  var form = document.getElementById('jadwalForm');
  form.style.display = form.style.display === 'none' ? 'block' : 'none';
}

function editRecord(id, nama_museum, tanggal, waktu_mulai, waktu_selesai, keterangan) {
  document.getElementById('id').value = id;
  document.getElementById('nama_museum').value = nama_museum;
  document.getElementById('tanggal').value = tanggal;
  document.getElementById('waktu_mulai').value = waktu_mulai;
  document.getElementById('waktu_selesai').value = waktu_selesai;
  document.getElementById('keterangan').value = keterangan;
  toggleForm();
}

