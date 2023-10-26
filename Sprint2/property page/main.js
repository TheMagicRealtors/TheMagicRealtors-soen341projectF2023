document.addEventListener("DOMContentLoaded", function () {
    // Make an AJAX request to fetch broker data
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/themagicrealtors/display_data.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            var brokerRow = document.getElementById("broker-row"); // Get the row

            var cardCount = 0; // Track the number of cards added
            data.forEach(function (broker) {
                if (cardCount % 3 === 0) {
                    // Start a new row for every three cards
                    var newRow = document.createElement("div");
                    newRow.className = "row";
                    brokerRow.appendChild(newRow);
                }

                var card = document.createElement("div");
                card.className = "col-lg-4 col-md-6 col-sm-12";
                card.innerHTML = `
                    <!-- Broker card content here -->
                    <div class="card">
                        <img src="broker_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">${broker.broker_name}</h5>
                            <p class="card-text"><b>Personal Information:</b></p>
                            <p><img src="email_broker.png" alt="Email Icon"> <span class="email">${broker.broker_email}</span></p>
                            <p><img src="phone_broker.png" alt="Phone Icon"> <span class="phone">${broker.broker_phone}</span></p>
                            <p><img src="address_broker.png" alt="Address Icon"> <span class="address">${broker.broker_address}</span></p>
                            <a href="#" class="btn btn-outline-light" style="background-color: #000080;">Contact</a>
                        </div>
                    </div>
                    <!-- End of Broker card content -->
                `;

                // Append the card to the current row
                brokerRow.lastChild.appendChild(card);

                cardCount++;
            });
        }
    };
    xhr.send();
});