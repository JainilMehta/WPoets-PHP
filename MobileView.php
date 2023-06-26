<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/Mobileview.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400;600&display=swap" rel="stylesheet">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="JS/Mobileview.js"></script>
    <title>Mobile View</title>
</head>
<body>
    <div class="header">
        <h4>DelphianLogic in Action</h4>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <p> adipiscing elit. Aenean commodo</p>
    </div>

    <div class="buttons">
        <div class="arrow-buttons">
            <button class="learning active">
            <img src="buttons/DL-learning.svg">
            Learning
            <img class="plus deactive" id="learning-plus" src="buttons/plus-01.svg" >
            <img class="minus active" id="learning-minus" src="buttons/minus-01.svg">
            </button>
            <div class="arrow-top active" id="learning-arrow"></div>
            <div class="content">
                <div class="content-text active" id="learning-text">
                    <p>DIGITAL LEARNING INFRASTRUCTURE</p>
                    <h2>Usability Enhancement and</h2>
                    <h2>Training for Transaction</h2>
                    <h2>Portal for Customers</h2>
                    <h4>Learn More <img src="buttons/arrow-right.svg"></h4>
                </div>

                <div class="radio-buttons">
                <input type="radio" id="learning active"> 
                <input type="radio" id="technology">
                <input type="radio" id="communication">
            </div>
            
            <div class="navigation active" id="learning-navigation">
                <label for="learning" class="manual-btn active"></label>
                <label for="technology" class="manual-btn"></label>
                <label for="communication" class="manual-btn"></label>
            </div>
            </div>
        </div>
            
        <div class="arrow-buttons">
            <button class ="technology">
            <img src="buttons/DL-technology.svg">    
            Technology
            <img class="plus" id="technology-plus" src="buttons/plus-01.svg">
            <img class="minus deactive" id="technology-minus" src="buttons/minus-01.svg">
            </button>

            <div class="arrow-top" id="technology-arrow"></div>
            <div class="content">
                <div class="content-text" id="technology-text">
                    <p>DIGITAL LEARNING INFRASTRUCTURE</p>
                    <h2>Usability Enhancement and</h2>
                    <h2>Training for Transaction</h2>
                    <h2>Portal for Customers</h2>
                    <h4>Learn More <img src="buttons/arrow-right.svg"></h4>
                </div>

                <div class="radio-buttons">
                <input type="radio" id="learning active"> 
                <input type="radio" id="technology">
                <input type="radio" id="communication">
            </div>
            
            <div class="navigation" id="technology-navigation">
                <label for="learning" class="manual-btn active"></label>
                <label for="technology" class="manual-btn"></label>
                <label for="communication" class="manual-btn"></label>
            </div>
        </div>
            
        <div class="arrow-buttons">
            <button class="communication">
            <img src="buttons/DL-communication.svg">    
            Communication 
            <img class="plus" id="communication-plus" src="buttons/plus-01.svg">
            <img class="minus deactive" id="communication-minus" src="buttons/minus-01.svg">
            </button>

            <div class="arrow-top" id="communication-arrow"></div>
            <div class="content">
                <div class="content-text" id="communication-text">
                    <p>DIGITAL LEARNING INFRASTRUCTURE</p>
                    <h2>Usability Enhancement and</h2>
                    <h2>Training for Transaction</h2>
                    <h2>Portal for Customers</h2>
                    <h4>Learn More <img src="buttons/arrow-right.svg"></h4>
                </div>

                <div class="radio-buttons">
                <input type="radio" id="learning active"> 
                <input type="radio" id="technology">
                <input type="radio" id="communication">
            </div>
            
            <div class="navigation" id="communication-navigation">
                <label for="learning" class="manual-btn active"></label>
                <label for="technology" class="manual-btn"></label>
                <label for="communication" class="manual-btn"></label>
            </div>
        </div>    
    </div>
</body>
</html>