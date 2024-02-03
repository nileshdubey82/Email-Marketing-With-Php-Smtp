<?php
include_once('header.php');
include_once('leftbar.php');

?>

<div class="container mt-5">
    <form action="sendmail.php" method="POST" target="_blank">
        <div class="form-group">
            <label for="recipient">Recipient:</label>
            <input type="email" class="form-control" id="recipient" name="recipient">
        </div>
        <br>
fdf
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>
        <br>
        <div class="form-group">
            <label for="ckeditor">Message (CKEditor):</label>
            <textarea class="form-control" id="ckeditor" name="message" rows="4"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="attach_file">File:</label>
            <input type="file" class="form-control" id="attach_file" name="attach_file">
        </div>
        <br>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Send Email</button>
    </form>
</div>

</div>
<script>
    ClassicEditor
        .create(document.querySelector('#ckeditor'))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
include_once('footer.php');


?>