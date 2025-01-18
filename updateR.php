
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
    <link rel="stylesheet" href="./styleU.css">
</head>
<body>
    
<div class="form">
            <form method="POST" action="update.php">
            <br>
            <h3>Hotel Reservation Update</h3><br>

            <h4>

            <label for="text-groomName">Groom Name</label><br><br>
            <input type="text" class="text-groomName" name="groomName" placeholder="Enter the Groom Name" ><br><br>
            
            <label for="text-brideName">Bride Name</label><br><br>
            <input type="text" class="text-brideName" name="brideName" placeholder="Enter the Bride Name" ><br><br>

            <label for="text-email">Email</label><br><br>
            <input type="email" name="email" class="text email" name="email" placeholder="Enter your Correct Email" ><br><br>

            <label for="text-contactNumber">Contact Number</label><br><br>
            <input type="tel" class="text number" name="number" placeholder="Enter valid Number" maxlength="10" ><br><br>

            <label for="text-functionDate">Function Date</label><br><br>
            <input type="date" class="text functionDate" name="functionDate" ><br><br>

            <label for="text-numberOfGuests">Number of Guests</label><br><br>
            <input type="number" class="text numberOfGuests" name="numberOfGuests" placeholder="Enter the Number" ><br><br>

            <label for="text-numberOfRooms">Numberof Rooms</label><br><br>
            <input type="number" class="text numberOfRooms" name="numberOfRooms" placeholder="Enter the Number" ><br><br>
            
            </h4>
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
            <h5>
                <button class="uB">Update</button><br><br>
                
            </h5>
            </div>
            
            </form>
            
        </div>



</body>
</html>