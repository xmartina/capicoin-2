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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>