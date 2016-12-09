 <!--Javascript-->
        <script type="text/javascript" src="<?=base_url?>assets/js/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="<?=base_url?>assets/dashboard/js/materialize.min.js"></script>
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
                $('.dropdown-button').dropdown({
                  inDuration: 300,
                  outDuration: 225,
                  constrain_width: false, // Does not change width of dropdown to that of the activator
                  hover: false, // Activate on hover
                  gutter: 0, // Spacing from edge
                  belowOrigin: false, // Displays dropdown below the button
                  alignment: 'right' // Displays dropdown with edge aligned to the left of button
                }
              );
                    

              });

            $(window).scroll(function(){
            //box one
                var $win = $(window);
                $('#box1').css('top', 20 -$win.scrollTop());
                $('#overlay').css('left', 20 -$win.scrollLeft());
            });
        </script>
    </body>
  </html>