<?php
include 'components/connect.php';

// Check if user_id cookie is set
$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- Font Awesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- Custom CSS File Link -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- About Section Starts -->
   <section class="about">
      <div class="row">
         <div class="image">
            <img src="images/about-img.svg" alt="About Us">
         </div>
         <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque nobis distinctio, nisi consequatur ad sequi, rem odit fugiat assumenda eligendi iure aut sunt ratione, tempore porro expedita quisquam.</p>
            <a href="courses.html" class="inline-btn">Our Courses</a>
         </div>
      </div>

      <div class="box-container">
         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
               <h3>+1k</h3>
               <span>Online Courses</span>
            </div>
         </div>
         <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
               <h3>+25k</h3>
               <span>Brilliant Students</span>
            </div>
         </div>
         <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
               <h3>+5k</h3>
               <span>Expert Teachers</span>
            </div>
         </div>
         <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
               <h3>100%</h3>
               <span>Job Placement</span>
            </div>
         </div>
      </div>
   </section>
   <!-- About Section Ends -->

   <!-- Reviews Section Starts -->
   <section class="reviews">
      <h1 class="heading">Student's Reviews</h1>
      <div class="box-container">
         <?php
         // Example reviews array for demonstration
         $reviews = [
            [
               "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugiat, quaerat voluptate odio consectetur assumenda fugit maxime unde at ex?",
               "name" => "John Deo",
               "image" => "images/pic-2.jpg"
            ],
            [
               "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugiat, quaerat voluptate odio consectetur assumenda fugit maxime unde at ex?",
               "name" => "Jane Doe",
               "image" => "images/pic-3.jpg"
            ],
            [
               "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugiat, quaerat voluptate odio consectetur assumenda fugit maxime unde at ex?",
               "name" => "Alice Smith",
               "image" => "images/pic-4.jpg"
            ],
            [
               "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugiat, quaerat voluptate odio consectetur assumenda fugit maxime unde at ex?",
               "name" => "Bob Johnson",
               "image" => "images/pic-5.jpg"
            ],
            [
               "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugiat, quaerat voluptate odio consectetur assumenda fugit maxime unde at ex?",
               "name" => "Charlie Brown",
               "image" => "images/pic-6.jpg"
            ],
            [
               "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugiat, quaerat voluptate odio consectetur assumenda fugit maxime unde at ex?",
               "name" => "David Wilson",
               "image" => "images/pic-7.jpg"
            ],
         ];

         foreach ($reviews as $review) { ?>
            <div class="box">
               <p><?php echo $review['text']; ?></p>
               <div class="user">
                  <img src="<?php echo $review['image']; ?>" alt="<?php echo $review['name']; ?>">
                  <div>
                     <h3><?php echo $review['name']; ?></h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </section>
   <!-- Reviews Section Ends -->

   <?php include 'components/footer.php'; ?>

   <!-- Custom JS File Link -->
   <script src="js/script.js"></script>

</body>

</html>