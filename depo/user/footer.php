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
    var clipboardBTC = new ClipboardJS('#copy-btc');
    var clipboardETH = new ClipboardJS('#copy-eth');
    var clipboardUSDT = new ClipboardJS('#copy-usdt'); // Define clipboard for USDT
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>