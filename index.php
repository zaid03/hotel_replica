<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monteleone</title>
    <link rel="stylesheet" href="Source/indexstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>

    <section>

        <div class="slideshow-container">

            <div class="mySlides fade">

                <img src="./Source/assets/images/slideshow1.jpg" alt="Image 1" style="width:100%">
            </div>
        
            <div class="mySlides fade">

                <img src="./Source/assets/images/slideshow2.jpg" alt="Image 2" style="width:100%">
            </div>
        
            <div class="mySlides fade">

                <img src="./Source/assets/images/slideshow3.jpg" alt="Image 3" style="width:100%">
            </div>

            <div class="mySlides fade">

                <img src="./Source/assets/images/slideshow4.png" alt="Image 4" style="width:100%">
            </div>

            <div class="mySlides fade">

                <img src="./Source/assets/images/slideshow5.jpg" alt="Image 5" style="width:100%">
            </div>

            <div class="mySlides fade">

                <img src="./Source/assets/images/slideshow6.jpg" alt="Image 6" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <script src="./Source/animation.js"></script>
    </section>

    <section class="section1">

        <div class="info">

            <h1>The French Quarter's Most Celebrated Hotel</h1>
            <h2>Since 1886, the hotel Monteleone has provided luxury and historic accommodation for travelers to New Orleans</h2>
            
            <div class="division">

                <a href="https://www.google.com/maps/place/Hotel+Monteleone/@29.954222,-90.0677562,2501m/data=!3m1!1e3!4m9!3m8!1s0x8620a624e593e779:0x7f0057ec90c64670!5m2!4m1!1i2!8m2!3d29.954222!4d-90.0677562!16s%2Fm%2F05sz2wd!5m1!1e1?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D">214 ROYAL STREET&nbsp;&nbsp;&nbsp;|</a>
                <p>&nbsp;&nbsp;&nbsp;NEW ORLEANS, LA 70130&nbsp;&nbsp;&nbsp;|</p>
                <p>&nbsp;&nbsp;&nbsp;CALL 504.523.3341</p>
            </div>
            <img src="./Source/assets/images/dvider.png">
        </div>

    </section>

    <section class="section2">
    
            <div class="info">
    
                <h1>Luxurious Accommodations Rooms and Suites</h1>
                <h2>Experience timeless luxury in the heart of the French Quarter when you stay at Hotel Monteleone, your home away from home.</h2>
                
                <div class="division">
    
                    <a href="joker.php" class="test">BOOK NOW</a>
                    <a href="accommodations.php" class="test1">ROOM DETAILS</a>
                </div>
            </div>
    
            <div class="button-pic1">
    
                <a href="" class="test3"><img src="./Source/assets/images/slideshow3.jpg">
                <span>COCKTAILS + BAR BITES MENU</span>
                </a>

                <a href="" class="test4"><img src="./Source/assets/images/entertainment.png">
                    <span>ENTERTAINMENT</span>
                </a>
            </div>

        <div class="info">
    
            <h1><span class="his">The Historic Carousel Bar & Lounge</span></h1>
            <h2 class="mlawi">New Orleans’ first and only rotating bar offers the young-at-heart a pleasant, subtle rotation around a world-class cocktail bar.</h2>
                
            <div class="division">
    
                <a href="" class="test">LEARN MORE</a>
            </div>
        </div>
    </section>

    <section class="section3">

        <div class="left">
            <img src="./Source/assets/images/Pool.png">
            <h1 class="text">Premium Services & Amenities</h1>
            <p class="text2">Hotel Monteleone strives to offer our guests everything they could possibly need to complete their stay.</p>
            <a href="" class="test">LEARN MORE</a>
        </div>

        <div class="right">
            <img src="./Source/assets/images/history.jpeg">
            <h1 class="text">Living History</h1>
            <p class="text2">Built in 1886 in the Beaux-Arts architectural style with an eclectic air, Hotel Monteleone is a historic landmark.</p>
            <a href="" class="test">LEARN MORE</a>
        </div>
    </section>

    <section class="section4">

        <img src="./Source/assets/images/dvider.png">
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>