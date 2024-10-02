<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Buyer</title>
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
                    <h1 class="h2">Create Buyer</h1>
                </div>
                <div class="content">
                <main class="container mt-4">
                <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="creditLimit" class="form-label">Credit Limit</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="creditLimit" name="creditLimit" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="serviceOut" class="form-label">Service Out</label>
                    <select class="form-select" id="serviceOut" name="serviceOut" required>
                        <option value="">Choose...</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="address1" class="form-label">Address 1</label>
                <input type="text" class="form-control" id="address1" name="address1" required>
            </div>

            <div class="mb-3">
                <label for="address2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="address2" name="address2">
            </div>

            <div class="mb-3">
                <label for="phoneNo" class="form-label">Phone No</label>
                <input type="tel" class="form-control" id="phoneNo" name="phoneNo" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
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
