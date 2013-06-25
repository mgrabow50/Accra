<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta "keywords" content="test, page, testing">
<meta "page" content="Test page">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
$tags = get_meta_tags('index.html');

echo $tags['keywords']; 
echo $tags['page'];

?>

</body>
</html>
