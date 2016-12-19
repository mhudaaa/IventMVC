        <!--Javascript-->
        <script type="text/javascript" src="<?=base_url?>assets/js/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="<?=base_url?>assets/dashboard/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?=base_url?>assets/dashboard/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.modal').modal({
                      dismissible: true, // Modal can be dismissed by clicking outside of the modal
                      opacity: .85, // Opacity of modal background
                      in_duration: 300, // Transition in duration
                      out_duration: 200, // Transition out duration
                      starting_top: '4%', // Starting top style attribute
                      ending_top: '10%', // Ending top style attribute
                      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                        
                        console.log(modal, trigger);
                      },
                      complete: function() {} // Callback for Modal close
                    }
                );

                $('#table-peserta').DataTable();

                $('.alert').delay(5000).fadeOut(300);
              });
        </script>
    </body>
  </html>