<script>
    document.getElementById('copy-button').addEventListener('click', function() {
        var btcAddress = document.getElementById('btc-address');
        navigator.clipboard.writeText(btcAddress.value).then(function() {
            alert('Copied to clipboard: ' + btcAddress.value);
        }).catch(function(err) {
            console.error('Unable to copy: ', err);
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>