<!-- this javascript is used to load at the end of the page instead of the beginning, and is conditional based on which page is loaded -->
<?php if ($current_page == "index.php") {
    echo '<script src="js/freelancer.min.js">
</script><script src="js/jqBootstrapValidation.js">
</script><script src="js/contact_me.js"></script>';
} else if ($current_page == "resume.php") {
    echo '<script src="js/resume.min.js"></script>';
} else if ($current_page == "photography.php") {
    echo '<script src="assets/js/skel.min.js"></script>
         <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
         <script src="assets/js/main.js"></script>
         <script type="text/javascript">
         $(\'.toggle\').click(function(){
            $(\'.caption\').toggle();
         })
         </script>';
}
?>