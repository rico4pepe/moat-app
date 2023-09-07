
    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Laravel-App &nbsp;2023</p>
    </div>
    <!--END FOOTER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="{{ asset ('js/jquery-2.0.3.min.js') }}"></script>
     <script src=" {{ asset ('js/bootstrap.min.js') }}"></script>
     <script src=" {{ asset ('js/jquery.dataTables.js') }}"></script>
     <script src=" {{ asset ('js/dataTables.bootstrap.js') }}"></script>
     <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();

            const checkbox = $('#edt');
        const formElements = $('input[type="text"],input[type="email"], textarea');
        const editProfileButton = $('#editProfileButton');

        checkbox.on('change', function () {
            const isChecked = checkbox.prop('checked');

            formElements.prop('disabled', !isChecked);;
            editProfileButton.prop('disabled', !isChecked);
            console.log('Checkbox state changed');
        });

        });

               // Assuming you have included jQuery in your project

   </script>

    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
