<h1>kateogrijas</h1>

<form autocomplete='off'>
    <input name='search_query' value = <?php '$_GET[search_query]'?>>
    <button>Meklēt</button>
</form>

<ul>
    <?php foreach($posts as $post) { ?>
        <li> <?php $post["category_name"] ?> </li>
    <?php } ?>
</ul>

?>
