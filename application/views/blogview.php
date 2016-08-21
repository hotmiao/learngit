<html>
<head>
    <title><?php echo $title;?></title>
</head>
<body>
<h1>Welcome to my Blog!</h1>
<ul>
    <?php foreach($todo_list as $list):?>
        <li><?php echo $list;?></li>
    <?php endforeach;?>
</ul>
</body>
</html>