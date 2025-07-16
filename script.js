    // Navigation scroll effect
    const navLinks = document.querySelectorAll('.nav-links a');
    const sections = document.querySelectorAll('section');
    
    // Function to update active navigation link
    function updateActiveNav() {
        let current = '';
        const scrollPosition = window.scrollY + 80; // Offset untuk header yang fixed
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;
        
        // Jika sudah sampai di bagian bawah halaman, aktifkan link terakhir (contact)
        if (scrollPosition + windowHeight >= documentHeight - 50) {
            current = 'contact';
        } else {
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                // Check jika section sedang terlihat di viewport
                if (scrollPosition >= sectionTop - 100 && scrollPosition < sectionTop + sectionHeight - 100) {
                    // Map sections yang tidak ada di navigation ke navigation link terdekat
                    if (sectionId === 'welcome') {
                        current = 'cars'; // welcome section akan mengaktifkan link cars
                    } else if (sectionId === 'vision-mission') {
                        current = 'about'; // vision-mission akan mengaktifkan link about
                    } else {
                        current = sectionId;
                    }
                }
            });
        }
        
        // Remove active class from all nav links
        navLinks.forEach(link => {
            link.classList.remove('active');
        });
        
        // Add active class to current section's nav link
        if (current) {
            const activeLink = document.querySelector(`.nav-links a[href="#${current}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    }
    
    // Listen for scroll events dengan throttling untuk performa
    let isScrolling = false;
    
    function handleScroll() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                updateActiveNav();
                isScrolling = false;
            });
            isScrolling = true;
        }
    }
    
    window.addEventListener('scroll', handleScroll);
    
    // Update on page load
    document.addEventListener('DOMContentLoaded', updateActiveNav);
    
    // Smooth scroll for navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
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

    // Modal functionality
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

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

    document.getElementById("bookingForm").addEventListener("submit", function (e) {
        e.preventDefault();
        const nama = document.getElementById("nama").value;
        const mobil = document.getElementById("mobil").value;
        const tglMulai = document.getElementById("tglMulai").value;
        const tglSelesai = document.getElementById("tglSelesai").value;

        const pesan = `Halo, saya ${nama} ingin booking mobil ${mobil} dari ${tglMulai} sampai ${tglSelesai}`;
        const whatsappURL = `https://wa.me/6281396565157?text=${encodeURIComponent(pesan)}`;
        window.open(whatsappURL, '_blank');
    });