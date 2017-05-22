<?php
/**
 * Created by PhpStorm.
 * User: Graham
 * Date: 19/05/2017
 * Time: 20:34
 */
?>
</div>
<!-- /#wrapper -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/resources/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>


<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote(
            {
                height: 400
            }
        );
    });

</script>
</body>

</html>

