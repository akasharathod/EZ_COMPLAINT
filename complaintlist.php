<?php
require_once('connection.php');
$query="select * from registration";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ COMPLAINT | Complaint Registration</title>
    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>
<body>
<!-----------------------------------banner section----------------------------------------------------->

<section id="banner">
        <div class="container">
        <div class="row">
        <div class="col-md-6">
        <p class="promo-title" style="font-size:40px;font-family: times, serif;">Complaint Lists</p>
        <p style=" font-size:25px;font-family: times, serif;" class="text-justify">Latest complaint registered</p>
        </div>
        <div class="col-md-6 text-center">
        <img src="images/c2.jpg" class="img-fluid">
        </div>
        </div>
        </section>
<!--------------------------------------------------->
<div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="container">
    <table align = "center" border ="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="10"><h1 class="title text-center" style="font-family: times, serif;">Complaint Lists</h1></th>
        </tr>
        <tr>
            <th>id</th>
            <th>subject</th>
            <th>name</th>
            <th>email</th>
            <th>gender</th>
            <th>department</th>
            <th>priority</th>
            <th>service</th>
            <th>message</th>
        </tr>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>   
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['subject']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['department']; ?></td>
                    <td><?php echo $rows['priority']; ?></td>
                    <td><?php echo $rows['service']; ?></td>
                    <td><?php echo $rows['message']; ?></td>
                </tr>
        <?php
            }
        ?>
    </table>
        </div>
        </div>
        </div>
        </div>


<!-------------------footer section------------------>
<section>
    <div class="footer">
    <div class="container">
    <div class="row">
    <div class="col-md-4 footer-box">
    <p style="font-size:25px;font-family: times, serif;">We Always Fight For Your Wrights</p>
    <p class="fabout">We provide a platform where you can find the solutions for your query/complaints in India. Users can raise query and get free legal advice from the Best Authorities in India. Apart from being useful for users to file complaint and seeking legal advice, this website serves as an Universal complaints platform for Customers free of cost.Consult & get Best Solutions in India and get Free Legal Advice by Top Authorities in India at EZ COMPLAINT.</p>
    </div>
    <div class="col-md-4 footer-box">
      <p style="font-size:20px;font-family: times, serif;">CONTACT US</p>
      <p><i class="fa fa-map-marker"></i>Outer Ring Rd, near Marathalli, <span style="padding-left:50px;">Kaverappa Layout, Kadubeesanahalli, <span style="padding-left:50px;">Kadabeesanahalli, Bengaluru, <span style="padding-left:50px;">Karnataka 560103</p>
      <p><i class="fa fa-phone"></i> 080662 92121</p>
      <p><i class="fa fa-envelope"></i>ezcomplaint@gmail.com</p>
    </div>
    <div class="col-md-4 footer-box">
      <p style="font-size:20px;font-family: times, serif;">NAVIGATION LINKS</p>
        <a class="nav-link" href="home.html"><font color="white">Home </a>
        <a class="nav-link" href="authorities.html"><font color="white">Authorities</a>
        <a class="nav-link" href="complaintregistration.html"><font color="white">Complaint Registration</a>
        <a class="nav-link " href="contacts.html"><font color="white">Contacts</a>
    </div>	
    </div>
    </div>
    <hr>
    <p class="copyright">EZ COMPLAINT</p>
    </div>
    </section>

</body>
</html>