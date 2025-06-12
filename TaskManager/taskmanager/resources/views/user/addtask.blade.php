<!DOCTYPE html>
<html lang="en" data-bs-theme="white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Create New Task</title>
</head>
<body>
    <div class="container d-flex justify-content-center" style="margin-top: 200px;">
        <div class="p-4 border border-1 rounded-5 shadow bg-white text-black" style="border-style: ridge; width: 500px;">
            <h1 class='text-center mb-4' style="text-shadow: 0 2px 8px rgba(255, 255, 255, 0.4);">Add New Task</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="header" class="form-label">Header</label>
                    <input type="text" class="form-control" id="header" name="header" required>

                    <label for="givenTo" class="form-label mt-3">Assigned To</label>
                    <input type="text" class="form-control" id="givenTo" name="givenTo" required>

                    <label for="givenBy" class="form-label mt-3">Assigned By</label>
                    <input type="text" class="form-control" id="givenBy" name="givenBy" required>

                    <label for="completeBy" class="form-label mt-3">Complete By</label>
                    <input type="date" class="form-control" id="completeBy" name="completeBy" required>
                </div>
                <div class="text-end mt-3">
                    <button type="submit" class="btn border border-1 rounded-3 shadow bg-white text-black" style="border-style: ridge;text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Add Task</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
