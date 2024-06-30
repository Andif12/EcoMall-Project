$(document).ready(function() {
    var shippingOptions = [
        { id: 1, name: 'JNE', basePrice: 10000 },
        { id: 2, name: 'J&T Express', basePrice: 15000 },
        { id: 3, name: 'ID Ekspres', basePrice: 12000 }
    ];

    function calculateShippingPrice(distance) {
        if (distance < 10) {
            return shippingOptions.map(option => ({
                ...option,
                price: option.basePrice + 5000
            }));
        } else {
            return shippingOptions.map(option => ({
                ...option,
                price: option.basePrice
            }));
        }
    }

    var distance = 8; 

    var updatedShippingOptions = calculateShippingPrice(distance);

    var optionsHtml = '';
    updatedShippingOptions.forEach(function(option) {
        optionsHtml += '<option value="' + option.id + '">' + option.name + ' Rp ' + option.price + '</option>';
    });

    $('#shipping-options').html(optionsHtml);

    function editAddress() {
        var savedAddress = document.getElementById('saved-address');
        var newAddressForm = document.getElementById('new-address-form');

        savedAddress.style.display = 'none';
        newAddressForm.style.display = 'block';
    }

    document.getElementById('addressForm').addEventListener('submit', function(event) {
        event.preventDefault(); 

        var newAddress = document.getElementById('newAddress').value;
        var newCity = document.getElementById('newCity').value;
        var newProvince = document.getElementById('newProvince').value;
        var newPostalCode = document.getElementById('newPostalCode').value;

        document.getElementById('address-line').innerText = newAddress;
        document.getElementById('city').innerText = newCity;
        document.getElementById('province').innerText = newProvince;
        document.getElementById('postal-code').innerText = newPostalCode;

        document.getElementById('saved-address').style.display = 'block';
        document.getElementById('new-address-form').style.display = 'none';
    });

    document.getElementById('edit-address-button').addEventListener('click', editAddress);

    document.querySelectorAll('.tab-item').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.tab-item').forEach(tab => tab.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(this.getAttribute('data-tab')).classList.add('active');
        });
    });

    $(document).ready(function() {
        $('.add-to-cart').click(function() {
            var cartCount = parseInt($('.cart-count').text());
            cartCount += 1;
            $('.cart-count').text(cartCount);
        });
    });
    
});
