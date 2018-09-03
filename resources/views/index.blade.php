<?php 


echo phpinfo();

 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action='user/update' method="post">
    @csrf
    @method('PUT')
<input type="text" name="name" value="1">
    <button>submit</button>
</form>
<form action='user/update' method="post">
    @csrf
<input name="_method" type="hidden" value="DELETE">
<input type="text" name="name" value="1">
    <button>submit</button>
</form>
