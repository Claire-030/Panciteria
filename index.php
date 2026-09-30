<?php 
require ("./components/header.php");
require ("./components/navbar.php");

?>

<!-- Main Content -->
<div class="card border-0 px-5 mt-5 mb-5 bg-transparent" id="home">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0 text-center">
         <h5 class="text-uppercase fw-bold text-muted fs-5">From our kitchen to your table: Freshly Made. Every Time.</h5>
         <h1 class="display-3 fw-bold mb-2" style="color: #3c4d55;">Panciteria</h1>
         <p class="text-muted fs-5"> Skip the fast food. Enjoy real, home-cooked Filipino meals made to order. <Br> 🍲👨‍🍳 </p>
        </div>

        <div class="col-lg-6 text-center">
         <img src="./assets/Owner.jpg" class="img-fluid rounded-4 shadow-sm" style="height: 500px; width: 100%; object-fit: cover;" alt="Main Background">
        </div>
   </div>
</div>


<!-- Services -->
<div class="container my-5 overflow-hidden" id="services">
    <hr class="w-50 mx-auto opacity-100" style="height: 3px; background-color: #A9c6d4; border: none;">
    <h1 class="title-pages text-uppercase fw-bold fs-2 text-black mb-4 text-center">SERVICES</h1>
    <div class="row g-4 justify-content-center">

        <div class="col-12 col-md-4">
          <div class="card h-100 border-0 shadow-sm rounded-4 p-3 text-center" style="background-color: #ffffff;">
             <div class="card-body d-flex flex-column align-items-center">
                <div class="p-3 mb-3 rounded-circle" style="background-color: #fff6f0; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                 <span style="font-size: 2rem;">🍜</span>
                </div>
                 <h4 class="card-title text-dark fs-4 mb-2">Dine-In</h4>
                    <p class="card-text text-secondary fs-6 mb-4"> Enjoy freshly prepared home-cooked Filipino meals.
                    </p>
                 <a href="#contact" class="btn mt-auto fw-bold px-4" style="background-color: #A9c6d4; color: #000000; border-radius: 8px;">Order Now</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3 text-center" style="background-color: #ffffff;">
               <div class="card-body d-flex flex-column align-items-center">
                   <div class="p-3 mb-3 rounded-circle" style="background-color: #fff6f0; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                     <span style="font-size: 2rem;">🎉</span>
                    </div>
                     <h4 class="card-title text-dark fs-4 mb-2">Party & Event Catering</h4>
                        <p class="card-text text-secondary fs-6 mb-4">  Affordable and Delicious Filipino food trays for events.
                        </p>
                     <a href="#contact" class="btn mt-auto fw-bold px-4" style="background-color: #A9c6d4; color: #000000; border-radius: 8px;">Book Catering</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3 text-center" style="background-color: #ffffff;">
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="p-3 mb-3 rounded-circle" style="background-color: #fff6f0; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                     <span style="font-size: 2rem;">📱</span>
                    </div>
                     <h4 class="card-title text-dark fs-4 mb-2">Advance Takeout Orders</h4>
                        <p class="card-text text-secondary fs-6 mb-4"> Craving a delicious Filipino meal? Call or message us to place your order today! Ready for pickup.
                        </p>
                     <a href="#contact" class="btn mt-auto fw-bold px-4" style="background-color: #A9c6d4; color: #000000; border-radius: 8px;">Advance Order</a>
                </div>
           </div>
        </div>
    </div>
</div>

