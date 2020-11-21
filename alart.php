<?php if (isset($_SESSION['message'])) : ?>
    <div class="alart">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>