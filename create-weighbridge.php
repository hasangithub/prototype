<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                    <h1 class="h2">Weighbridge Entry Test</h1>
                </div>
                <div class="content">
                <main class="container mt-4">
                <form>
                <div class="mb-3">
                    <label for="vehicle_id" class="form-label">Vehicle ID</label>
                    <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" required>
                </div>

                <div class="mb-3">
                    <label for="initial_weight" class="form-label">Initial Weight</label>
                    <input type="number" step="0.01" class="form-control" id="initial_weight" name="initial_weight" required>
                </div>

                <div class="mb-3">
                    <label for="tare_weight" class="form-label">Tare Weight</label>
                    <input type="number" step="0.01" class="form-control" id="tare_weight" name="tare_weight" required>
                </div>

                <div class="mb-3">
                    <label for="transaction_date" class="form-label">Transaction Date</label>
                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" required>
                </div>

                <div class="mb-3">
                    <label for="buyer" class="form-label">Buyer</label>
                    <select id="buyer" name="buyer" class="form-select" required>
                        <option value="" disabled selected>Select Buyer</option>
                        <option value="buyer1">Buyer 1</option>
                        <option value="buyer2">Buyer 2</option>
                        <option value="buyer3">Buyer 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="owner" class="form-label">Owner</label>
                    <select id="owner" name="owner" class="form-select" required>
                        <option value="" disabled selected>Select Owner</option>
                        <option value="owner1">Owner 1</option>
                        <option value="owner2">Owner 2</option>
                        <option value="owner3">Owner 3</option>
                    </select>
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
