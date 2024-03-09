<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_book.css">
    <title>Add Book</title>
</head>
<body>
    <div class="content">
        <header class="header">
            <a href="index.php" class="logo">BACK</a>
        </header>
    </div>

    <div class="label">
        <label for="">ADD BOOKS</label>
    </div>

    <div class="form-container">
        
        <form action="add_book.php" method="post">
            

            <label for="bookTitle">Title:</label>
            <input type="text" id="bookTitle" name="bookTitle" placeholder="Enter book title" required><br>

            <label for="authorName">Author Name:</label>
            <input type="text" id="authorName" name="authorName" placeholder="Enter author name" required><br>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" placeholder="Enter category" required><br>

            <label for="publishedDate">Published Date:</label>
            <input type="text" id="publishedDate" name="publishedDate" placeholder="Enter published date" required><br>

            
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>