
<?php

include('db.php');
include('header.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * from posts WHERE title='$keyword' OR description ='$keyword' OR slug='$keyword' OR created_at = '$keyword' ");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

        <style>
        .keyword {
          padding: 6px;
          margin-top: 8px;
          background: #ddd;
          font-size: 17px;
          border: none;
          cursor: pointer;
            }

            .button{
              padding: 6px;
              margin-top: 8px;
              background: #ddd;
              font-size: 17px;
              border: none;
              cursor: pointer;
            }

        </style>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
<br>
<br>
<br>

    <form action="search.php" method="get">

        <input type="text" class ="keyword" name="keyword" placeholder="Keyword..." value="<?= $_GET['keyword']; ?>">
        <button class ="button" type="submit">Search</button>
    </form>
</center>
<br>
<br>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    <table border="1">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Created At</th>

        </tr>
        <?php foreach ($results as $result) : 

             ?>
            <tr>
                <td><?php echo "<img src=images/".$result['image'].' width=200px height="200px">'; ?></td>
                <td><?= $result['title']; ?></td>
                <td><?= $result['description']; ?></td>
                <td><?= $result['slug']; ?></td>
                <td><?= $result['created_at']; ?></td>


            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>