<!-- Products -->
<div class="container my-5" id="products">
    <hr class="w-50 mx-auto opacity-100" style="height: 3px; background-color: #A9c6d4; border: none;">
    <h1 class="title-pages text-uppercase fw-bold fs-2 text-black mb-4 text-center">PRODUCTS</h1>

    <div class="row g-4 justify-content-center">

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/Menu1.png" class="card-img-top" alt="Menu">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Menu</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/Menu2.png" class="card-img-top" alt="Menu">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Menu</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/2.png" class="card-img-top" alt="Dinakdakan">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Dinakdakan</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/3.png" class="card-img-top" alt="Palabok">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Palabok</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/4.png" class="card-img-top" alt="Miki Bihon Lechon">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Miki Bihon Lechon</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/5.png" class="card-img-top" alt="Canton">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Canton</h5>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- About Us -->
<div class="container my-5 overflow-hidden" id="about">
    <hr class="w-50 mx-auto opacity-100" style="height: 3px; background-color: #A9c6d4; border: none;">
    <h1 class="title-pages text-uppercase fw-bold fs-2 text-black mb-4 text-center">ABOUT US</h1>
    <div class="row g-4 justify-content-center">

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card about-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/Owner.jpg" class="card-img-top" alt="about">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Panciteria</h5>
                    <p class="card-text text-secondary fs-6 mb-4">Established on September 30, 2007. Panciteria has provided nearly 20 years of authentic, freshly prepared Filipino meals to our community.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card about-card h-100 border-0 shadow-sm rounded-4 text-center">
                <img src="./assets/Menu1.png" class="card-img-top" alt="about">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h5 class="card-title mb-0">Food Menu History</h5>
                    <p class="card-text text-secondary fs-6 mb-4">Every item on our menu is the result of endless experiments and honest taste tests, perfected over time to bring you the finest comforting, home-cooked Filipino meals.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Us -->
 <div class="container my-5" id="contact">
    <hr class="w-50 mx-auto opacity-100" style="height: 3px; background-color: #A9c6d4; border: none;">
    <h1 class="title-pages text-uppercase fw-bold fs-2 text-black mb-4 text-center">CONTACT US</h1>
    <div class="row g-4 align-items-center">
    
        <div class="col-12 col-lg-7">
            <div class="form-container border-0 shadow-sm rounded-4 p-4" style="background-color: #ffffff;">
             <form action="" method="post">
                <div class="form-fields">
            
                    <div class="mb-3 form-items">
                     <label class="form-label fw-bold" for="">Enter Name:</label>
                     <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3 form-items">
                     <label class="form-label fw-bold" for="">Enter Email Address:</label>
                     <input type="email" class="form-control" id="email" name="email_address" required>
                    </div>

                    <div class="mb-3 form-items">
                     <label class="form-label fw-bold" for="">Enter Number:</label>
                     <input type="text" class="form-control" id="phone" name="phone_number" required placeholder="09123456789">
                    </div>

                    <div class="mb-3 form-items">
                     <label class="form-label fw-bold" for="">Enter Subject:</label>
                     <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="mb-3 form-items">
                     <label class="form-label fw-bold" for="concern">Enter Concerns:</label>
                     <textarea class="form-control" id="concern" name="concern" rows="3" required></textarea>
                    </div>

                    <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="Check" required>
                     <label class="form-check-label" for="Check">Details All Correct</label>
                    </div>

                     <button type="submit" name="btnSubmit" class="btn fw-bold px-4 py-2" style="background-color: #A9c6d4; color: #000000; border-radius: 8px;"> Submit</button>
               </div>
             </form>
            </div>
        </div>
    
     <div class="col-12 col-lg-5">
        <div class="p-4 rounded-4 shadow-sm h-100" style="background-color: #fff8e6;">
            <h3 class="fw-bold mb-3">Visit Us</h3>
            <p class="text-secondary mb-4">Have questions or want to place an order? Drop us a message or visit our eatery!</p>
        
            <div class="mb-3">
             <h6 class="fw-bold mb-1">📍 Address:</h6>
             <p class="text-muted"> Marikina, 1800 Metro Manila</p>
            </div>

            <div class="mb-3">
             <h6 class="fw-bold mb-1">⏰ Operating Hours:</h6>
             <p class="text-muted">Monday - Sunday: 8:00 AM - 8:30 PM</p>
            </div>

            <div class="mb-3">
             <h6 class="fw-bold mb-1">📞 Contact Number:</h6>
             <p class="text-muted">0912 3456 789</p>
            </div>

            <div class="mb-3">
             <h6 class="fw-bold mb-1">🔥 Facebook:</h6>
             <p class="text-muted">Panciteria</p>
            </div>
        </div>
     </div>
    </div>
</div>

<?php
include("./connections/config.php");
include("./helpers/SystemOperators.php");

$con = connection();
$so = new SystemOperators();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnSubmit'])){
    $name = $so->encrypt(filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS));
    $email_address = $so->encrypt(filter_input(INPUT_POST,'email_address', FILTER_SANITIZE_SPECIAL_CHARS));
    $phone_number = $so->encrypt(filter_input(INPUT_POST,'phone_number', FILTER_SANITIZE_SPECIAL_CHARS));
    $subject = filter_input(INPUT_POST,'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $concern = filter_input(INPUT_POST,'concern', FILTER_SANITIZE_SPECIAL_CHARS);

    $insert_query = 'INSERT INTO `panciteria` (`name`, `email_address`, `phone_number`, `subject`, `concern`) VALUES (?, ?, ?, ?, ?)';
    $insert_stmt = $con->prepare($insert_query);
    
    if ($insert_stmt) {
        $insert_stmt->bind_param('sssss',$name, $email_address,$phone_number, $subject,$concern);
        try {
            $insert_stmt->execute();
            echo "<script> 
                    alert('We have successfully received your message. Please allow us some time to review it, and we will respond as soon as possible!');
                    window.location='index.php';
                  </script>";
        } catch(mysqli_sql_exception $e) {
            echo "Error saving entry: " . $e->getMessage();
        }
        $insert_stmt->close();
    } else {
        echo "Failed to ececute";
    }
}
?>

<?php
require ("./components/footer.php");
?>