<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/5/18
 * Time: 下午11:42
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

$composer = include __DIR__ . '/../vendor/autoload.php';

$request = \Dobee\Http\Request::createGlobalRequest();

$cookies = $request->cookies;

//$cookies->setCookie('name', 'jan', time()+200);
//$cookies->setCookie('age', 22, time() + 300);
echo '<pre>';
echo ($cookies->getCookie('name'));
echo $cookies->getCookie('age');
echo $cookies->getCookie('name')->getPath();
//
//echo $cookies->getCookie('name')->getValue();