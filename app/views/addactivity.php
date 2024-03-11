<form autocomplete="off" action="<?php echo BASE_URL ?>/activity/insertactivity" method="POST">
    <?php
        if(isset($msg)){
            echo'<span style="color:blue;font-weight:bold;">'.$msg.'</span>';
        }
    ?>
    <table>
        <tr>
            <td>Ten hoat dong</td>
            <td><input type="text" required="1" name="title"></td>
        </tr>
        <tr>
            <td>Thoi gian</td>
            <td><input type="text" required="1" name="time"></td>
        </tr>
        <tr>
            <td>Dia diem</td>
            <td><input type="text" required="1" name="place"></td>
        </tr>
        <tr>
            <td><input type="submit" name="addactivity" value="Insert"></td>
        </tr>
    </table>
</form>