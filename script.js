$(document).ready(function () {
    
    var students = [
        { id: 1, name: 'MARK', studentId: 'A1', age: 20 , contact:'09511640557' },
        { id: 2, name: 'ADRIAN', studentId: 'B2', age: 22, contact:'09511640557' }
        
    ];

   
    function displayStudents() {
        var studentListHtml = '<ul>';
        students.forEach(function (student) {
            studentListHtml += `<li>${student.name} (ID: ${student.studentId}, Age: ${student.age}, Contact: ${student.contact})  
                                <button class="edit" data-id="${student.id}">Edit</button>
                                <button class="delete" data-id="${student.id}">Delete</button></li>`;
        });
        studentListHtml += '</ul>';
        $('#studentList').html(studentListHtml);

        
        $('.edit').on('click', function () {
            var studentId = $(this).data('id');
            openEditModal(studentId);
        });

        $('.delete').on('click', function () {
            var studentId = $(this).data('id');
            confirmDelete(studentId);
        });
    }

    
    $('#addStudentBtn').on('click', function () {
        $('#addStudentModal').css('display', 'block');
    });

    
    $('.close').on('click', function () {
        $('.modal').css('display', 'none');
    });

    
    $('#addStudentForm').submit(function (e) {
        e.preventDefault();

        var name = $('#name').val();
        var studentId = $('#studentId').val();
        var age = $('#age').val();
        var contact = $('#contact').val();

        
        var newStudent = { id: students.length + 1, name: name, studentId: studentId, age: age, contact: contact };
        students.push(newStudent);

        
        displayStudents();

        
        $('#addStudentModal').css('display', 'none');

        
        $('#addStudentForm')[0].reset();
    });

    
    function openEditModal(studentId) {
        
        var student = students.find(s => s.id === studentId);

        
        var editFormHtml = `<h2>Edit Customer</h2>
                            <form id="editStudentForm">
                                <label for="editName">Name:</label>
                                <input type="text" id="editName" value="${student.name}" required>
                                
                                <label for="editStudentId">Student ID:</label>
                                <input type="text" id="editStudentId" value="${student.studentId}" required>

                                <label for="editAge">Age:</label>
                                <input type="text" id="editAge" value="${student.age}" required>

                                <label for="editContact">Contact:</label>
                                <input type="text" id="editContact" value="${student.contact}" required>

                                <button type="submit">Update</button>
                            </form>`;

        
        $('#editStudentModal').html(editFormHtml);
        $('#editStudentModal').css('display', 'block');

        
        $('#editStudentForm').submit(function (e) {
            e.preventDefault();

            
            student.name = $('#editName').val();
            student.studentId = $('#editStudentId').val();
            student.age = $('#editAge').val();
            student.contact = $('#editContact').val();
            displayStudents();

            
            $('#editStudentModal').css('display', 'none');
        });
    }

    
    function confirmDelete(studentId) {
        var confirmDelete = window.confirm("Are you sure you want to delete this student?");
        if (confirmDelete) {
            
            students = students.filter(student => student.id !== studentId);

            
            displayStudents();
        }
    }

    
    displayStudents();
});
