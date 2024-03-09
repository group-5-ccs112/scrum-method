<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hotel Management System</title>
</head>
<body>


<style>
    h1{
    text-align: center;
    color: #333333;
    }

    button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: lightblue;
}
ul {
    list-style: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

.container{
    text-align: center;
}

</style>
<div class="container">
    <h1>ADDING GUEST</h1>
    <div id="studentList"></div>
    <button id="addStudentBtn">Add Guest</button>

    
    <div id="addStudentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add Guest</h2>
            <form id="addStudentForm">
                
                <label for="name">Name:</label>
                <input type="text" id="name" required>
                
                <label for="studentId">Guest Id:</label>
                <input type="text" id="studentId" required>

                <label for="age">Age:</label>
                <input type="text" id="age" required>

                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" required>

                <button type="submit">Add</button>
                
            </form>
        </div>
    </div>

    
    <div id="editStudentModal" class="modal">
        
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script.js"></script>

</body>
</html>
