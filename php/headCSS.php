<!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- conditional page specific CSS files are loaded with this statement -->
<?php if ($current_page == "index.php") {
    echo '<link href="css/freelancer.min.css" rel="stylesheet">';
    echo '<link href="css/indexStyle.css" rel="stylesheet">';
} else if ($current_page == "resume.php") {
    echo '<link href="css/resume.min.css" rel="stylesheet">';
    echo '<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">';
    echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">';
    echo '<link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">';
    echo '<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">';
    echo '<link href="css/resumeStyle.css" rel="stylesheet">';
} else if ($current_page == "photography.php") {
    echo '<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>';
}
?>
<!-- My CSS -->
<link href="css/style.css" rel="stylesheet">