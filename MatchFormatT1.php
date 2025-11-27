<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Match Format Popup</title>

<style>
body {
    margin: 0;
    padding: 0;
    background: #222;
    font-family: Arial, sans-serif;
}

/* === BACKDROP === */
.popup-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.60);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* === SQUARE POPUP BOX === */
.popup-box {
    width: 600px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    animation: fadeIn 0.3s ease;
}

/* === HEADER === */
.popup-header {
    background: #1ca319;
    padding: 15px 20px;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

/* === BODY === */
.popup-body {
    padding: 20px 30px;
}

.popup-body h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 0 0 15px 0;
}

.bullet {
    color: #1ca319;
    margin-right: 8px;
}

/* === TABLE (SUPER COMPACT SPACING) === */
.format-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
}

.format-table th,
.format-table td {
    border: 1px solid #ddd;
    padding: 2px 6px;   /* 🔥 ULTRA COMPACT SPACING */
    text-align: center;
}

/* Light green header cells */
.format-table th {
    background: #e8f7e8;
    color: #30b543;
    font-weight: bold;
}

/* Left label column */
.format-table td:first-child {
    color: black;
    font-weight: bold;
    text-align: left;
}

/* Normal data cells */
.format-table td {
    color: black;
}

/* === FOOTER === */
.popup-footer {
    padding: 20px;
    display: flex;
    justify-content: center;
}

.close-btn {
    background: #bdbcbc;
    border: none;
    padding: 12px 55px;
    font-size: 18px;
    border-radius: 8px;
    cursor: pointer;
    color: white;
    font-weight: bold;
}

.close-btn:hover {
    opacity: 0.8;
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.97); }
    to { opacity: 1; transform: scale(1); }
}
</style>

</head>
<body>

<!-- === POPUP === -->
<div class="popup-bg" id="popup">
    <div class="popup-box">

        <div class="popup-header">Match Format</div>

        <div class="popup-body">
            <h3><span class="bullet">●</span>Best of N Games : 5</h3>

            <table class="format-table">
                <tr>
                    <th></th>
                    <th>G1</th>
                    <th>G2</th>
                    <th>G3</th>
                    <th>G4</th>
                    <th>G5</th>
                </tr>

                <tr>
                    <td>Winning Points</td>
                    <td>11</td><td>11</td><td>11</td><td>11</td><td>11</td>
                </tr>

                <tr>
                    <td>Advantage Points</td>
                    <td>2</td><td>2</td><td>2</td><td>2</td><td>2</td>
                </tr>

                <tr>
                    <td>Sudden Death Points</td>
                    <td>99</td><td>99</td><td>99</td><td>99</td><td>99</td>
                </tr>
            </table>
        </div>

        <div class="popup-footer">
            <button class="close-btn" onclick="closePopup()">Close</button>
        </div>

    </div>
</div>

<script>
function closePopup() {
    document.getElementById("popup").style.display = "none";
}
</script>

</body>
</html>
