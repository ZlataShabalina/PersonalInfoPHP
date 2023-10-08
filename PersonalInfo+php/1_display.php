<!DOCTYPE html>
<head>
<title>Display</title>
<style>
h1{
            color: rgb(196, 97, 245);
            width: 90%;
            max-width: 10000px;
            font-size: 30px;
            font-family: 'Kaushan Script', cursive;
        }
a{
    color: rgb(196, 97, 245);
            width: 90%;
            max-width: 10000px;
            font-size: 20px;
            font-family: 'Kaushan Script', cursive;
}
body {background-color: rgb(119, 242, 181);
    margin-left: auto; 
        margin-right: auto;
        color: black;
            width: 90%;
            max-width: 10000px;
            font-size: 20px;
            font-family: 'Kaushan Script', cursive}
 </style>
</head>
 <body>
 <h1>Summary of all the given data</h1>
<body>

First name is <?php echo $_GET["fname"]; ?><br>
Last name is <?php echo $_GET["lname"]; ?><br>
Email is <?php echo $_GET["email"]; ?><br>
Employee's job is <?php echo $_GET["job"]; ?><br>
Employee's gross salary is <?php echo $_GET["gross_salary"]; ?> $<br>
Employee's tax rate is <?php echo $_GET["tax"]; ?> %<br>
<?php $taxPaid = $_GET["gross_salary"] * ($_GET["tax"] / 100);?>
<?php $netSalary = $_GET["gross_salary"] - $taxPaid;?>
Employee's net salary is <?php echo $netSalary; ?> $<br>
As a tax <?php echo $_GET["fname"]; ?> has paid <?php echo $taxPaid; ?> $<br>

<a href="1_form.html">GO BACK</a>

</body>
</html>