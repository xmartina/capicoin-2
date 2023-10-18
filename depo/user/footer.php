<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->
<!--<script>
    $(document).ready(function () {

        $('#wallet-selection').on('change', function () {
            var selectedValue = $(this).find(':selected').attr('id');
            if (selectedValue === 'btc'  || selectedValue === 'usdc' || selectedValue === 'bnb') {
                $('#btc-address').show();
                $('#eth-address').hide();
                $('#usdc-address').hide();
                $('#bnb-address').hide();
            } elseif(selectedValue === 'eth') {
                $('#address-selection').hide();
            }
        });
    });
</script>-->
<script>
    $(document).ready(function () {
        $('#wallet-selection').on('change', function () {
            var selectedValue = $(this).find(':selected').attr('id');
            if (selectedValue === 'btc') {
                $('#address-selection').show().attr(':selected');
            } else if (selectedValue === 'eth') {
                $('#address-selection').show().attr(':selected');;
            } else if (selectedValue === 'usdc') {
                $('#address-selection').show();
            } else if (selectedValue === 'bnb') {
                $('#address-selection').show();
            } else {
                $('#address-selection').hide();
            }
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>