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
                <li><a href="services.php">Services</a></li>
                
            </ul>
        </div>
        <h1 class="headings" style="text-align:center">CONTACT DETAILS</h1>
            <section id="contact">
            <div class="row" style="padding-top:40px">
    <div class="col-6 col-s-6">
     <h2 style="text-align:center;color:black">CONTACT ME</h2>
      <div class="container">
        <form action="PHP/contact2.php" target="_blank" method="post" autocomplete="on">
           <p style="text-align:center;font-size:12px;font-style:italic"><input type="text" name="name" placeholder="Name" required style="width:90%"></p>
           <p style="text-align:center;font-size:12px;font-style:italic"><input type="email" name="email" placeholder="Email" required style="width:90%"></p>
           <p style="text-align:center;font-size:12px;font-style:italic"><input type="tel" name="phone" placeholder="+000-000-000-000" pattern="[+,0-9]{4}-[0-9]{3}-[0-9]{3}-[0-9]{3}" required style="width:90%"></p>
           <p style="text-align:center;font-size:12px;font-style:italic"><textarea name="comment" placeholder="Write Your Message" required style="width:90%;height:50px"></textarea></p>
           <p style="text-align:center;font-style:italic;backgrond-color:#4d0000;color:black;"><input type="submit" value="Submit"></p>
        </form>
      </div>
    </div>
    <div class="col-6 col-s-12 w3-center">
      <h2 style="text-align:center;color:black">CONTACT INFORMATION</h2>
      <p style="color:#600000;font-size:18px;font-weight:bolder">PHONE</P>
      <p style="font-size:14px;padding:15px;color:black;font-weight:bolder">0797830106</P>
        <p style="color:#600000;font-size:18px;font-weight:bolder">EMAIL</P>
        <p style="font-size:14px;padding:15px;color:black;font-weight:bolder">mercymalami@gmail.com</p>
       <p style="color:#600000;font-size:18px;font-weight:bolder">SOCIAL MEDIA</p><br>
      <p style="color:black;font-size:12px;font-weight:bolder">Kindly Follow me on my social media platforms.</p><br>
      <a target="_blank" href="https://www.facebook.com/" style="font-size:14px;color:black" class="fa fa-facebook w3-hover-blue "></a>
      <a target="_blank" href="https://twitter.com/home" style="font-size:14px;color:black" class="fa fa-twitter w3-hover-blue"></a>
      <a target="_blank" href="https://www.instagram.com/" style="font-size:14px;color:black" class="fa fa-instagram w3-hover-purple"></a>
    </div>
   </div>

    <section>
        <?php include 'Foot.php'; ?>
    </section>
</body>
    </html>
