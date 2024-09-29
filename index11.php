<?php
session_start(); // Start session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleget</title>
    <link rel="icon" href="Untitled-1.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700;900&display=swap" rel="stylesheet" />
    
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700;900&display=swap" rel="stylesheet" />
   <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
             justify-content: center;
    align-items: center;
           
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

      


 
       .radio-group {
    display: flex;
    gap: 10px; /* Adjust spacing as needed */
    align-items: center;
}

.radio-group input[type="radio"] {
    margin-right: 5px; /* Adjust spacing between radio button and label */
}
        select, input[type="submit"], button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }



/* Ensure all input fields have consistent styling */
input[type="text"], 
input[type="password"], 
input[type="date"], 
select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}




       
        select, input[type="submit"], button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
        /* Modal styles */
        /* Modal styles */
.modal {
    display: none; /* Initially hidden */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
      

       /* Mobile specific styles */
        @media only screen and (max-width: 400px) {
            body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
             justify-content: center;
    align-items: center;
            }
            .container {
                width: 60%;
                margin: 0 auto;
                padding: 15px;
            }
            h1 {
                font-size: 24px;
            }
            .form-group {
            margin-bottom: 20px;
        }
            input[type="submit"], button {
                font-size: 14px;
                padding: 8px;
            }
            .modal-content {
                width: 70%;
                padding: 15px;
            }
            .modal {
    display: none; /* Initially hidden */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 70%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    height: 80%
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

            .close-btn {
        color: red;
        float: right;
        font-size: 28px;
        cursor: pointer;
    }
    .order-btn {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #ff5722;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #ff5722;
        color: white;
        border: none;
        cursor: pointer;
    }
              

        }
    </style>
<script>
   function updatePrice() {
    const nameSelect = document.getElementById('name');
    const selectedOption = nameSelect.options[nameSelect.selectedIndex];
    const timeOfDay = document.querySelector('input[name="time_of_day"]:checked');

    if (timeOfDay && selectedOption) {
        // Corrected data attribute selection
        const price = selectedOption.getAttribute(`data-${timeOfDay.value.toLowerCase()}`);
        const password = selectedOption.getAttribute('data-password');

        document.getElementById('price').value = price;
        document.getElementById('entered_password').value = ''; // Reset entered password when name changes
    }
}

function handleFormSubmission(event) {
    event.preventDefault();

    const nameSelect = document.getElementById('name');
    const enteredPassword = document.getElementById('entered_password').value;
    const correctPassword = nameSelect.options[nameSelect.selectedIndex].getAttribute('data-password');

    if (enteredPassword === correctPassword) {
        const form = event.target;
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            if (result.trim() === 'success') {
                openSuccessModal(); // Show success modal
             } else if (result.trim() === 'already_submitted') {
                 openAlreadySubmittedModal(); // Show already submitted modal
        } else {
            alert('An error occurred. Please try again.');
        }
    })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error. Please try again.');
        });
    } else {
        alert('Incorrect password. Please try again.');
    }
}

    

    // Show the success modal
function openSuccessModal() {
    document.getElementById("successModal").style.display = "flex";
}

// Close the success modal
function closeSuccessModal() {
    document.getElementById("successModal").style.display = "none";
}

// Open and close modal
function openPopup() {
    document.getElementById("dailyUpdateModal").style.display = "block";
}

function closeModal() {
    document.getElementById("dailyUpdateModal").style.display = "none";
}
// Function to open the already submitted modal
function openAlreadySubmittedModal() {
    document.getElementById('alreadySubmittedModal').style.display = 'block';
}
    // Function to close the already submitted modal
function closeAlreadySubmittedModal() {
    document.getElementById('alreadySubmittedModal').style.display = 'none';
}

