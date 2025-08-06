// Navigation scroll effect
const navLinks = document.querySelectorAll('.nav-links a');
const sections = document.querySelectorAll('section');

// Function to update active navigation link
function updateActiveNav() {
    let current = '';
    const scrollPosition = window.scrollY + 80;
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;

    if (scrollPosition + windowHeight >= documentHeight - 50) {
        current = 'contact';
    } else {
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop - 100 && scrollPosition < sectionTop + sectionHeight - 100) {
                if (sectionId === 'welcome') {
                    current = 'cars';
                } else if (sectionId === 'vision-mission') {
                    current = 'about';
                } else {
                    current = sectionId;
                }
            }
        });
    }

    navLinks.forEach(link => {
        link.classList.remove('active');
    });

    if (current) {
        const activeLink = document.querySelector(`.nav-links a[href="#${current}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }
}

// Scroll listener
let isScrolling = false;
function handleScroll() {
    if (!isScrolling) {
        window.requestAnimationFrame(function () {
            updateActiveNav();
            isScrolling = false;
        });
        isScrolling = true;
    }
}
window.addEventListener('scroll', handleScroll);

// Jalankan saat halaman dimuat
updateActiveNav();

// Smooth scroll untuk menu
navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            const headerHeight = document.querySelector('.header').offsetHeight;
            const targetPosition = targetSection.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Modal logic
const modal = document.getElementById("bookingModal");
const closeBtn = document.getElementById("closeModal");
const bookingButtons = document.querySelectorAll(".btn-book");
const selectMobil = document.getElementById("mobil");

bookingButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
        const mobil = btn.getAttribute("onclick").match(/'([^']+)'/)[1];
        selectMobil.value = mobil;
        modal.style.display = "flex";
    });
});

// Tombol tutup modal
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Klik di luar modal tutup juga
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});

// Fungsi buka modal via onclick inline HTML
function openBookingModal(mobil) {
    document.getElementById("mobil").value = mobil;
    document.getElementById("bookingModal").style.display = "flex";
}

// Format tanggal ke "12 Juli 2025"
function formatTanggalIndonesia(dateStr) {
    const bulanIndonesia = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    const [year, month, day] = dateStr.split('-');
    return `${parseInt(day)} ${bulanIndonesia[parseInt(month) - 1]} ${year}`;
}

// Kirim booking via WhatsApp
document.getElementById("bookingForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const nama = document.getElementById("nama").value;
    const mobil = document.getElementById("mobil").value;
    const tglMulai = document.getElementById("tglMulai").value;
    const tglSelesai = document.getElementById("tglSelesai").value;

    const tglMulaiFormatted = formatTanggalIndonesia(tglMulai);
    const tglSelesaiFormatted = formatTanggalIndonesia(tglSelesai);

    const pesan = `Halo, saya ${nama} ingin booking mobil ${mobil} dari ${tglMulaiFormatted} sampai ${tglSelesaiFormatted}`;
    const whatsappURL = `https://wa.me/6281396565157?text=${encodeURIComponent(pesan)}`;
    window.open(whatsappURL, '_blank');
});

// ✅ Set tanggal minimal hari ini
const today = new Date().toISOString().split('T')[0];
document.getElementById("tglMulai").setAttribute('min', today);
document.getElementById("tglSelesai").setAttribute('min', today);

// Saat tglMulai berubah, update tglSelesai
document.getElementById("tglMulai").addEventListener("change", function () {
    const startDate = this.value;
    document.getElementById("tglSelesai").setAttribute("min", startDate);
});

const burgerBtn = document.getElementById('burgerBtn');
const dropdownMenu = document.getElementById('dropdownMenu');

burgerBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // biar gak langsung nutup
    dropdownMenu.classList.toggle('show');
});

// Tutup dropdown kalau klik di luar
document.addEventListener('click', (e) => {
    if (!dropdownMenu.contains(e.target) && !burgerBtn.contains(e.target)) {
        dropdownMenu.classList.remove('show');
    }
});

// Tutup kalau klik menu item
document.querySelectorAll('#dropdownMenu a').forEach(link => {
    link.addEventListener('click', () => {
        dropdownMenu.classList.remove('show');
    });
});
