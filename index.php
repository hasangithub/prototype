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
                                <th>ID</th>
                                <th>Vehicle ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Initial Weight</th>
                                <th>Tare Weight</th>
                                <th>Net Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ABC123</td>
                                <td>2024-09-13</td>
                                <td>08:30:00</td>
                                <td>10000.00</td>
                                <td>2000.00</td>
                                <td>8000.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>XYZ456</td>
                                <td>2024-09-13</td>
                                <td>09:00:00</td>
                                <td>12000.00</td>
                                <td>2500.00</td>
                                <td>9500.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>LMN789</td>
                                <td>2024-09-13</td>
                                <td>10:15:00</td>
                                <td>11000.00</td>
                                <td>2200.00</td>
                                <td>8800.00</td>
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