window.onclick = function(event) {
    const modal = document.getElementById("dailyUpdateModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

    

// Set the current date as the default in the date picker, but allow user selection
window.onload = function() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0'); // Month is zero-based, so add 1
    const day = String(today.getDate()).padStart(2, '0');
    const formattedDate = `${year}-${month}-${day}`;

    // Set the current date as default in the date picker
    const datePicker = document.getElementById('entry_date');
    datePicker.value = formattedDate;

    // Allow users to manually select another date
    datePicker.addEventListener('change', function() {
        const selectedDate = datePicker.value;
        console.log(`User selected date: ${selectedDate}`);
    });
};




   function viewRecords() {
    const nameSelect = document.getElementById('name');
    const selectedOption = nameSelect.options[nameSelect.selectedIndex];
    
    if (selectedOption.value) {
        const name = selectedOption.value;
        
        // Set the name in the modal header
        document.getElementById('selectedName').innerText = name;

        // Fetch records from the server for the selected name
        fetch(`https://banjoscafe.in/view_records.php?name=${encodeURIComponent(name)}`)
            .then(response => response.json())
            .then(records => {
                const recordsContent = document.getElementById('recordsContent');
                recordsContent.innerHTML = ''; // Clear any previous content

                if (records.length > 0) {
                    let recordsHTML = '<ul>';
                    records.forEach(record => {
                        recordsHTML += `<li>Date: ${record.date}, Time of Day: ${record.time_of_day}</li>`;
                    });
                    recordsHTML += '</ul>';
                    recordsContent.innerHTML = recordsHTML;
                } else {
                    recordsContent.innerHTML = 'No records found for this person.';
                }

                // Open the modal to show the records
                document.getElementById('recordsModal').style.display = 'block';
            })
            .catch(error => {
                console.error('Error fetching records:', error);
                alert('An error occurred while fetching the records.');
            });
    } else {
        alert('Please select a name.');
    }
}

function closeRecordsModal() {
    document.getElementById('recordsModal').style.display = 'none';
}

</script>
    
</head>
<body>
    <div class="main-container">

        <!-- Navbar Section -->
        <header class="navbar">
            <div class="nav">
                <div class="left">
                    <a href="#home" class="logo">
                        <img src="deleget11.png" alt="Logo" height="60">
                    </a>
                  <!--  <div class="location-div">
                        <span class="other">Other</span>
                        <span class="location">Pune, India</span>
                        <span class="arrow-down"><i class="fa-solid fa-angle-down"></i></span>
                    </div>-->
                </div>
                <div class="right">
                    <div class="search-section1">
                        <input type="text" placeholder="Search for restaurants or dishes" />
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                   <!-- <nav id="nav-menu">
                        <ul class="items">
                            <li><a href="index.html#home">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="Gallery.html">Gallery</a></li>
                            <li><a href="Career.html">Career</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="SignUp.html">Signup</a></li>
                            <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </nav> -->

               <nav>
                <ul>
                    <li><a href="index.html#home">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="Gallery.html">Gallery</a></li>
                    <li><a href="Career.html">Career</a></li>

                  
                <!-- Check if user is logged in -->
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="#">Hello, <?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="SignUp.html">Signup</a></li>
                <?php endif; ?>

                  
                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </nav>
                    
                    <div class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</div>
                    <div class="mobile-menu-btn1"><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></div>
                </div>
            </div>
        </header>
         <!-- Main Content Section -->
        <main class="content">
            <!-- Hero Section -->
            <div class="hero-section">
                <img src="deleget111.jpg" alt="Hero Image" class="hero-image">
                <div class="hero-text">
                    <p>Tasty and Affordable home-style meals just at ₹59</p>
                    <p>Enjoy delicious, homemade meals with absolutely free delivery on every order!</p>
                </div>
            </div>


<button class="popup-btn" onclick="openPopup()">Daily Tiffin Services</button>
<!-- Button to trigger popup 
<button class="popup-btn" onclick="openPopup()">Khandesh Express, New Sangvi</button>
            
            <!-- Button to trigger popup 
<button class="popup-btn" onclick="openWebsite()">Banjos-The Food Chain, Savda(Jalgaon)</button> -->

<!-- Popup Overlay -->
<div id="dailyUpdateModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>TIFFIN SERVICES</h1>
        <form action="https://banjoscafe.in/process1.php" method="post" onsubmit="handleFormSubmission(event)">
            
            <div class="form-group">

            <p>We provide tiffin services for just ₹60, which includes 4 chapatis.</p>
        </div>
<div class="dish-item1">
            <img src="Tiffin.jpeg" alt="Dal Baati" class="dish-image">
            <div class="dish-description1">
                <h3>Tiffin</h3>
                <button class="order-btn" onclick="openOrderModal('Daily Tiffin')">Order Now</button>
            </div>
        </div>
<!-- <option value="Tiffin Services" data-morning="60" data-evening="60" data-password="1234">Tiffin Services (60 for 4 chapati)</option>


                
                <label for="name">Name:</label>
                 <select name="name" id="name" required onchange="updatePrice()">
                <option value="" disabled selected>Select a name</option>
                 <option value="मोहन पाटील" data-morning="60" data-evening="60" data-password="8767">मोहन पाटील</option>
                <option value="सुमित कुलकर्णी" data-morning="60" data-evening="60" data-password="">सुमित कुलकर्णी</option>
                <option value="चेतन ढाके" data-morning="60" data-evening="60" data-password="8408">चेतन ढाके</option>
                <option value="अजय साळुंखे" data-morning="60" data-evening="60" data-password="9545">अजय साळुंखे</option>
                <option value="प्रतिक चौधरी" data-morning="60" data-evening="70" data-password="9421">प्रतिक चौधरी</option>
                <option value="निखिल राणे" data-morning="60" data-evening="70" data-password="8605">निखिल राणे</option>
                <option value="यश शेलकर" data-morning="60" data-evening="70" data-password="">यश शेलकर</option>
                <option value="हितेश पाटील" data-morning="60" data-evening="70" data-password="9359">हितेश पाटील</option>
                <option value="योगेश चोपडे" data-morning="60" data-evening="70" data-password="7020">योगेश चोपडे</option>
                <option value="रोहित फालक" data-morning="60" data-evening="70" data-password="7755">रोहित फालक</option>
                <option value="भावेश झोपे" data-morning="60" data-evening="70" data-password="7066">भावेश झोपे</option>
                <option value="राहुल पाटील" data-morning="60" data-evening="60" data-password="">राहुल पाटील</option>
                <option value="प्रितम पाटील" data-morning="60" data-evening="70" data-password="9763">प्रितम पाटील</option>
                <option value="पुष्पक पाटील" data-morning="60" data-evening="70" data-password="">पुष्पक पाटील</option>
                <option value="वैभव ढाके" data-morning="60" data-evening="70" data-password="8408">वैभव ढाके</option>
                <option value="श्रृती" data-morning="60" data-evening="70" data-password="8999">श्रृती</option>
                <option value="राजू दादा" data-morning="60" data-evening="70" data-password="9876">राजू पाटील</option>
                <option value="कुमार धांडे" data-morning="60" data-evening="70" data-password="9049">कुमार धांडे</option>
                <option value="जयेश नेहेते" data-morning="60" data-evening="70" data-password="9112">जयेश नेहेते</option>
                <option value="शुभम महाजन" data-morning="60" data-evening="70" data-password="9604">शुभम महाजन</option>
                <option value="राकेश कोल्हे" data-morning="60" data-evening="60" data-password="9421">राकेश कोल्हे</option>
                <option value="संदेश पाटील" data-morning="60" data-evening="60" data-password="">संदेश पाटील</option>
                <option value="विपुल पाटील" data-morning="60" data-evening="60" data-password="">विपुल पाटील</option>
                <option value="परेश चौधरी" data-morning="60" data-evening="60" data-password="9892">परेश चौधरी</option>
                <option value="रोहित जाधव" data-morning="60" data-evening="60" data-password="">रोहित जाधव</option>
                <option value="राहूल पाटील" data-morning="60" data-evening="60" data-password="">राहूल पाटील(Pimprud)</option>
                <option value="राकेश पालस्टे" data-morning="70" data-evening="70" data-password="9975">राकेश पालस्टे</option>
                <option value="दिपक" data-morning="70" data-evening="70" data-password="">दिपक</option>
                <option value="उदय पाटील" data-morning="70" data-evening="70" data-password="8788">उदय पाटील</option>
                <option value="आश्विन भारंबे" data-morning="70" data-evening="70" >आश्विन भारंबे</option>
                <option value="योगेश पाटील" data-morning="60" data-evening="60" data-password="8975">योगेश पाटील</option>
                <option value="प्रज्वल फिरके" data-morning="60" data-evening="60" data-password="9766">प्रज्वल फिरके</option>
                <option value="निलेश" data-morning="60" data-evening="60" data-password="9545">निलेश</option>
                <option value="Unknown" data-morning="0" data-evening="70" data-password="" >Unknown</option>
            </select>
            </div>



 
            <div class="form-group">
                <label for="entry_date">Select Date:</label>
                <input type="date" id="entry_date" name="entry_date" required>
            </div>
            
            <div class="radio-group">
        <input type="radio" id="morning" name="time_of_day" value="Morning" required onchange="updatePrice()">
        <label for="morning">Morning</label>
        
        <input type="radio" id="evening" name="time_of_day" value="Evening" required onchange="updatePrice()">
        <label for="evening">Evening</label>
    </div>
            
            <input type="hidden" name="price" id="price" value="60">
                   <div class="form-group">
                    <label for="entered_password">Password:(First 4 Digit of Mobile No)</label>
                    <input type="password" id="entered_password" name="entered_password" required>
                       <button type="submit">Submit</button>
                 
        <button class="modal-close-btn" onclick="viewRecords()">View Records</button>-->
                </div>
    
<div id="recordsModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeRecordsModal()">&times;</span>
        <h2>Records for <span id="selectedName"></span></h2>
        <div id="recordsContent">
         
        </div>
        <button class="modal-close-btn" onclick="closeRecordsModal()">Close</button>
    </div>
</div> 
            
           <div class="form-group">
                
            </div> 
         
        </form>
    </div>
</div> 

            <!-- Success Message Modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeSuccessModal()">&times;</span>
        <h2>Success!</h2>
        <p>Record added successfully!</p>
        <button class="modal-close-btn" onclick="closeSuccessModal()">Close</button>
    </div>
</div>

            <!-- Already Submitted Message Modal -->
<div id="alreadySubmittedModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAlreadySubmittedModal()">&times;</span>
        <h2>Warning</h2>
        <p>You have already submitted data for this time of day and date.</p>
        <button class="modal-close-btn" onclick="closeAlreadySubmittedModal()">Close</button>
    </div>
</div>






            








            
            <!-- Dishes Section -->
<section class="dishes">
    <h2>Our Popular Dishes</h2>
    <div class="dish-grid">
        <div class="dish-item">
            <img src="Dal Bati.jpg" alt="Dal Baati" class="dish-image">
            <div class="dish-description">
                <h3>Dal Baati</h3>
                <button class="order-btn" onclick="openOrderModal('Dal Baati')">Order Now</button>
            </div>
        </div>
        <div class="dish-item">
            <img src="dishes3.jpg" alt="Rice Plate" class="dish-image">
            <div class="dish-description">
                <h3>Rice Plate</h3>
                <button class="order-btn" onclick="openOrderModal('Rice Plate')">Order Now</button>
            </div>
        </div>
        <div class="dish-item">
            <img src="dishes4.jpg" alt="Pav Bhaji" class="dish-image">
            <div class="dish-description">
                <h3>Bharit Puri</h3>
                <button class="order-btn" onclick="openOrderModal('Bharit Puri')">Order Now</button>
            </div>
        </div>
        <div class="dish-item">
            <img src="dishes.jpg" alt="Shev Bhaji" class="dish-image">
            <div class="dish-description">
                <h3>Shev Bhaji</h3>
                <button class="order-btn" onclick="openOrderModal('Shev Bhaji')">Order Now</button>
            </div>
        </div>
    </div>
</section>


            <!-- Order Popup Modal -->
<div id="order-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeOrderModal()">&times;</span>
        <h2 id="dish-name"></h2>
        <form id="order-form" onsubmit="submitOrder(event)">
            <label for="name1">Name:</label>
            <input type="text" id="name1" name="name1" required>
             <div class="form-group">
                <label for="entry_date">Select Date:</label>
                <input type="date" id="entry_date" name="entry_date" required>
            </div>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="no-of-persons">No of Persons:</label>
            <input type="number" id="no-of-persons" name="no-of-persons" min="1" required>
           

            <button type="submit">Place Order</button>
        </form>
    </div>
</div>
            
            <!-- Features Section -->
            <section class="features-section">
                <h2>Our Services</h2>
                <div class="features-container">
                    <div class="feature-item">
                        <i class="fa-solid fa-utensils"></i>
                        <h2>Restaurants</h2>
                        <p>Discover top-rated restaurants around you.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-hotel"></i>
                        <h2>Hotels</h2>
                        <p>Find the best deals on hotels and accommodations.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-map-signs"></i>
                        <h2>Attractions</h2>
                        <p>Explore must-see attractions in any city.</p>
                    </div>
                </div>
            </section>
            <!-- Restaurants Section 
            <section class="restaurants-section">
                <h2>Featured Restaurants</h2>
                <div class="restaurants-list">
                    <div class="restaurant">
                        <img src="1.jpg" alt="Restaurant 1" />
                        <h3>Restaurant 1</h3>
                        <p>Delicious food from the best chefs in the city.</p>
                    </div>
                    <div class="restaurant">
                        <img src="2.jpg" alt="Restaurant 2" />
                        <h3>Restaurant 2</h3>
                        <p>Experience culinary excellence at Restaurant 2.</p>
                    </div>
                    <div class="restaurant">
                        <img src="3.jpg" alt="Restaurant 3" />
                        <h3>Restaurant 3</h3>
                        <p>Taste the best dishes crafted with love.</p>
                    </div>
                </div>-->
            </section>
            <!-- Footer Section -->
            <footer class="footer">
                <div class="footer-content">
                    <p>&copy; 2024 Deleget. All rights reserved.</p>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <p>Designed and animated by <a href="https://www.skyoud.com" target="_blank">Skyoud Technologies</a></p>
                </div>
            </footer>
        </main>
    </div>
    
    <script>
        function toggleMobileMenu() {
            const menu = document.querySelector('nav ul');
            menu.classList.toggle('active');
            const btn = document.querySelector('.mobile-menu-btn');
            btn.classList.toggle('active');
        }

        function toggleMenu(category) {
            const menu = document.getElementById(category);
            menu.classList.toggle('active');
        }
    function openWebsite() {
        window.open('https://banjoscafe.in', '_blank');
    }
</script>
    </script>


<script>
    function openOrderModal(dishName) {
        document.getElementById('order-modal').style.display = 'block';
        document.getElementById('dish-name').textContent = 'Order ' + dishName;
    }

    function closeOrderModal() {
        document.getElementById('order-modal').style.display = 'none';
    }

    function submitOrder(event) {
        event.preventDefault(); // Prevent form submission

        const name = document.getElementById('name1').value.trim();
        const location = document.getElementById('location').value.trim();
        const noOfPersons = document.getElementById('no-of-persons').value;
        const dishName = document.getElementById('dish-name').textContent;

        // Debugging - log the captured values
        console.log("Name:", name1);
        console.log("Location:", location);
        console.log("Number of Persons:", noOfPersons);
        console.log("Dish Name:", dishName);

        // Check if all fields are filled
        if (name && location && noOfPersons) {
            const message = `Order Details:\nDish: ${dishName}\nName: ${name}\nLocation: ${location}\nNumber of Persons: ${noOfPersons}`;
            const whatsappNumber = "919637587224"; // Replace with your WhatsApp number, including country code
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

            // Redirect to WhatsApp with pre-filled message
            window.open(whatsappUrl, '_blank');

            closeOrderModal();
        } else {
            alert('Please fill in all fields.');
        }
    }

    window.onclick = function(event) {
        const modal = document.getElementById('order-modal');
        if (event.target === modal) {
            closeOrderModal();
        }
   

    }
</script>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65d57ebf8d261e1b5f62f2b4/1hn4ve84k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
    </script>

</body>
</html>
