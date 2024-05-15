<?php
 $conn = mysqli_connect('localhost','root','','form12') or die('connection failed');

 if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $place_of_birth = mysqli_real_escape_string($conn, $_POST['place_of_birth']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $cellphone_number = mysqli_real_escape_string($conn, $_POST['cellphone_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
    
    $select_submit = mysqli_query($conn,"SELECT * FROM `form_tbl` WHERE name = '$name' 
    AND address = '$address' AND gender = '$gender' AND birthday = '$birthday' 
    AND place_of_birth = '$place_of_birth' AND status = '$status' AND cellphone_number = '$cellphone_number' 
    AND email = '$email'  AND citizenship = '$citizenship'") or die('query failed');

    if(mysqli_num_rows($select_submit) >0){
        $submit[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `form_tbl`(name,address,gender,birthday,place_of_birth,
        status, cellphone_number, email, citizenship) VALUES('$name', '$address',
        '$gender', '$birthday', '$place_of_birth', '$status', '$cellphone_number',
        '$email', '$citizenship')") or die ('query failed');
        $submit[] = 'Update Information Successfully';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
</head>
<body>
    <header class="header">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
        </ul>
      </header>
    

    <section id="home">
        <div class="main">
            <h2 class="headings">Joel Wesly Fontanilla </h2>
        </div>
        <h5>Aspiring Front End </h5>
        <div id="icon">
            <a href="https://www.facebook.com/westly23/"><img src="images/fb.png" alt="facebook" width="30" height="30"></a>
            <a href="https://www.instagram.com/j_w3stly/"><img src="images/ig.png" alt="instagram" width="30" height="30"></a>
            <a href="https://github.com/joelwestly"><img src="images/github.png" alt="github" width="30" height="30"></a>
        </div>
       
    </section>

    <section id="about">
        <h3>About Me</h3>
        <div id="pic">
            <img src="images/4.jpg" alt="">
            <button id="button"><a href="form.php">Update</a></button>
            <div id="intro">
                <h2>Aspiring | Front End</h2>
                <p>Hello I'm Joel wesly fontanilla,
                     a passionate frontend developer with 
                     a keen eye for creating engaging and user-friendly web experiences.</p>                    
        <ul>
            <br>
        <div class="container mt-5">
        <h2>Personal Information</h2>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
                    echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
                    echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
                    echo "<p><strong>Birthday:</strong> " . $_POST["birthday"] . "</p>";
                    echo "<p><strong>Place of Birth:</strong> " . $_POST["place_of_birth"] . "</p>";
                    echo "<p><strong>Civil Status:</strong> " . $_POST["status"] . "</p>";
                    echo "<p><strong>Cellphone Number:</strong> " . $_POST["cellphone_number"] . "</p>";
                    echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
                    echo "<p><strong>Citizenship:</strong> " . $_POST["citizenship"] . "</p>";
                } else {
                    echo "
                    <p>Name: Joel Wesly Fontanilla</p>
                    <p>Birth Date: February 23,2004</p>
                    <p>Birth Place: Bayambang Pangasinan</p>
                    <p>Age: 20</p>
                    <p>Gender: Male</p>
                    <p>Civil Status: Single</p>
                    <p>Home Address: #20 San Agustin Sto tomas pangasinan</p>
                    <p>Email: Joelfontanilla235@gmail.com</p>
                    <h2>Educational Background</h2>
                    <li>Primary</li>
                    <p>Ernesting Gonzles Central School</p>
                    <li>Secondary</li>
                    <p>Abe Urdaneta</p>
                    <li>Tertiary</li>
                    <p>Urdaneta City University</p>";
                }
                ?>
                <br>
                <a href="javascript:history.go(-1)" class="btn btn-primary" style="display: inline-block; padding: 10px 20px; background-color:
                 #007bff; color: #fff; text-decoration: none; border-radius: 5px; border: none; cursor: pointer;">Go Back</a>
            </div>
        </div>
        
    </div>
   </ul>
 </div>
</section>

    <section id="gallery">
        <h1 class="headings">Gallery</h1>
        <div class="gallery">
            <a href="https://www.facebook.com/stories/?card_id=UzpfSVNDOjY5ODE4NTEzMjQ1MjMwMg%3D%3D&view_single=true"><img src="images/11.jpg" alt=""></a>
            <a href="https://www.instagram.com/p/CzBvHdlvIfBmrI4W_Qf5NT52nVdCttXstBkrbs0/?img_index=2"><img src="images/9.jpg" alt=""></a>
            <a href="https://www.facebook.com/westly23/"><img src="images/7.jpg" alt=""></a>
            <a href="https://www.instagram.com/p/CzBvHdlvIfBmrI4W_Qf5NT52nVdCttXstBkrbs0/?img_index=1"><img src="images/3.jpg" alt=""></a>
            <p>Cherishing laughter,adventures and shared moments with friends.These memories are threads
                that weave the fabric of a rich and enduring friendship.Grateful for the joy they bring to my life.
            </p>
            <a href="https://www.instagram.com/p/CzBvHdlvIfBmrI4W_Qf5NT52nVdCttXstBkrbs0/?img_index=2"><img src="images/6.jpg" alt=""></a>
            <a href="https://www.instagram.com/p/C5Q2MIsPDNv_is8nvNLI6ncE5BfHoUzJF7vnZg0/?img_index=1"><img src="images/5.jpg" alt=""></a>
            <a href="https://www.instagram.com/p/CzBvHdlvIfBmrI4W_Qf5NT52nVdCttXstBkrbs0/?img_index=2"><img src="images/8.jpg" alt=""></a>
            <a href="https://www.facebook.com/photo/?fbid=1365900407123960&set=a.116187442095269"><img src="images/10.jpg" alt=""></a>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
           <h1 class="sub-title">Portfolio</h1> 
           <div class="head"><h4>Hello, I'm Joel Wesly Fontanilla, a fututre-focused Frond-End Developer.</h4> 
            <p>These are my idea's to create in the future:</p>
        </div>
           <div class="work-list">
            <div class="work">
                <a href="https://github.com/joelwestly"><img src="images/1.JPG"></a>
                <div class="layer">
                    <h3>Porfolio Website</h3>
                    <p>A portfolio website is a curated, online space that showcases your best work. 
                        It's one of the most practical and memorable ways to share your work with press, 
                        potential collaborators or employers.</p>
                </div>
            </div>
            <div class="work">
                <a href="https://github.com/joelwestly"><img src="images/2.JPG"></a>
                <div class="layer">
                    <h3>Landing Page</h3>
                    <p>In digital marketing, a landing page is a standalone web page, 
                        created specifically for a marketing or advertising campaign. It's where a visitor
                         "lands" after they click on a link in an email, or ads from Google, Bing, YouTube, Facebook, Instagram, Twitter, or similar places on the web.</p>
                </div>
            </div>
            <div class="work">
                <a href="https://github.com/joelwestly"><img src="images/00.png"></a>
                <div class="layer">
                    <h3>Login Authentication </h3>
                    <p>The website then compares this information with stored credentials to confirm the user's authenticity. 
                        Successful authentication allows users to securely access their accounts and perform various actions based on their permissions.</p>
                </div>
            </div>
           </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p>Joelfontanilla235@gmail.com
                <br>#09466894153 <br>
            You ARE LOVED BY THE ONE WHO NEVER FAILS
        </p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/westly23/"><img src="images/fb.png" alt="facebook" width="30" height="30"></a></li>
            <li><a href="https://www.instagram.com/j_w3stly/"><img src="images/ig.png" alt="instagram" width="30" height="30"></a></li>
            <li><a href="https://github.com/joelwestly"><img src="images/github.png" alt="github" width="30" height="30"></a></li>
            <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><img src="images/gmail.png" alt="gmail" width="30" height="30"></li>
        </ul>
        <nav class="navbar">
            <ul>
                <li><a href="#home">>Home</a></li>
                <li><a href="#about">>About</a></li>
                <li><a href="#gallery">>Gallery</a></li>
                <li><a href="#portfolio">>Portfolio</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2024 create by <span>JoelWeslyfontanilla</span></p>
        </div>
        
    </footer>
    
</body>
</html>