<html>
    
<head>
    <script src="mFunctions.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<?php 
$pages = scandir('pages'); 
$notWanted = array('.', '..'); 
echo '<div class="menu">'; 
foreach($pages as $page){
	if(!in_array($page, $notWanted)){ 
	$link = 'pages/' . $page; 
	$safeName = strtoupper(str_replace('.php', '', $page));
		echo'<a href="' . $link . '">' . $safeName . '</a> &nbsp; &nbsp; &nbsp; &nbsp;'; 
	} // close if not in array 
} // close foreach
echo '</div>';
?>

</html>