<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->
<script>
    document.getElementById('copy-button').addEventListener('click', function() {
        var walletAddress = document.getElementById('btc-address');
        walletAddress.select();
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
        alert('Copied to clipboard: ' + walletAddress.value);
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>