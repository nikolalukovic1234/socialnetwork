<?php
include('inc/header.php');
?>

<?php if (isset($_SESSION['email'])): ?>
    <?php create_post(); ?>

    <br>

    <form method="POST">
        <h3>Create new post</h3>
        <textarea name="post_content" cols="60" rows="10" placeholder="Post content..."></textarea>
        <input type="submit" value="Post" name="submit">
    </form>

    <div>
        <?php display_message(); ?>
    </div>

    <hr>

    <div class="posts">
        <?php fetch_all_posts(); ?>
    </div>

    <script src="js/scripts.js"></script>

<?php else: ?>

    <div class="homepage">

        <h1>Welcome to Nikola Social Network</h1>
        <p>Ovo je moj prvi projekat u kom sam koristio programske jezike "php", i "java script". Pokusao sam da napravim stofunkcionalniji sajt nalik drustvenoj mrezi. Uzivajte! </p>

        <h2>Click <a href="login.php">here</a> to login!</h2>

        <img src="css/img/social.jpg" alt="">

    </div>

<?php endif; ?>

<?php include('inc/footer.php'); ?>