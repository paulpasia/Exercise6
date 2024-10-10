<?php
function getHeader($pageTitle) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>$pageTitle</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body, html {
                height: 100%;
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column;
                background-color: #f0f4f8;
            }

            .title-bar {
                background-color: #333;
                color: white;
                padding: 20px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 100%; /* Ensure header takes up full width */
                z-index: 1;
            }

            .title-bar h1 {
                font-size: 28px;
                margin: 0;
                font-weight: normal;
                color: #fff;
            }

            .title-bar p {
                font-size: 14px;
                margin: 5px 0 0;
                color: #ddd;
            }

            main {
                flex: 1;
                margin: 20px;
            }
        </style>
    </head>
    <body>
    <header class='title-bar'>
        <h1>Group 3</h1>
        <p>BSIT - 3D</p>
    </header>
    <main>";
}
?>
