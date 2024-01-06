<?php
// Process form submission
if (isset($_POST['submit'])) {
    // Perform form processing here

    // After processing, set a flag to indicate successful form submission
    $formSubmitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Modal Example</title>

    <!-- Add Bootstrap CSS and JS links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- Form -->
                <form action="" method="POST">
                    <!-- Your form fields go here -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <!-- Add more form fields as needed -->

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- Modal -->
                <?php if (isset($formSubmitted) && $formSubmitted): ?>
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                    aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Form Submitted Successfully</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Your form has been submitted successfully!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script to show the modal -->
                <script>
                $(document).ready(function() {
                    $('#successModal').modal('show');
                });
                </script>
                <?php endif; ?>

            </div>
        </div>
    </div>

</body>

</html>