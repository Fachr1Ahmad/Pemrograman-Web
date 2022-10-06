<!DOCTYPE html>
<html long="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widh, initial-scale=1.0">
    <title>Data Anda</title>
    <style type="text/css">
        body {
            background-color : thistle;
        }
        .box1 {
            width : 30vw;
            height : 30vh;
            background-color: MistyRose;
            border: 1px solid white;
            margin: 1px;
            padding: 1px;
            border-radius: 5px;
            font-size: 150%;
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
    </style>    
</head>
<body>
    <?php
    if (isset ($_GET['Submit'])){
        $aData = $_GET['aData'];
        $bData = $_GET['bData'];
    }
    ?>
     <center><br><br><br><br><h2 id=box2><center><br>DATA DIRI<center></h2></center>
     <center><div class = "box1"><center><br><br><br><table>
        <tr>
            <td><b>Nama <b></td>
            <td>:</td>
            <td><?php echo $aData; ?></td>
        </tr>
    </div><center>
        <tr>
            <td><b>NIM<b></td>
            <td>:</td>
            <td><?php echo $bData; ?></td>
        </tr>
 
    </center></table></div> 
</body>
</html>