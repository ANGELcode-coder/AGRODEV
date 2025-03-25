<?php
 include("../Includes/db.php");
 session_start();
     $sessphonenumber = $_SESSION['phonenumber'];
     $sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
     $run_query = mysqli_query($con, $sql);
     while ($row = mysqli_fetch_array($run_query)) {
     $name = $row['farmer_name'];
     $phone = $row['farmer_phone'];
     $address = $row['farmer_address'];
     $pan = $row['farmer_pan'];
     $bank = $row['farmer_bank'];
     $state = $row['farmer_state'];
     $district = $row['farmer_district'];
 }


?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/FarmerDashboard.css">
    <style>
        body {
    font-family: 'Cormorant Infant', serif;
    background: url('https://source.unsplash.com/1600x900/?farm,agriculture') no-repeat center center/cover;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container-fluid {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    width: 50%;
}

h1 {
    color: #4CAF50;
    font-size: 2.5rem;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
}

.form-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
}

.row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.label {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2E7D32;
    width: 40%;
    text-align: left;
}

.value {
    color: #2E7D32;
    width: 55%;
    font-size: 1rem;
    background #f9f9f9;
    padding: 8px;
    border-radius: 8px;
    border: 1px solid #4CAF50;
    text-align: left;

}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    font-size: 1.2rem;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease-in-out;
    border-radius: 10px;
    width: 80%;
    margin-top: 15px;
}

input[type="submit"]:hover {
    background-color: #2E7D32;
}

    </style>
</head>

<body>

    <div class="container-fluid">
        <h1>FARMER'S PROFILE</h1>
        <form action="EditProfile.php" method="post">
            <div class="form-container">
                <div class="row">
                    <div class="label">Name:</div>
                    <div class="value"><?php echo $name; ?></div>
                </div>
                <div class="row">
                    <div class="label">Phone Number:</div>
                    <div class="value"><?php echo $phone; ?></div>
                </div>
                <div class="row">
                    <div class="label">Address:</div>
                    <div class="value"><?php echo $address; ?></div>
                </div>
                <div class="row">
                    <div class="label">State:</div>
                    <div class="value"><?php echo $state; ?></div>
                </div>
                <div class="row">
                    <div class="label">District:</div>
                    <div class="value"><?php echo $district; ?></div>
                </div>
                <div class="row">
                    <div class="label">Pan Number:</div>
                    <div class="value"><?php echo $pan; ?></div>
                </div>
                <div class="row">
                    <div class="label">Account Number:</div>
                    <div class="value"><?php echo $bank; ?></div>
                </div>
            </div>
            <input type="submit" name="editProf" value="Edit Profile">
        </form>
    </div>

</body>

</html>
