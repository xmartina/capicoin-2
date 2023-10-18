<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->
<script>
    $(document).ready(function () {
        $('#wallet-selection').on('change', function () {
            var selectedValue = $(this).val();
            $('.crypto-select').addClass('d-none'); // Hide all input elements
            $('#' + selectedValue + '-address').removeClass('d-none'); // Remove d-none class from the selected input
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>