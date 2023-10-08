<!DOCTYPE html>
<head>
<title>Display</title>
<style>
h1{
            color: rgb(125, 66, 82);
            width: 90%;
            max-width: 10000px;
            font-size: 30px;
            font-family: 'Kaushan Script', cursive;
        }
body {background-color: rgb(221, 129, 167);
    margin-left: auto; 
        margin-right: auto;
        color: whitesmoke;
            width: 90%;
            max-width: 10000px;
            font-size: 20px;
            font-family: 'Kaushan Script', cursive}
a{
    color: rgb(125, 66, 82);
            width: 90%;
            max-width: 10000px;
            font-size: 20px;
            font-family: 'Kaushan Script', cursive;
}
 </style>
</head>
 <body>
 <h1>General information about <?php echo $_GET["fname"]; ?></h1>
<body>

First name: <?php echo $_GET["fname"]; ?><br>
Last name: <?php echo $_GET["lname"]; ?><br>
Phone number: <?php echo $_GET["phone"]; ?><br>
Email: <?php echo $_GET["email"]; ?><br>
Job: <?php echo $_GET["job"]; ?><br>
Hobby: <?php echo $_GET["hobby"]; ?><br>
Comments: <?php echo $_GET["comment1"]; ?>  <?php echo $_GET["comment2"]; ?>  <?php echo $_GET["comment3"]; ?><br>
<a href="2_form.html">GO BACK</a>
</body>
</html>