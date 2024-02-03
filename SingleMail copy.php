<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Marketing Dashboard</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./src/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

</head>

<body>
    <!-- Header -->
    <div id="header">
        <!-- <img src="logo.png" width="100px"> -->
        <h2>Email Marketing Dashboard</h2>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <a href="#">Dashboard</a>
        <a href="SingleMail.php">Single Mail</a>
        <a href="bulkmail.php">Bulk Mail</a>
        <a href="settings.php">Settings</a>
    </div>

    <!-- Content -->
    <div id="content">

        <div class="container mt-5">
            <form action="sendmail.php" method="post">
                <div class="form-group">
                    <label for="recipient">Recipient:</label>
                    <input type="email" class="form-control" id="recipient" name="recipient" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="ckeditor">Message (CKEditor):</label>
                    <textarea class="form-control" id="ckeditor" name="ckeditor" rows="4" required></textarea>
                </div>

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

</body>

</html>
