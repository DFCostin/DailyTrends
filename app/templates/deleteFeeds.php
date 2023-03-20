<?php ob_start() ?>

<div class="col-12  mt-4 bg-warning rounded text-center" id="mensaje">
    <p> Be careful when clicking on a row in the table because clicking on it will delete it from the system. <br> Caution!!!! <i class="far fa-times-circle" ></i> </p>
</div><br>
<?php if (empty( $_SESSION['getFeeds'])) { ?>
    <div class="text-center">
        <h3>Sorry nothing to show</h3>
    </div>
<?php } else {  ?>
    <div class="text-center">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titel</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($j = 0; $j < count($_SESSION['getFeeds']); $j++) { ?>
                    <tr Titel="<?php echo $_SESSION['getFeeds'][$j][0]; ?>" img="<?php echo $_SESSION['getFeeds'][$j][4]; ?>">
                        <td><?php echo $j; ?></td>
                        <td><?php echo $_SESSION['getFeeds'][$j][0]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> <br><br>
<?php } ?>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php'; ?>