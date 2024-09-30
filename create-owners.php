<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Owners</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Custom CSS -->
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container-fluid d-flex flex-column min-vh-100">
        <div class="row flex-grow-1">
            <?php include 'sidebar.php'; ?>

            <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Create Owner</h1>
                </div>
                <div class="content">
                <main class="container mt-4">
                <form>
                <div class="mb-3">
                    <label for="vehicle_id" class="form-label">Name</label>
                    <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" required>
                </div>

                <div class="mb-3">
                    <label for="initial_weight" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" required>
                </div>

                <div class="mb-3">
                    <label for="tare_weight" class="form-label">NIC</label>
                    <input type="number" class="form-control" id="tare_weight" name="tare_weight" required>
                </div>

                <div class="mb-3">
                    <label for="transaction_date" class="form-label">Address</label>
                    <input type="text" class="form-control" id="transaction_date" name="transaction_date" required>
                </div>

                <div class="mb-3">
                    <label for="transaction_date" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="transaction_date" name="transaction_date" required>
                </div>

                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </form>
        </main>
                </div>
            </main>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
