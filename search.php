<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <?php
    $conn = mysqli_connect("Localhost", "root", "", "seven");
    ?>
    <form action="search.php" method="post" id="form1">
        <input type="text" name="search_text" id="searchBox" oninput="search(this.value)">
    </form>
    <br>
<table>
    <?php
    $result = mysqli_query($conn,"select * from supplier");
    foreach($result as $row){
    ?>
    <tr>
        <td><?php echo $row['sup_id'] ?></td>
        <td><?php echo $row['company'] ?></td>
        <td><?php echo $row['tel'] ?></td>
    </tr>
    <?php
    }
    ?>

</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    function search(name){
        console.log(name);  
        fetchSearchData(name);
    }
    function fetchSearchData(name){
        fetch('search2.php', {
            method: 'POST',
            body: new URLSearchParams('name=' + name)
        })
        .then(res => res.text())
        .then(res => console.log(res))
        .catch(e => console.error('Error: ' + e))
    }
</script>
</body>
</html>