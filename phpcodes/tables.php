

<html>
<head>
    <title>Book List</title>
    <style>
        body {
        text-align: center}

        table {

            border-collapse: collapse;
            width: 100%;
            font-family: Helvetica;
        }

        td, th {
            border: 5px solid  #cedadb;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .button {
            padding: 10px 40px 10px 40px;
            background-color: #757588;
            color: white;
            font-size: 15px;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        h1{

            padding-top:10px;
            text-align:center;
            font-size:25px;
           font-family: Helvetica;
        }
    </style>
</head>
<body>
<h1> Here is your contact list</h1>
<table border= "5">
    <thead>
    <th>Fullname </th>
    <th> Relation</th>
    <th>Contact Number</th>
    <th>E-mail</th>
    </thead>
    <tbody>
    <?php
    include_once 'dbconnect.php';
    $sql="SELECT * FROM contacts";
    $result=$conn->query($sql);
    if($result->num_rows>0){

 for($i=0;$i<$result->num_rows;$i++){
  $row=$result->fetch_assoc();
 ?>
    <tr>

        <td> <?php echo $row["fullname"]?></td>
        <td> <?php echo $row["relation"]?></td>
        <td> <?php echo $row["number"]?></td>
        <td> <?php echo $row["email"]?></td>

     </tr>
     <?php
}}else{
        echo"0 results";
    }
    $conn->close();
        ?>
    </tbody>
    </tbody>
</table>
<br><br>
<input type="Submit" value="Go back" onclick="window.location.href='upload.html'" class="button">
</body>
</html>

