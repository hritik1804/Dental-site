
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "admin1";
    $password = "123456";
    $database = "contact_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')");
    $stmt->bind_param("ssss", $name, $email, $number, $date);

    if ($stmt->execute()) {
        $message = 'Appointment made successfully';
    } else {
        $message = 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?> 





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dental Care site</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
      integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <header class="header fixed-top">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <a href="#home" class="logo">Dental <span>care</span></a>

          <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
          </nav>

          <a href="#contact" class="link-btn">make appointment</a>

          <div id="menu-btn" class="fas fa-bars"></div>
        </div>
      </div>
    </header>

    <section class="home" id="home">
      <div class="container">
        <div class="row min-vh-100 align-items-center">
          <div class="content text-center text-md-left">
            <h3>Let us brighten our smiles</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
              in dicta ducimus ut non!
            </p>
            <a href="#contact" class="link-btn">make appointments</a>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 image">
            <img
              src="./images/54je_9kn8_220301.jpg"
              class="w-100 mb-5 mb-md-0"
            />
          </div>

          <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
              magni distinctio, minima fuga quibusdam mollitia dolorum aut
              assumenda illo quos quam molestias suscipit placeat officiis a
              deleniti laudantium! Nesciunt, quod!
            </p>
            <a href="#contact" class="link-btn">make appointment</a>
          </div>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <h1 class="heading">Our Services</h1>
      <div class="box-container container">
        <div class="box">
          <img src="./images/tooth-brush.png" alt="" />
          <h3>Alignment Specilist</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non,
            pariatur!
          </p>
        </div>
        <div class="box">
          <img src="./images/phone-call.png" alt="" />
          <h3>Cosmetic Dentist</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non,
            pariatur!
          </p>
        </div>
        <div class="box">
          <img src="./images/dental-implant (1).png" alt="" />
          <h3>Oral Hygine Expert</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non,
            pariatur!
          </p>
        </div>
        <div class="box">
          <img src="./images/dental-scaler.png" alt="" />
          <h3>Root Canal Specilist</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non,
            pariatur!
          </p>
        </div>
        <div class="box">
          <img src="./images/dentist-tools.png" alt="" />
          <h3>Cavity Inspection</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non,
            pariatur!
          </p>
        </div>
        <div class="box">
          <img src="./images/electric-toothbrush.png" alt="" />
          <h3>Liver Dental Advisor</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non,
            pariatur!
          </p>
        </div>
      </div>
    </section>

    <section class="process">
      <h1 class="heading">Work Process</h1>
      <div class="box-container container">
        <div class="box">
          <img src="./images/process-1.png" alt="" />
          <h3>Cosmetic Dentistry</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam,
            voluptatem.
          </p>
        </div>
        <div class="box">
          <img src="./images/process-2.png" alt="" />
          <h3>Pediatric Dentistry</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam,
            voluptatem.
          </p>
        </div>
        <div class="box">
          <img src="./images/process-3.png" alt="" />
          <h3>Dental Implant</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam,
            voluptatem.
          </p>
        </div>
      </div>
    </section>

    <section class="reviews" id="reviews">
      <h1 class="heading">Satisfied Clients</h1>
      <div class="box-container container">
        <div class="box">
          <img src="./images/pic-1.jpeg" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
            optio vero! Sequi omnis qui assumenda nobis tempore delectus
            accusamus maxime!
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h3>John Baba</h3>
          <span>Satisfied Client</span>
        </div>
        <div class="box">
          <img src="./images/pic-2.jpeg" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
            optio vero! Sequi omnis qui assumenda nobis tempore delectus
            accusamus maxime!
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h3>Ava Carolle</h3>
          <span>Satisfied Client</span>
        </div>
        <div class="box">
          <img src="./images/pic-3.jpeg" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
            optio vero! Sequi omnis qui assumenda nobis tempore delectus
            accusamus maxime!
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h3>Jimmy</h3>
          <span>Satisfied Client</span>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>
        <?php if (!empty($message)) { ?>
          <p style="color: <?php echo ($message === 'Appointment made successfully') ? 'green' : 'red'; ?>; text-align: center; font-size: 20px">
        <?php echo $message; ?>
          </p>
        <?php } ?>
        <form action="" method="post">
        <span>Your Name</span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>Your Email</span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>Your Number</span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>Your Date</span>
        <input type="datetime-local" name="date" class="box">
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
    </section>

    <section class="footer">

          <div class="box-container container">
            <div class="box">
              <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123 456 7890</p>
                <p>+111 222 3333</p>
              
            </div>
            <div class="box">
              <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Banglore,India 560023</p>
              
            </div>
            <div class="box">
              <i class="fas fa-clock"></i>
                <h3>Working Hours</h3>
                <p>00:00Am to 06:00Am</p>
              
            </div>
            <div class="box">
              <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>hritikranjan1804@gmail.com</p>
                <p>hritikranjan.professional@gmail.com</p>
              
            </div>
          </div>

          <div class="credit"> &copy; copyright @ <?php echo date("Y"); ?> by <span>Hritik Ranjan Sharma</span></div>

    </section>

    <script src="./script.js"></script>
  </body>
</html>
