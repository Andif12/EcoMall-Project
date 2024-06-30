document.addEventListener('DOMContentLoaded', function() {
    fetch('/api/user')
    .then(response => response.json())
    .then(data => {
        document.getElementById('username').innerText = data.username;
        document.getElementById('fullname').value = data.fullName;
        document.getElementById('usernameInput').value = data.username;
        document.getElementById('dob').value = data.dob;
        document.getElementById('address').value = data.address;
        document.getElementById('email').value = data.email;
        document.getElementById('phone').value = data.phone;
        });
});

function toggleMetodePembayaran() {
    const metodePembayaran = document.getElementById('metode-pembayaran').value;
    const infoKartuKredit = document.getElementById('info-kartu-kredit');
    const infoPayPal = document.getElementById('info-paypal');
    const infoTransferBank = document.getElementById('info-transfer-bank');
    const infoKodePembayaran = document.getElementById('info-kode-pembayaran');
    
    infoKartuKredit.style.display = 'none';
    infoPayPal.style.display = 'none';
    infoTransferBank.style.display = 'none';
    infoKodePembayaran.style.display = 'none';
    
    if (metodePembayaran === 'kartu-kredit') {
        infoKartuKredit.style.display = 'block';
    } else if (metodePembayaran === 'paypal') {
        infoPayPal.style.display = 'block';
    } else if (metodePembayaran === 'transfer-bank') {
        infoTransferBank.style.display = 'block';
    } else if (metodePembayaran === 'kode-pembayaran') {
        infoKodePembayaran.style.display = 'block';
    }
}


document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.form-section').forEach(section => {
        if (section.id !== 'profil') {
            section.style.display = 'none';
        }
    });

    const defaultSection = document.getElementById('profil');
    const defaultLink = document.querySelector('.sidebar a[data-section="profil"]');
    defaultSection.style.display = 'block';  
    defaultLink.classList.add('active');     

    const sidebarLinks = document.querySelectorAll('.sidebar a[data-section]');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            const sectionId = this.getAttribute('data-section');
            const targetSection = document.getElementById(sectionId);

            document.querySelectorAll('.form-section').forEach(section => {
                if (section !== targetSection) {
                    section.style.display = 'none';
                }
            });
            document.querySelectorAll('.sidebar a[data-section]').forEach(link => {
                link.classList.remove('active');
            });

            targetSection.style.display = 'block';
            this.classList.add('active');
        });
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelectorAll('.form-section').forEach(section => {
                section.style.display = 'none';
            });
            document.querySelectorAll('.nav-link').forEach(navLink => {
                navLink.classList.remove('active');
            });
            this.classList.add('active');
            const targetId = this.getAttribute('href').substring(1);
            document.getElementById(targetId).style.display = 'block';
        });
    });
});
