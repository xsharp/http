<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/3/2
 * Time: 下午2:15
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

error_reporting(E_ALL);

$composer = include __DIR__ . '/../vendor/autoload.php';

$request = \Dobee\Http\Request::createGlobalRequest();

if ($request->isMethod('post')) {
    echo '<pre>';

    foreach ($request->files as $key => $files) {
        foreach($files as $name => $file) {
            print_r($file);
        }
    }
}
?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" id=""/>
    <input type="file" name="file[]" id=""/>
    <input type="file" name="file2" id=""/>
    <input type="submit" value=""/>
</form>
</body>
</html>