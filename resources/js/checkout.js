function toggleAddressOptions() {
    const addressOptions = document.getElementById('address-options');
    if (addressOptions.style.display === 'none') {
        addressOptions.style.display = 'block';
    } else {
        addressOptions.style.display = 'none';
    }
}

function updateAddress() {
    const addressOptions = document.getElementById('address-options');
    const selectedValue = addressOptions.value;
    const addressDetail = document.getElementById('address-detail');
    
    if (selectedValue === 'utama') {
        addressDetail.textContent = 'Jl. P. siritang ulutedong timur, Watang Sawitto, Kab. Pinrang, Sulawesi Selatan, 6285255196113';
    } else if (selectedValue === 'kantor') {
        addressDetail.textContent = 'Jl. Merdeka No. 10, Makassar, Sulawesi Selatan, 628123456789';
    }
}

function togglePaymentOptions() {
    const paymentOptions = document.getElementById('payment-options');
    if (paymentOptions.style.display === 'none') {
        paymentOptions.style.display = 'block';
    } else {
        paymentOptions.style.display = 'none';
    }
}

function processPayment() {
    const selectedPayment = document.querySelector('input[name="payment"]:checked');
    if (selectedPayment) {
        alert('Pembayaran dengan ' + selectedPayment.value + ' diproses.');
    } else {
        alert('Pilih metode pembayaran terlebih dahulu.');
    }
}
