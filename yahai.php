<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yahai</title>
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
                <div class="row"><a href="create-yahai.php"><button class="btn btn-primary">Create</button></a></div>
                <main class="container mt-4">
                <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Yahai</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Kaze</td></tr>
            <tr><td>2</td><td>Haku</td></tr>
            <tr><td>3</td><td>Chun</td></tr>
            <tr><td>4</td><td>Hatsu</td></tr>
            <tr><td>5</td><td>Nan</td></tr>
            <tr><td>6</td><td>Pei</td></tr>
            <tr><td>7</td><td>Ton</td></tr>
            <tr><td>8</td><td>Shaa</td></tr>
            <tr><td>9</td><td>Haku</td></tr>
            <tr><td>10</td><td>Chun</td></tr>
            <tr><td>11</td><td>Hatsu</td></tr>
            <tr><td>12</td><td>Nan</td></tr>
            <tr><td>13</td><td>Pei</td></tr>
            <tr><td>14</td><td>Ton</td></tr>
            <tr><td>15</td><td>Shaa</td></tr>
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
