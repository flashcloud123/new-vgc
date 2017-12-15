
    <!--Contact-Area-->
    <!--Footer-area-->

    <!--Footer-area/-->

    <!--Vandor-JS-->
    <script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/scrollUp.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/particles.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/particles-app.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/contact-form.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/appear.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
    <!--Main-JS-->
    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

    <script>
        $('document').ready(function(){

            var eth = '600';
            
            $('#vgc').val(eth);

            $('#eth').on('change',function(){

                var ether = $(this).val();

                if (ether>=0) {

                    var vgc = ether * eth;
                    $('#vgc').val(vgc);
                }
            });


         $('#vgc').on('change',function(){

                var vgc = $(this).val();

                if (vgc>=0) {

                    var vibgyor = vgc/eth;
                    $('#eth').val(vibgyor);
                }
            });


        });

        function getTimeRemaining(endtime) {
          var t = Date.parse(endtime) - Date.parse(new Date());
          var seconds = Math.floor((t / 1000) % 60);
          var minutes = Math.floor((t / 1000 / 60) % 60);
          var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
          var days = Math.floor(t / (1000 * 60 * 60 * 24));
          return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
          };
        }

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 31 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
    </script>
</body>


<
</html>