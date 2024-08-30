<!DOCTYPE html>
<html lang="en">
<?php
$firstName = '';
$lastName = '';

if (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['memberid'])) {
  $firstName = urldecode($_GET['firstName']);
  $lastName = urldecode($_GET['lastName']);
  $memberid = urldecode($_GET['memberid']);
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="icon" type="image/png" href="/pictures/logo.png">
  <style>
    body {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin: 0;
      padding: 0;
    }

    #header {
      background-color: rgb(76, 93, 104);
      display: flex;
    }

    #header h1 {
      color: white;
      margin: 0;
      font-size: 1.5rem;
      padding: 1rem;
    }

    #header nav {
      padding-left: 100px;
      display: flex;
      font-size: 17px;
      padding: 1rem;
    }

    #header nav ul {
      list-style: none;
      padding: 0;
      display: flex;
      margin: 0;
    }

    #header nav ul li {
      padding: 0 1rem;
    }

    #header nav a {
      color: white;
      text-decoration: none;
    }

    #footer {
      color: #fff;
      padding: 2rem 0;
      position: relative;
      font-size: larger;
      z-index: 100;
      background-color: rgb(76, 93, 104);
    }

    #footer .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-left: 40px;
      margin-right: 40px;
    }

    #footer p {
      margin: 0;
      font-size: 0.9rem;
    }

    #footer ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    #footer li {
      margin: 0 0.5rem;
    }

    #footer a {
      color: #fff;
      text-decoration: none;
    }

    #footer a:hover {
      text-decoration: underline;
    }

    #home {
      background-image: url(/pictures/homepage.jpg);
      background-size: cover;
      height: 105vh;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    #home h1 {
      margin-top: 0;
      /* Reset margin to remove the space */
      padding: 20px;
      font-size: 30px;
    }

    #services {
      background-image: url(/pictures/trainer3.jpg);
      background-size: cover;
      height: 90vh;
      display: block;
      justify-content: center;
      color: #fff;

    }

    #services p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      max-width: 1000px;
    }

    #services h1 {
      margin-top: 0;
      /* Reset margin to remove the space */
      text-align: center;
      padding: 20px;
      font-size: 30px;
    }

    #aboutus {
      background-image: url(/pictures/panel_5.jpg);
      background-size: cover;
      height: 80vh;
      display: block;
      justify-content: center;
      color: aliceblue;
    }

    #aboutus p {
      text-align: center;
      font-size: 1.2rem;
      padding: 40px;
      margin-bottom: 2rem;
    }

    #aboutus h1 {
      margin-top: 0;
      /* Reset margin to remove the space */
      text-align: center;
      padding: 20px;
      font-size: 30px;
    }


    #trainers {
      background-image: url(/pictures/taekwondo.jpg);
      background-size: cover;
      height: 100vh;
      display: block;
      justify-content: center;
      color: #fff;
      text-align: center;
    }

    #trainers h1 {
      margin-top: 0;
      /* Reset margin to remove the space */
      text-align: center;
      padding: 20px;
      font-size: 30px;
    }

    #trainers p {
      font-size: 15px;
      margin-bottom: 2rem;
      max-width: 500px;
    }

    #nutritionists {
      background-image: url(/pictures/nutrition1.jpg);
      background-size: cover;
      height: 100vh;
      display: block;
      justify-content: center;
      color: #fff;
      text-align: center;
    }

    #nutritionists h1 {
      margin-top: 0;
      /* Reset margin to remove the space */
      text-align: center;
      padding: 20px;
      font-size: 30px;
    }

    #nutritionists p {
      font-size: 20px;
      margin-bottom: 2rem;
      max-width: 500px;
    }

    #contactus {
      background-image: url(/pictures/panel_3.jpg);
      background-size: cover;
      padding: 40px;
      text-align: center;
    }

    #contactus h1 {
      font-size: 36px;
      color: #fff;
      margin-bottom: 20px;
    }

    .flex-div {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
    }

    .flex-div>div {
      width: 40%;
      /* adjust the width as needed */
      margin: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border: 1px solid #ddd;
      /* light gray border */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      /* subtle shadow */
    }

    .flex-div>div p {
      margin-bottom: 10px;
    }

    .connect-with-us {
      text-align: left;
    }

    .connect-with-us h2 {
      margin-top: 0;
    }

    .connect-with-us ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .connect-with-us li {
      margin-bottom: 10px;
    }

    .connect-with-us a {
      color: #337ab7;
      /* blue text */
      text-decoration: none;
    }

    .connect-with-us a:hover {
      color: #23527c;
      /* darker blue on hover */
    }

    .btn {
      background-color: #04AA6D;
      /* Green */
      border-radius: 3px;
      color: white;
      padding: 10px 18px;
      text-align: center;
      text-decoration: none;
      font-size: 13px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .btns {
      background-color: white;
      color: black;
      border: 2px solid #555555;
    }

    .btns:hover {
      background-color: #555555;
      color: white;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      top: 0;
      left: 0;
      text-align: center;
      justify-content: center;
      align-items: center;
      color: aliceblue;
      background-color: #111;
      overflow-x: hidden;
      overflow-y: auto;
      max-height: 90vh;
      /* Set a maximum height for the sidebar */
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 10px 15px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 29px;
      margin-left: 50px;
    }

    /* Add a left margin to the page content when the sidebar is open */
    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    #registration_type {
      width: 80%;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #cccccc;
      border-radius: 4px;
    }

    #regtypebox {
      padding-bottom: 20px;
    }
  </style>
