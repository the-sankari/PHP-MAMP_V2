<?php include 'header.php'?>
<?php include "create_book.php"?>
<div class="box1">
    <h2>All Books</h2>
    <button class="btn btn-primary" style="background-color: purple;border: none;" id="add_book_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD BOOK</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Publishing year</th>
            <th>Genre</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
$query = "Select * from books ";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed" . mysqli_error($connection));
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                 <tr>
                <td><?php echo htmlspecialchars($row['id']) ?></td>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
                <td><?php echo htmlspecialchars($row['author']); ?></td>
                <td><?php echo htmlspecialchars($row['publishing_year']); ?></td>
                <td><?php echo htmlspecialchars($row['genre']); ?></td>
                <td>
                    <a href="update_book.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-success">Update</a>

                </td>
                <td>
                <a href="delete_book.php?id=<?php echo htmlspecialchars($row['id']); ?>&&title=<?php echo htmlspecialchars($row['title']); ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                    <?php
}
}
?>
    </tbody>
</table>


    <!-- Modal -->
<form action="create_book.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD BOOKS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row g-3">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="form-group col-sm">
                <label for="publishing_year">Publishing year</label>
                <input type="text" name="publishing_year" id="publishing_year" class="form-control">
            </div>
            <div class="form-group col-sm">
                <label for="genre">Genre</label>
                <input type="text" name="genre" id="genre" class="form-control">
            </div>
            <div class="form-group">
                <label for="floatingTextarea2">Description</label>
            <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <!-- <input type="submit" class="btn btn-success" name="add_book" value="ADD" > -->
            <input type="submit" class="btn btn-success " id="show-message"  name="add_book" value="Add">
        </div>
    </div>
</div>
</div>
</form>

<!-- Toaster -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div  class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="./images/bell.svg" class="rounded me-2" alt="...">
      <strong class="me-auto">Last Action</strong>
      <!-- <small>11 mins ago</small> -->
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    <?php
if (isset($_GET['insert_msg'])) {?>
            <h6 class='text-success'> <?=$_GET['insert_msg']?></h6>
        <?php } else {
    echo "No action is taken";
}
;
?>
    <?php
if (isset($_GET['update_msg'])) {?>
            <h6 class='text-success'> <?=$_GET['update_msg']?></h6>
        <?php }
;
?>
    <?php
if (isset($_GET['delete_msg'])) {?>
            <h6 class='text-warning'> <?=$_GET['delete_msg']?></h6>
        <?php }
;
?>
    </div>
  </div>
</div>




<?php include 'footer.php'?>
