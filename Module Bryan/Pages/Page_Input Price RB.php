<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Order Form</title>
    <link rel="stylesheet" href="../Styles/Page_Input Price RB.css">
</head>
<body>

    <div class="testwrap">
        <div class="trade-box">
            <!-- Tabs -->
            <div class="tabs">
                <div class="tab active">Limit</div>
                <div class="tab">Market</div>
                <div class="tab">Stop Limit</div>
            </div>

            <!-- Price -->
            <div class="input-group">
                <div class="input-box">
                    <div class="input-label">Price</div>
                    <div class="input-value">
                        <input type="number" class="price" value="0.02" step="0.01">
                        <span class="currency">USDT</span>
                    </div>
                </div>
            </div>

            <!-- Amount -->
            <div class="input-group">
                <div class="input-box">
                    <div class="input-label">Amount</div>
                    <div class="input-value">
                        <input type="number" class="amount" placeholder="Amount">
                        <span class="currency">BTC</span>
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <input type="range" min="0" max="100" value="0" class="slider" id="slider">

            <!-- Total -->
            <div class="total-box">
                <div>Total</div>
                <span class="total">Minimum 5 USDT</span>
            </div>
        </div>
    </div>    

    <script>
        const priceInput = document.querySelector(".price");
        const amountInput = document.querySelector(".amount");
        const totalBox = document.querySelector(".total");

        function updateTotal() {
            const price = parseFloat(priceInput.value) || 0;
            const amount = parseFloat(amountInput.value) || 0;
            const total = price * amount;

            // Update total box with formatted result
            if (total < 5 && total !== 0) {
                totalBox.innerText = "Minimum 5 USDT";
            } else if (total === 0) {
                totalBox.innerText = "Minimum 5 USDT";
            } else {
                totalBox.innerText = total.toFixed(2) + " USDT";
            }
        }

        // Event listeners for updating total when price or amount changes
        priceInput.addEventListener("input", updateTotal);
        amountInput.addEventListener("input", updateTotal);

        // Initialize total on page load
        updateTotal();
    </script>


</body>
</html>
