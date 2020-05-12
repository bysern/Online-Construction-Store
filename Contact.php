<?php
    include('includes/header.php');
    include('includes/form_process.php');

?>
<main>
    <section id="contact">
        <div class="container">
            <h1>Do not hesitate to contact us!</h1>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

                <input type="text" name="name" placeholder="Type your name" value="<?= $name ?>" autofocus>
                <span class="error"><?= $name_error ?></span>

                <input type="text" name="email" placeholder="Type your email" value="<?= $email ?>">
                <span class="error"><?= $email_error ?></span>


                <select name="country">
                    <option value="australia">Poland</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="subject">Subject</label>
                <textarea name="message" placeholder="Write something.." value="<?= $message ?>"
                    style="height:200px"></textarea>

                <input type="submit" value="Submit" name="submit">
                <div class="success"><?= $success; ?></div>
            </form>
        </div>
    </section>
</main>

<script src="scripts/script.js"></script>
</body>

</html>