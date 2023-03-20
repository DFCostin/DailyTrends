<?php ob_start() ?>

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
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Image</th>
                    <th scope="col">Source</th>
                    <th scope="col">Publisher</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 0;
                foreach ( $_SESSION['getFeeds'] as $v => $k) {
                    echo  '<tr> <td>' . $n . '</td>';
                    $n++;
                    foreach ($k as $r) { ?>
                        <td><?php echo $r; ?></td>
                <?php }
                } ?>
                </tr>
            </tbody>
        </table>
    </div>
<?php } ?>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php'; ?>