<html>
<head>
    <title><?php echo $title;?></title>
</head>
<body>
<h1>Welcome to my Blog!</h1>
<ul>
    <?php foreach($query as $list):?>
        <li><?php echo $list->document_id;?></li>
        <li><?php echo $list->title;?></li>
        <li><?php echo $list->content;?></li>
        <li><?php echo $list->if_deleted;?></li>
    <?php endforeach;?>
</ul>
</body>
</html>