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
            $('#address-selection option').hide();
            $('#' + selectedValue + '-address').show().prop('selected', true);
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>