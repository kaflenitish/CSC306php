<!DOCTYPE html>
<html>
<body>
<head>
<title>Week 7 Project</title>
//this sets the title of the page

//creating border style
<style type="text/css">
div.box{
width: 960px;
height: 610px;
margin:50px auto;
left: 30%;
position: absolute;
}
div.border{
width: 308px;
margin-top: 35px;
float:left;
border-radius: 5px;
border:2px solid #999900;
padding:0px 50px 20px;
}
</style>
</head>

<body>
<body style="background-color:bisque;">     //setting background color
<div class="box">
<div class="border">

//creating border to the title
<h1 style=""><p style="border:3px; border-style:solid; border-color:#FF0000; padding: 1em;"><a href="#" class="border-button">The Pizza Palace </a></h1>

//creating form
<form action="#" method="post">
<label>Name &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name"><br/><br/>
<label>Phone Number : <input type="text" name="number"></form><br/><br/>

//creating item list
Items :<br/><br/><p style="border:3px; border-style:dotted; border-color:#228B22; padding: 1em;">
&nbsp;&nbsp;&nbsp;<input type="checkbox" name="values[]" value="Cheese Pizza"><label> Cheese Pizza - 12.99$</label><br/>
&nbsp;&nbsp;&nbsp;<input type="checkbox" name="values[]" value="Buffalo Wings"><label>Buffalo Wings - 8.99$</label><br/>
&nbsp;&nbsp;&nbsp;<input type="checkbox" name="values[]" value="Cheese Burger"><label>Cheese Burger - 7.99$</label><br/><br/>
<label> Tax : 6%</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<input type="submit" name="submit" value="Order"/></label>
</form>

</div>
</div>

//PHP Starts Here
<?php
    if(isset($_POST['submit'])){
        //initializing sum as 0
        $sum = 0;
        //condition starts here
        if(isset($_POST['values']) && isset($_POST['name']) && isset($_POST['number'])) {
            echo "<b>Name : ".$_POST['name']."</b><br/><br/>";
            echo "<b>Contact Number : ".$_POST['number']."</b><br/><br/>";
            echo "<br/>Items Selected: ";
            foreach($_POST['values'] as $value) {
                echo " ".$value;
                if($value == 'Cheese Pizza'){
                    $sum += 12.99;
                }
                if($value == 'Buffalo Wings'){
                    $sum += 8.99;
                }
                if($value == 'Cheese Burger'){
                    $sum += 7.99;
                }
            }
            
            //prints this after the order has been selected
            echo '<br/><br/>Order Before Tax = '."$".$sum;
            $Tax =($sum * 1.06)-$sum;
            echo '<br/><br/>Tax = '."$".$Tax;
            $sum += $Tax;
            echo '<br/><br/>Order After Tax = '."$".$sum;
        }
        else{
            echo "<b>Please Select An Order! </b>"; //prints this if no order is selected
        }
    }
    ?>
</body>
</html>
