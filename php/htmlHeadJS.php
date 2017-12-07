<!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for this template -->
<?php if ($current_page == "index.php") {
    echo '<script src="js/freelancer.js">
</script><script src="js/jqBootstrapValidation.js">
</script><script src="js/contact_me.js"></script>';
} else if ($current_page == "resume.php") {
    echo '<script src="js/resume.js"></script>';
}
?>
<script src="js/javascript.js"></script>