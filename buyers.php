<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyers</title>
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
                <div class="row"><a href="create-buyer.php"><button class="btn btn-primary">Create</button></a></div>
                <main class="container mt-4">
                <table class="table table-striped">
                <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credit Limit</th>
                <th>Service Out</th>
                <th>Address 1</th>
                <th>Address 2</th>
                <th>Phone No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>C001</td>
                <td>John Smith</td>
                <td>$5,000</td>
                <td>Yes</td>
                <td>123 Main St</td>
                <td>Apt 4B</td>
                <td>(555) 123-4567</td>
            </tr>
            <tr>
                <td>C002</td>
                <td>Emma Johnson</td>
                <td>$7,500</td>
                <td>No</td>
                <td>456 Oak Ave</td>
                <td></td>
                <td>(555) 987-6543</td>
            </tr>
            <tr>
                <td>C003</td>
                <td>Michael Brown</td>
                <td>$3,000</td>
                <td>Yes</td>
                <td>789 Pine Rd</td>
                <td>Suite 101</td>
                <td>(555) 246-8135</td>
            </tr>
            <tr>
                <td>C004</td>
                <td>Sarah Davis</td>
                <td>$10,000</td>
                <td>No</td>
                <td>321 Elm St</td>
                <td></td>
                <td>(555) 369-2580</td>
            </tr>
            <tr>
                <td>C005</td>
                <td>David Wilson</td>
                <td>$2,500</td>
                <td>Yes</td>
                <td>654 Maple Dr</td>
                <td>Unit 7</td>
                <td>(555) 741-9630</td>
            </tr>
            <tr>
                <td>C006</td>
                <td>Lisa Anderson</td>
                <td>$8,000</td>
                <td>No</td>
                <td>987 Cedar Ln</td>
                <td></td>
                <td>(555) 852-9630</td>
            </tr>
            <tr>
                <td>C007</td>
                <td>Robert Taylor</td>
                <td>$4,500</td>
                <td>Yes</td>
                <td>147 Birch Blvd</td>
                <td>Apt 12C</td>
                <td>(555) 963-7410</td>
            </tr>
            <tr>
                <td>C008</td>
                <td>Jennifer Martinez</td>
                <td>$6,000</td>
                <td>No</td>
                <td>258 Willow Way</td>
                <td></td>
                <td>(555) 159-7530</td>
            </tr>
            <tr>
                <td>C009</td>
                <td>William Lee</td>
                <td>$3,500</td>
                <td>Yes</td>
                <td>369 Spruce St</td>
                <td>Suite 202</td>
                <td>(555) 357-1590</td>
            </tr>
            <tr>
                <td>C010</td>
                <td>Patricia Clark</td>
                <td>$9,000</td>
                <td>No</td>
                <td>753 Ash Ave</td>
                <td></td>
                <td>(555) 951-7532</td>
            </tr>
            <tr>
                <td>C011</td>
                <td>Thomas Rodriguez</td>
                <td>$5,500</td>
                <td>Yes</td>
                <td>159 Poplar Pl</td>
                <td>Unit 3</td>
                <td>(555) 753-9514</td>
            </tr>
            <tr>
                <td>C012</td>
                <td>Nancy Walker</td>
                <td>$7,000</td>
                <td>No</td>
                <td>357 Sycamore Rd</td>
                <td></td>
                <td>(555) 159-3570</td>
            </tr>
            <tr>
                <td>C013</td>
                <td>Daniel Hall</td>
                <td>$4,000</td>
                <td>Yes</td>
                <td>951 Chestnut Ct</td>
                <td>Apt 8D</td>
                <td>(555) 753-1597</td>
            </tr>
            <tr>
                <td>C014</td>
                <td>Karen Young</td>
                <td>$8,500</td>
                <td>No</td>
                <td>753 Walnut Dr</td>
                <td></td>
                <td>(555) 357-9513</td>
            </tr>
            <tr>
                <td>C015</td>
                <td>Christopher Allen</td>
                <td>$6,500</td>
                <td>Yes</td>
                <td>159 Hickory Ln</td>
                <td>Suite 303</td>
                <td>(555) 951-3579</td>
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
