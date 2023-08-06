<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #header {
    
            padding: 10px;
            margin: 0;
            text-align: center;
        }
        
        #container {
            margin: 2rem;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 0.5rem;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .button-container {
            margin-top: 1rem;
        }
        .button {
            background-color: #333;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-size: 14px;
        }
        .button.logout {
            background-color: red;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Admin Dashboard</h1>
    </div>
    <div id="container">
        <h2>Daftar SISWA</h2>
        <table>
            <thead>
                <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Asal Sekolah</th>
                <th>Tanggal Lahir</th>
                <th>Semester</th>
                <th>Domisili</th>
                <th>Program Bimbel</th>
                <th>Nama Orang Tua</th>
                <th>No HP Orang Tua</th>
                <th>Total Biaya</th>
                <th>Metode Pembayaran</th>
            </tr>
        </thead>
        <tbody id="studentTableBody">
            <!-- Student data will be displayed here -->
        </tbody>
    </table>
    <div class="button-container">
            <button class="button">Konfirmasi Pendaftaran</button>
            <button class="button">Edit Informasi</button>
            <button class="button logout">Logout</button>
        </div>
    </div>
    <script>
        fetch("get_student.php")
            .then(response => response.json())
            .then(students => {
                const tableBody = document.querySelector("#studentTableBody");
                students.forEach(student => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${student.id_daftar}</td>
                        <td>${student.nama}</td>
                        <td>${student.email}</td>
                        <td>${student.no_hp}</td>
                        <td>${student.asal_sekolah}</td>
                        <td>${student.tgl_lahir}</td>
                        <td>${student.semester}</td>
                        <td>${student.domisili}</td>
                        <td>${student.program_bimbel}</td>
                        <td>${student.nama_ortu}</td>
                        <td>${student.no_hp_ortu}</td>
                        <td>${student.total_biaya}</td>
                        <td>${student.metode_pembayaran}</td>
                        
                    `;
                    
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    </script>
    <script>
    // Fetch and populate table data here

    // Add event listeners to Confirm buttons
    const confirmButtons = document.querySelectorAll('.confirm-button');
    confirmButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            confirmStudent(id);
        });
    });

    // Function to confirm a student
    function confirmStudent(id) {
        fetch('confirm_students.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}`,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update the status in the table or handle success as needed
                console.log(`Student with ID ${id} confirmed.`);
            } else {
                console.error('Error confirming student.');
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>

</body>
</html>
