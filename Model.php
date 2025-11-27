<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Match UI</title>

<style>
/* Reset */
body {
    margin: 0;
    padding: 0;
    background: white; /* No background */
    font-family: Arial, sans-serif;
}

/* ===== NAVBAR ===== */
.navbar-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 15px;
}

.navbar {
    width: 55%;
    background: #39A127; /* Green */
    padding: 12px 25px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 3px 15px rgba(0,0,0,0.25);
}

/* Left Logo */
.nav-logo {
    height: 45px;
}

/* Orange Title */
.nav-title {
    background: #E88724;
    padding: 6px 30px;
    border-radius: 6px;
    color: white;
    font-size: 28px;
    font-weight: bold;
}

/* Right Icons */
.nav-right {
    display: flex;
    gap: 18px;
}

.nav-icon {
    height: 32px;
    width: 32px;
    background: #ddd;
    border-radius: 50%;
}

/* ===== MODAL BACKDROP ===== */
.modal-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.60);
    display: none;
    justify-content: center;
    align-items: center;
}

/* ===== MODAL BOX ===== */
.modal-box {
    width: 55%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
}

/* Header */
.modal-header {
    background: #39A127;
    padding: 12px 20px;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

/* Table */
.table-box {
    padding: 20px;
}

.custom-table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
    font-size: 14px;
}

.custom-table th {
    background: #39A127;
    color: white;
    padding: 10px;
}

.custom-table td {
    border: 1px solid #ddd;
    padding: 10px;
}

/* Center text message */
.modal-message {
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    color: #E88724;
    margin-top: 5px;
}

/* Buttons area */
.modal-footer {
    background: #e7e2db;
    padding: 20px;
    display: flex;
    justify-content: center;
    gap: 30px;
}

.btn-start {
    background: #f68b1f;
    color: white;
    border: none;
    padding: 10px 50px;
    font-size: 18px;
    border-radius: 6px;
    cursor: pointer;
}

.btn-reset {
    background: white;
    border: 2px solid #ddd;
    padding: 10px 50px;
    font-size: 18px;
    border-radius: 6px;
    cursor: pointer;
}

.btn-start:hover { opacity: 0.8; }
.btn-reset:hover { opacity: 0.8; }

</style>

</head>
<body>

<!-- ===== NAVBAR ===== -->
<!-- <div class="navbar-wrapper">
    <div class="navbar">
        <img src="logo.jpeg" class="nav-logo">

        <div class="nav-title">Table 02</div> -->

        <div class="nav-right">
            <div class="nav-icon"></div>
            <div class="nav-icon"></div>
        </div>
    </div>
</div>

<!-- ===== MODAL (VISIBLE BY DEFAULT FOR DEMO) ===== -->
<div class="modal-bg" id="modal">
    <div class="modal-box">

        <div class="modal-header">You have chosen match</div>

        <div class="table-box">
            <table class="custom-table">
                <tr>
                    <th>Event</th>
                    <th>Time</th>
                    <th>Player 1</th>
                    <th>Player 2</th>
                    <th>Best Of</th>
                </tr>
                <tr>
                    <td>Men's Singles</td>
                    <td>09:00</td>
                    <td>JEOUNG<br>Youngsik<br>KOR</td>
                    <td>SAMSONOV<br>Vladimir<br>BLR</td>
                    <td>5</td>
                </tr>
            </table>

            <div class="modal-message">Are you sure you want to start?</div>
        </div>

        <div class="modal-footer">
            <button class="btn-start">Start</button>
            <button class="btn-reset" onclick="closeModal()">Reset</button>
        </div>

    </div>
</div>

<script>
document.getElementById("modal").style.display = "flex";

function closeModal() {
    document.getElementById("modal").style.display = "none";
}
</script>

</body>
</html>
