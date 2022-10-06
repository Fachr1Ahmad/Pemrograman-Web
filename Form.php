<!DOCTYPE html>
<html long="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widh, initial-scale=1.0">
    <title>Input Data</title>
    <style type="text/css">
        body {
            background-color : thistle;
        }
        .box1{
            width : 30vw;
            height : 30vh;
            background-color: MistyRose;
            border: 1px solid white;
            margin: 1px;
            padding: 1px;
            border-radius: 5px;
        }
        #box2 {
            width : 25vw;
            height : 12vh;
            background-color: LightCoral;
            border: 1px solid white;
            margin: 1px;
            padding: 10px;
            border-radius: 5px;
            font-family: 'Times New Roman';
        }
        .box3 {
            background-color: slategray;
        }
    </style>    
</head>
<body>
    <form action="Data.php" method="get"><center>
        
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h2 id="box2"><img src="https://i.pinimg.com/564x/f9/61/30/f961306179ce606db7bedb1d731436b6.jpg" width="50" height="50" align="center"><center><b>FORM DATA</b></center></h2>
        <div class="box1">
        <br><br>
        <label for="aData"><b>Nama<b></label>
        <br>
        <input class="box3" type= "text" name="aData">
        <br>
        <label for = "bData".
        ><b>NIM<b></label>
        <br>
        <input class="box3" type= "text" name="bData">
        <br>
        <input type= "Submit" name="Submit" value="Submit">
    </center></form></div>

</body>
</html>