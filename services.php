<!DOCTYPE html>
<html lang= >
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" media="screen and (max-width:800px)"href="table.css">
        <link rel="stylesheet" media="screen and (max-width:530px)"href="phone.css">
    </head>
    <body>
        <div>
        <nav class="navbar">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Me</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact Me</a></li>
                
            </ul>
        </div>
        <h1 class="headings" style="text-align:center">SERVICES</h1> <br>
            <section id="services">
              
               <div class="row">
                    <div class="box">
                    <i class="fa fa-pencil-square-o"  style="height:100px;width:100px"></i>
                        <h1 class="headings">FRONT-END DEVELOPMENT</h1>
                        <p>It involves development of the graphical user interface of a website, 
                            through the use of HTML, CSS, and JavaScript, so that users can view 
                            and interact with that website.</p>
                    </div>
                    <div class="box">
                    <i class="fa fa-desktop" style="height:100px;width:100px"></i>
                        <h1 class="headings">WEB HOSTING</h1>
                        <p>It involves allocation of space on a web server for a website to store its files, 
                            they are hosting a website. Web hosting makes the files that comprise a website
                            (code, images, etc.) available for viewing online. </p>
                    </div>
                    <div class="box">
                    <i class="fa fa-mobile" style="height:100px;width:100px"></i>
                        <h1 class="headings">RESPONSIVENESS</h1>
                        <p>A website is said to be responsive if it caters optimally for the users. By this, 
                           we mean the users can easily read its content, navigate it, view website on mobile device, 
                           scroll through it, and there is hardly any need to resize the browser and is compatible with
                           different categories of browsing devices.</p>
                    </div>
                </div>
            </section>
    <section>
        <?php include 'Foot.php'; ?>
    </section>
</body>
    </html>
