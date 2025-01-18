<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Reservation Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <!-- Main Division -->

    <div class="hotelReservation">

    <!-- Form -->    

        <div class="form">
            <form method="post" action="insert_reservation.php">
            <br>
            <h3>Hotel Reservation</h3><br>

            <h4>

            <label for="text groomName">Groom Name</label><br><br>
            <input type="text" class="text groomName" name="groomName" placeholder="Enter the Groom Name" required><br><br>
            
            <label for="text brideName">Bride Name</label><br><br>
            <input type="text" class="text brideName" name="brideName" placeholder="Enter the Bride Name" required><br><br>

            <label for="text email">Email</label><br><br>
            <input type="email" name="email" class="text email" name="email" placeholder="Enter your Correct Email" required><br><br>

            <label for="text contactNumber">Contact Number</label><br><br>
            <input type="tel" class="text number" name="number" placeholder="Enter valid Number" maxlength="10" required><br><br>

            <label for="text functionDate">Function Date</label><br><br>
            <input type="date" class="text functionDate" name="functionDate" required><br><br>

            <label for="text numberOfGuests">Number of Guests</label><br><br>
            <input type="number" class="text numberOfGuests" name="numberOfGuests" placeholder="Enter the Number" required><br><br>

            <label for="text numberOfRooms">Numberof Rooms</label><br><br>
            <input type="number" class="text numberOfRooms" name="numberOfRooms" placeholder="Enter the Number" required><br><br>
            
            </h4>
            <br>

            <div class="functionTypes">
            <h5>
                <label for="">Function Type : </label>
                <ol>
                    <li><input type="radio" id="wedding" name="functionType" value="wedding" required="functionType"><label>Wedding</label></li>
                    <li><input type="radio" id="preWedding" name="functionType" value="preWedding" required="functionType"><label>Pre-Wedding</label></li>
                </ol>
            </h5>
            </div>
            
            <!-- Border Line 01 

            <div class="line1"></div> -->
   
            <div class="functionTimes">
            <h5>
                <label for="">Function Time : </label>
                <ol>
                    <li><input type="radio" id="day" name="functionTime" value="day" required="functionTime"><label>Day</label></li>
                    <li><input type="radio" id="night" name="functionTime" value="night" required="functionTime"><label>Night</label></li>
                </ol>
            </h5>
            </div>

            <div>
            <h5>
                <label for="">Payment Method : </label><br><br>
                <input type="radio" id="cash" name="paymentMethod" value="cash" required="paymentMethod"><label>Cash</label>
                <input type="radio" id="cardPayment" name="paymentMethod" value="cardPayment" required="paymentMethod"><label>Card Payment</label>
            </h5>
            </div>
            <br><br>
            <div>
                <h4>
                <label for="text reservationID">Reservation ID</label><br><br>
                <input type="text" class="text reservationID" disabled placeholder="You do not need to enter a reservation ID">
                </h4>
            </div>
            <br><br>
            <input type="reset" name="reset" class="resetButton" value="Reset"><br><br>
            <input type="submit" name="submit" class="submitButton" value="Check availability & price"><br><br>
            
            </form>
            <a href="updateR.php">
            <button class="uButton" >
                Update Data
            </button>
            <br><br>
            </a>
            <a href="delete.php">
                <button class="de">Delete</button><br>
            </a>

            
        </div>

        <!-- Boreder Line 02 

        <div class="line2"></div> -->

        <!-- Image

        <div class="image">

            <a href="./Img/events-new_0011_351.jpg">
                <img src="./Img/events-new_0011_351.jpg" height="882p" width="660px" alt="This is an Image">

            </a>

        </div> -->

    </div>

    
</body>
</html>