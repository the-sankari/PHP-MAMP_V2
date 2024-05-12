<?php include 'header.php'?>
<?php include 'create_short_url.php'?>
<!-- Form to input long URL and submit for shortening -->
<form action="index.php" method="POST">
    <div class="form-floating mb-3">
        <!-- Input field for long URL -->
        <input type="text" class="form-control" id="longUrl" name="longUrl" placeholder="Enter Long URL">
        <!-- Label for input field -->
        <label for="long-url">Enter Long URL</label>
    </div>
    <!-- Submit button to shorten URL -->
    <div class="form-group">
        <input type="submit" class="btn btn-secondary" id="show-message" name="submit" value="Shorten" >
    </div>
</form>


<?php
$query = 'SELECT * from url';
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Query failed!' . mysqli_error($conn));

} else {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <!-- Container to display shortened URL -->
            <div class="container">
            <div class="card text-center">
                <!-- Header for shortened URL -->
                <div class="card-header">
                    Shortened URL <span><?=htmlspecialchars($row['id'])?></span>
                </div>
                <!-- Body for shortened URL -->
                <div class="card-body">
                    <!-- Paragraph to display shortened URL -->
                    <p class="card-text"><?=htmlspecialchars($row['short_url'])?></p>
                    <!-- Button to go to shortened URL -->
                    <a href='<?=htmlspecialchars($row['short_url'])?>' class='btn btn-primary'>Go to site</a>
                </div>
                <!-- Footer for shortened URL -->
                <div class="card-footer text-body-secondary">
                    <!-- Date and time when shortened URL was created -->
                    <span>
                        Created at:
                    </span>
                    <span>


                        <?php $date = date_create($row['created_at']);
        echo date_format($date, 'g:i, Y-m-d');?>
                    </span>
                </div>
            </div>
            </div>
            <?php

    }
}
?>




<!-- Container for toast notification -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
<!-- Toast notification -->
<div  class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <!-- Header for toast notification -->
    <div class="toast-header">
    <!-- Icon for toast notification -->
    <img src="./images/bell.svg" class="rounded me-2" alt="...">
    <!-- Title for toast notification -->
    <strong class="me-auto">Last Action</strong>
    <!-- Button to close toast notification -->
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <!-- Body for toast notification -->
    <div class="toast-body">
        <p>note</p>
    </div>
</div>
</div>

<?php include 'footer.php'?>