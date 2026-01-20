<?php
echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["category_name"] . "</li>";
    }
echo "</ul>";

