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
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="content">
                <div class="row"><a href="create-weighbridge.php"><button class="btn btn-primary">Create</button></a></div>
                <main class="container mt-4">
                <table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>NIC</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>1990-01-15</td>
            <td>NIC123456</td>
            <td>123 Main St, Springfield</td>
            <td>+1 555-1234</td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>1985-05-22</td>
            <td>NIC789012</td>
            <td>456 Oak St, Rivertown</td>
            <td>+1 555-5678</td>
        </tr>
        <tr>
            <td>Nylah Patel</td>
            <td>1992-11-30</td>
            <td>NIC345678</td>
            <td>789 Elm St, Lakeside</td>
            <td>+1 555-9101</td>
        </tr>
    </tbody>
</table>

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
