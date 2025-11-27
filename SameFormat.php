<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Player Positions Popup</title>

<style>
body {
    margin: 0;
    padding: 0;
    background: #222;
    font-family: Arial, sans-serif;
}

/* ===== DARK BACKDROP ===== */
.popup-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.70);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* ===== POPUP BOX ===== */
.popup-box {
    width: 530px;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    animation: fadeIn 0.2s ease;
}

/* ===== HEADER ===== */
.popup-header {
    background: #1ca319;  /* Green */
    padding: 15px 20px;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

/* ===== BODY ===== */
.popup-body {
    padding: 25px 35px;
}

.note {
    font-size: 16px;
    color: #ff7a00;   /* Orange note text */
    font-weight: bold;
    margin-bottom: 20px;
}

.ask {
    font-size: 17px;
    font-weight: bold;
    margin-bottom: 25px;
}

/* ===== BUTTONS ===== */
.popup-footer {
    padding: 10px 20px 25px;
    display: flex;
    justify-content: center;
    gap: 25px;
}

.btn {
    padding: 12px 40px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
}

.btn-confirm {
    background: #ff8900;
    color: white;
}

.btn-cancel {
    background: #bdbcbc;
    color: white;
}

.btn:hover {
    opacity: 0.85;
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.96); }
    to { opacity: 1; transform: scale(1); }
}
</style>

</head>
<body>

<!-- ===== POPUP ===== -->
<div class="popup-bg" id="popup">
    <div class="popup-box">

        <div class="popup-header">Player positions</div>

        <div class="popup-body">
            <div class="note">
                Note: Can't set players positions after warmup.<br>
                Please set players positions before warmup.
            </div>

            <div class="ask">Is Players Positions Set?</div>
        </div>

        <div class="popup-footer">
            <button class="btn btn-confirm" onclick="confirmAction()">Confirm</button>
            <button class="btn btn-cancel" onclick="closePopup()">Cancel</button>
        </div>

    </div>
</div>

<script>
function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function confirmAction() {
    alert("Confirmed!");
    closePopup();
}
</script>

</body>
</html>
