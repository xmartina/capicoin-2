<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script>
    // Prevent form submission when the "Copy" button is clicked
    const copyButtons = document.querySelectorAll("[data-clipboard-target]");
    copyButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            const targetId = this.getAttribute("data-clipboard-target");
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.select();
                document.execCommand("copy");
                // You can also add code to notify the user that the text has been copied, if needed.
            }
        });
    });
</script>
<script>
    // Function to update the countdown and redirect
    function countdown() {
        var seconds = 10; // Set the number of seconds to countdown

        function updateCountdown() {
            var countdownElement = document.getElementById("countdown");
            countdownElement.innerHTML = "Redirecting in " + seconds + " seconds...";
            seconds--;

            if (seconds < 0) {
                // Redirect to dashboard.php after 10 seconds
                window.location.href = "/?a=account";
            }
        }

        updateCountdown(); // Call the function immediately to display the initial countdown

        var countdownInterval = setInterval(updateCountdown, 1000); // Update every 1 second
    }

    // Call the countdown function when the page loads
    window.onload = countdown;
</script>
<script>
    var clipboardBTC = new ClipboardJS('#copy-btc');
    var clipboardETH = new ClipboardJS('#copy-eth');
    var clipboardUSDT = new ClipboardJS('#copy-usdt'); // Define clipboard for USDT
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->
<script>
    $(document).ready(function() {
        $(".depo-2").hide();
        $("#confirm-form").click(function() {
            $(".depo-1").slideToggle(400); // 400 milliseconds for the animation
            $(".depo-2").slideDown(600);
        });
    });
    $(document).ready(function() {
        var depositAmount = 0; // Initialize with the initial deposit amount

        // Click event handler for the "Next" button
        $("#confirm-form").click(function() {
            // Replace "DEPOSIT AMOUNT" with the actual deposit amount in the span
            $(".depo-amount").text(depositAmount);

            // Show the "Confirm your deposit" section
            $(".depo-2").show();
        });

        // Assuming you have some logic to set the deposit amount, you can update it here
        // For example, if you retrieve the deposit amount from an input field with the ID "btc-address":
        depositAmount = parseFloat($("#depo-amount").val());
    });
</script>

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>