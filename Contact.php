<?php
    include('includes/header.php');
?>
    <main>
        <section>
            <div class="container">
                <h1>Do not hesitate to contact us!</h1>
                <form action="#">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Type your name">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Type your last name">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="australia">Poland</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:200px"></textarea>

                    <input type="submit" value="Submit">

                </form>
            </div>
        </section>
    </main>

    <script src="scripts/script.js"></script>
</body>

</html>