<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM Clinic';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
//print_r($products); // this is to get the data as an array!
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Dental Clinic Manager</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Dental Clinic Manager</h1></header>
<main>
    <h1> Dental Clinic List</h1>
    <section>
        <!-- display a table of products -->
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>telephone</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($clinics as $clinic) : ?>
            <tr>
                <td><?php echo $clinic['productCode']; ?></td>
                <td><?php echo $clinic['productName']; ?></td>
                <td class="right"><?php echo $clinic['listPrice']; ?></td>
                <td><?php echo $clinic['description']; ?></td>
                <td><?php echo $clinic['category']; ?></td>
                <td><form action="delete_clinic.php" method="post">
                    <input type="hidden" name="Clinic_Id"
                           value="<?php echo $clinic['productID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Dental Clinic  Manager, Inc.</p>
</footer>
</body>
</html>

