<?php
include 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $src = $_POST['src'];
    $alt = $_POST['alt'];
    $author = $_POST['author'];
    $sql = "INSERT INTO images (src, alt, author) VALUES (:src, :alt, :author)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':src', $src);
    $stmt->bindParam(':alt', $alt);
    $stmt->bindParam(':author', $author);
    $stmt->execute();
    
    header("Location: index.html");
}
?>

