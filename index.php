<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>International Bank online</title>
</head>
<body>
<header >   
    <div class="container">
        <div class="left">
            <h3>BILLING ADDRESS</h3>
            <form action="connect.php" method="POST" >
                Full name
                <input type="text"  placeholder="Enter your Name" name="nom" required>
                Email
                <input type="email" placeholder="Enter your Email" name="email" required>
                Address
                <input type="text" placeholder="Enter your Address" name="address" required>
                City
                <input type="text" placeholder="Enter your City" name="city" required>
                <div id="zip">
                    <label>
                        Country
                        <select name="country"  required>
                            <option>Choose country...</option>
                            <option>RCA</option>
                            <option>Cameroon</option>
                            <option>Tchad</option>
                            <option>Gabon</option>
                            <option>Guinée Equatorial</option>
                        </select>
                    </label>
                    <label>
                        Tel:
                        <input type="number" name="tel" placeholder="Phone Number" required>
                     </label>
                </div>
        </div>
        <div class="right">
            <h3>
                Credit card Registration
            </h3>
                Accepted Card
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg" alt="master" width="10%">
                <img src="https://logos-marques.com/wp-content/uploads/2021/07/VISA-logo.png" alt="visa" width="15%" height="50%">
                <br></br>
                Card owner Name
                <input type="text"  placeholder="Enter card owner Name" name="name_card" required>
                Credit card number
                <input type="text" placeholder="Enter card Number" name="number_card" required>
                Exp Month
                <label id="zip">
                    <select name="month" required>
                        <option>Choose month...</option>
                        <option>January</option>
                        <option>february</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                </label>
                    <div id="zip">
                        <label>
                            EXP year
                            <select name="year" required>
                                <option>Choose year...</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                            </select>
                        </label>
                        <label>
                            CVV
                            <input type="number" name="cvv" placeholder="cvv" required>
                         </label>
                    </div>
                    <input type="submit" value="Send the registration request..." name="submit">
                   </div>
                </div>
            </form>
        </div>
    </div>
</header>    
</body>
</html>