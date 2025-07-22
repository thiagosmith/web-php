<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>File Inclusion & Path Traversal Lab</title>
<link rel="stylesheet" href="templates/bootstrap.min.css" >
<script src="templates/jquery.min.js"></script>
<script src="templates/bootstrap.min.js" ></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">FilePath Lab</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="playground.php">Playground</a></li>
                    <li class="nav-item"><a class="nav-link" href="lfi.php">LFI</a></li>
                    <li class="nav-item"><a class="nav-link" href="rfi.php">RFI</a></li>
                </ul>
            </div>
        </div>
    </nav>
