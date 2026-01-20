<?php
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";


echo "<h1>kateogrijas</h1>";

echo "<form autocomplete='off'>";
    echo "<input name='search_query' value = '$_GET[search_query]' />";
    echo "<button>Meklēt</button>";
echo "</form>";



$db = new Database($config["database"]);
$sql_query = "SELECT * FROM categories";

$params = [];

if (isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query .= " WHERE category_name LIKE :search";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}

$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";
$pdo = new PDO($dsn);


$statement = $pdo->prepare("SELECT * FROM categories");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["category_name"] . "</li>";
    }
echo "</ul>";

require ".views/categories.php";

?>