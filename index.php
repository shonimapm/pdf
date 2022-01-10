<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF using PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            Add New Users
        </div>
        <div class="body">
            <form action="makepdf.php" method="post">
                <input type="text" name="usname" placeholder="Name" required>
                <input type="text" name="dob" placeholder="DOB" required>
                <input type="text" name="job" placeholder="Current Job" required>
                <input type="submit" value="Generate Pdf">
            </form>
        </div>
        
    </div>
</body>
</html>