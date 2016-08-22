<html ng-app="Yeji">
<head>
    <title><?php echo $title;?></title>
    <script src="//cdn.bootcss.com/angular.js/1.5.8/angular.min.js"></script>
</head>
<body>
<h1>Welcome to my Blog!</h1>
<form method="post" action="/Yeji/yeji">
    成交价：<input type="text" name="price" value="" />
    提交：<input type="submit" value="提交"/>
</form>
</body>
</html>