</head>

<body>
  <!---Header-->
  <section id="header">
    <img src="/pictures/logo.png" alt="" style="width: 80px; height: auto;">
    <h1>Welcome to Our Fitness Center</h1>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#aboutus">About Us</a></li>
        <li><a href="#trainers">Trainers</a></li>
        <li><a href="#nutritionists">Nutritionists</a></li>
        <li><a href="#contactus">Contact Us</a></li>
        <li><a href="#" id="openSidebarBtn">My Schedules</a></li>
        <li><a href="#" id="openSidebar1Btn">Dietary Plans</a></li>
        <li><a href="/progress.php?memberid=<?php echo urlencode($memberid); ?>">Progress Report</a></li>
      </ul>
    </nav>

    <!----------------Dietary Sidebar------->
    <div id="sidebar1" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" id="closeSidebar1Btn">&times;</a>
      <h2>My Dietary Plans</h2>
      <form action="download_nu_file.php" method="get">
        <input type="hidden" id="firstName" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>">
        <input type="hidden" id="lastName" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>">
        <input type="hidden" id="memberid" name="memberid" value="<?php echo htmlspecialchars($memberid); ?>">
        <input type="submit" class="btn btns" value="Download Plan">
      </form>
    </div>

    <!----------------Schedules Sidebar------->
    <div id="sidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" id="closeSidebarBtn">&times;</a>
      <h3>My Schedules</h3>
      <form action="/download_t_files.php" method="get">
        <h3>From Personal Trainer</h3>
        <input type="hidden" id="firstName" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>" readonly>
        <input type="hidden" id="lastName" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>" readonly>
        <input type="hidden" id="memberid" name="memberid" value="<?php echo htmlspecialchars($memberid); ?>" readonly>
        <input type="hidden" id="registrationtype" name="registration_type" value="personal_trainer" readonly>
        <input type="submit" class="btn btns" value="Download Schedule">
      </form>
      <form action="/download_t_files.php" method="get">
        <h3>From Regular Trainers</h3>
        <input type="hidden" id="firstName" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>" readonly>
        <input type="hidden" id="lastName" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>" readonly>
        <input type="hidden" id="memberid" name="memberid" value="<?php echo htmlspecialchars($memberid); ?>" readonly>
        <div id="regtypebox">
          <label for="registration_type">Category From:</label>
          <select id="registration_type" name="registration_type" required>
            <option value="select_option">Select option</option>
            <option value="yoga">Yoga Instructor</option>
            <option value="taekwondo">Taekwondo</option>
            <option value="aerobics">Aerobics Instructor</option>
          </select>
        </div>
        <input type="submit" class="btn btns" value="Download Schedule">
      </form>
    </div>
  </section>
  <!-----------------home------------------->
  <section id="home">
    <h1>Home</h1>
    <!----flex div---->
    <div style="justify-content:space-around;">
      <p style="font-size: 55px;font-weight:800; padding-top:120px;">Health and Fitness Center</p>
    </div>
  </section>
  <!-----------------services-------------------->
  <section id="services">
    <h1>Our Services</h1>
    <!----flex div---->
    <div style="display: block; text-align:center; padding-left:130px;">
      <p>1. Nutrition Guidance: Fuel your body for success with our expert nutrition guidance.
        Our registered dietitians develop personalized nutrition plans based on your dietary preferences,
        health goals, and lifestyle. From meal planning and nutritional counseling to grocery shopping tips
        and recipe ideas, we provide the support and resources you need to make healthy eating a sustainable
        part of your lifestyle.</p>
      <p>2. Personalized Workout: Receive one-on-one guidance from our team of certified fitness trainers
        who create personalized workout plans tailored to your specific needs and goals. Whether you're aiming
        to build muscle, improve flexibility, or enhance overall fitness, our trainers will design a customized
        program that suits your fitness level and preferences.</p>
      <p>Trainer Guidance: Benefit from expert advice and support from our team of experienced fitness trainers.
        Receive personalized coaching, technique correction, and workout tips to maximize your results and prevent
        injuries. Whether you're looking for guidance on proper form, exercise modifications, or advanced training
        techniques, our trainers are here to support you every step of the way.</p>
    </div>
  </section>

  <!-----------------about us-------------------->
  <section id="aboutus">
    <h1>About Us</h1>
    <!----flex div---->
    <div style="display: flex; justify-content:space-around;">
      <p> At our Health and Fitness Center, our mission is to empower individuals on their journey to better health and fitness.
        Our platform is designed to provide users with comprehensive tools and resources to achieve their
        fitness goals, whether it's building strength, losing weight, improving endurance,
        or simply adopting a healthier lifestyle. With customizable workout plans, personalized
        nutrition guidance, and intuitive progress tracking features, we strive to make fitness accessible,
        enjoyable, and sustainable for everyone. Join our community today and embark on a transformative
        journey towards a happier, healthier you.</p>
    </div>
  </section>

  <!-------------------Trainers------------------>
  <section id="trainers">
    <h1>Our trainers </h1>
    <!----display flex div----->
    <div style="display: flex; justify-content:space-around; color:black;">
      <div style="height:300px; width:250px; background-color:aliceblue;border-radius:5px;">
        <h2>Aerobics</h2>
        <p style="padding: 10px;">Our team of certified aerobics instructors is dedicated to guiding and inspiring you through dynamic and energizing aerobic workouts that will leave you feeling empowered, energized, and ready to conquer the day.</p>
        <button class="btn btns" onclick="window.location.href='aerobicsinstructors.php'">View Instructors</button>
      </div>
      <div style="height:300px; width:260px; background-color:aliceblue;border-radius:5px;">
        <h2>Tae Kwondo</h2>
        <p style="padding: 10px;"> Our team of experienced and certified Tae Kwon Do instructors is dedicated to providing high-quality martial arts instruction in a safe, supportive, and welcoming environment.</p>
        <button class="btn btns" onclick="window.location.href='taekwondoinstructors.php'">View Instructors</button>
      </div>
      <div style="height:300px; width:260px; background-color:aliceblue;border-radius:5px;">
        <h2>Personal Trainers</h2>
        <p style="padding-left: 8px;padding-right:10px;">Welcome to our Personal Trainer Services, where fitness goals become reality with personalized coaching, expert guidance, and unwavering support. Our team of certified personal trainers is committed to helping you transform your health and fitness, one workout at a time.</p>
        <button class="btn btns" onclick="window.location.href='personaltrainerinstructors.php'">View Instructors</button>
      </div>
      <div style="height:300px; width:260px; background-color:aliceblue;border-radius:5px;">
        <h2>Yoga</h2>
        <p style="padding: 6px;">Welcome to our Yoga Instructor Services, where peace, balance, and harmony await you on the mat. Our team of experienced and certified yoga instructors is dedicated to guiding you on a journey of self-discovery, mindfulness, and physical well-being through the practice of yoga.</p>
        <button class="btn btns" onclick="window.location.href='yogainstructors.php'">View Instructors</button>
      </div>
    </div>
  </section>

  <!-----------------Nutritionists------------------->
  <section id="nutritionists">
    <h1>Nutritionists Services</h1>
    <!-----display flex div------->
    <div style="display: flex;justify-content:center; color:azure;">
      <p>Welcome to our Nutritionist Services, where expert guidance meets personalized
        nutrition solutions tailored to your unique needs. Our team of experienced and
        certified nutritionists is here to support you on your journey to better health
        through proper nutrition and lifestyle choices.</p>
    </div>
    <div style="padding-top: 50px;">
      <button class="btn btns" style="font-size: 20px;" onclick="window.location.href = 'nutritionist_application_page.php';">View Nutritionist</button>

    </div>
  </section>

  <!-----------------contact us-------------------->
  <section id="contactus">
    <h1>Contact Us</h1>
    <div class="flex-div">
      <div>
        <p>Phone: +254 791 178 996</p>
        <p>Business Hours: Monday - Friday, 9am - 5pm</p>
      </div>
      <div class="connect-with-us">
        <h2>Connect with Us</h2>
        <ul style="display: flex; justify-content:space-around;">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">LinkedIn</a></li>
        </ul>
      </div>
    </div>
  </section>

  <!---Footer--->
  <section id="footer">
    <div class="container">
      <p>&copy; 2024 Health and Fitness Website. All rights reserved.</p>
      <ul>
        <li><a href="termsofservice.html">Terms of Service</a></li>
      </ul>
    </div>
  </section>
</body>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var openSidebarBtn = document.getElementById('openSidebarBtn');
    var closeSidebarBtn = document.getElementById('closeSidebarBtn');
    var sidebar = document.getElementById('sidebar');
    var openSidebar1Btn = document.getElementById('openSidebar1Btn');
    var closeSidebar1Btn = document.getElementById('closeSidebar1Btn');
    var sidebar1 = document.getElementById('sidebar1');

    openSidebarBtn.addEventListener('click', function(event) {
      event.preventDefault();
      sidebar.style.width = '250px';
      sidebar1.style.width = '0'; // close sidebar1 when sidebar is opened
    });

    closeSidebarBtn.addEventListener('click', function() {
      sidebar.style.width = '0';
    });

    openSidebar1Btn.addEventListener('click', function(event) {
      event.preventDefault();
      sidebar1.style.width = '250px';
      sidebar.style.width = '0'; // close sidebar when sidebar1 is opened
    });

    closeSidebar1Btn.addEventListener('click', function() {
      sidebar1.style.width = '0';
    });
  });
</script>

</html>