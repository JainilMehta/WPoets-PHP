<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/Webview.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400;600&display=swap" rel="stylesheet">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="JS/Webview.js"></script>
    <title>WEB View</title>
</head>
<body>
    <div class="header">
        <h4>DelphianLogic in Action</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo</p>
    </div>
    <div class="container">
        <div class="buttons">
            <div class="arrow-buttons">
            <button class="learning active">
            <img src="buttons/DL-learning.svg">
            Learning
            </button>
            <div class="arrow-left active" id="learning-arrow"></div>
            </div>
            
            <div class="arrow-buttons">
            <button class ="technology">
            <img src="buttons/DL-technology.svg">    
            Technology</button>
            <div class="arrow-left" id="technology-arrow"></div>
            </div>
            
            <div class="arrow-buttons">
            <button class="communication">
            <img src="buttons/DL-communication.svg">    
            Communication</button>
            <div class="arrow-left" id="communication-arrow"></div>
            </div>    
        </div>

        <div class="content">

            <div class="content-text active" id="learning-text">
                <p>DIGITAL LEARNING INFRASTRUCTURE</p>
                <h2>Usability Enhancement and</h2>
                <h2>Training for Transaction</h2>
                <h2>Portal for Customers</h2>
                <h4>Learn More <img src="buttons/arrow-right.svg"></h4>
            </div>

            <div class="content-text" id="technology-text">
                <p>DIGITAL LEARNING INFRASTRUCTURE</p>
                <h2>Usability Enhancement and</h2>
                <h2>Training for Transaction</h2>
                <h2>Portal for Customers</h2>
                <h4>Learn More <img src="buttons/arrow-right.svg"></h4>
            </div>

            <div class="content-text" id="communication-text">
                <p>DIGITAL LEARNING INFRASTRUCTURE</p>
                <h2>Usability Enhancement and</h2>
                <h2>Training for Transaction</h2>
                <h2>Portal for Customers</h2>
                <h4>Learn More <img src="buttons/arrow-right.svg"></h4>
            </div>
        
            <div class="buttons">
                <input type="radio" id="learning active"> 
                <input type="radio" id="technology">
                <input type="radio" id="communication">
            </div>
            
            <div class="navigation">
                <label for="learning" class="manual-btn active" id="learning-dot"></label>
                <label for="technology" class="manual-btn" id="technology-dot"></label>
                <label for="communication" class="manual-btn" id="communication-dot"></label>
            </div>
        
        </div>
        
        <div class="images">
            <div class="image active" id="learning-image">
                <img src="images/DL-Learning-1.jpg">
            </div>

            <div class="image" id="technology-image">
                <img src="images/DL-Technology.jpg">
            </div>

            <div class="image" id="communication-image">
                <img src = "images/DL-Communication.jpg">
            </div>
        </div>


    </div>
</body>
</html>