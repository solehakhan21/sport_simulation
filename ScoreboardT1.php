<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table Match UI</title>

<style>
body {
    margin: 0;
    padding: 0;
    background: #1c1c1c;
    font-family: Arial, sans-serif;
}

/* ================== HALF NAVBAR =================== */
.top-bar-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 15px;
}

.top-bar {
    width: 55%;  
    background: white;
    padding: 10px 20px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 3px 15px rgba(0,0,0,0.3);
}

.top-left {
    display: flex;
    align-items: center;
    gap: 15px;
}

.top-left img {
    height: 60px;
}

.date-time {
    font-size: 14px;
    font-weight: bold;
    line-height: 1.2;
}

.table-title {
    background: #f68b1f;
    padding: 8px 35px;
    color: white;
    font-size: 24px;
    font-weight: bold;
    border-radius: 6px;
}

.top-right {
    display: flex;
    gap: 15px;
}

.icon-btn {
    width: 32px;
    height: 32px;
    background: #ddd;
    border-radius: 50%;
}

/* BEST OF */
.best-of-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
}

.best-of {
    margin-top: 10px;
    background: #f68b1f;
    padding: 6px 25px;
    font-weight: bold;
    border-radius: 6px;
    color: white;
}

/* ================= PLAYER BOARD ================= */
.board-wrapper {
    margin-top: 40px;
    display: flex;
    justify-content: center;
}

.board {
    width: 520px;
    height: 320px;
    border: 4px solid white;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
}

.player-box {
    background: #0c6f2c;
    color: white;
    padding: 15px;
}

.player-flag {
    height: 50px;
}

.player-name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 5px;
}

.player-info {
    font-size: 14px;
}

/* SERVER + RECEIVER */
.side-box {
    text-align: center;
    position: absolute;
}

.side-icon {
    background: white;
    color: black;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
}

.side-label {
    margin-top: 6px;
    font-size: 13px;
    color: #aaa;
}

.server {
    top: 43%;
    left: 31%;
}

.receiver {
    top: 43%;
    right: 31%;
}

/* ================= BOTTOM BAR ================= */
.bottom-bar-wrapper {
    margin-top: 60px;
    display: flex;
    justify-content: center;
}

.bottom-bar {
    width: 60%;
    background: #e7e2db;
    padding: 20px 10px;
    display: flex;
    justify-content: center;
    gap: 25px;
}

.btn {
    padding: 12px 40px;
    border-radius: 6px;
    cursor: pointer;
    color: white;
    font-size: 18px;
    font-weight: bold;
    border: none;
}

.swap-btn { background: #5ea9ad; }
.warmup-btn { background: #f68b1f; }
.end-btn { background: #cc0000; }
</style>

</head>
<body>

<!-- =================== HALF NAVBAR =================== -->
<div class="top-bar-wrapper">
    <div class="top-bar">
        <div class="top-left">
            <img src="logo.png" alt="">
            <div class="date-time">
                10/8/2021 <br> 09:00
            </div>
        </div>

        <div class="table-title">Table 01</div>

        <div class="top-right">
            <div class="icon-btn"></div>
            <div class="icon-btn"></div>
        </div>
    </div>
</div>

<!-- Best of 5 -->
<div class="best-of-wrapper">
    <div class="best-of">Best of 5</div>
</div>

<!-- =================== PLAYER BOARD =================== -->
<div class="board-wrapper">
    <div class="board">

        <div class="player-box">
            <img src="blr.png" class="player-flag">
            <div class="player-name">Player 2</div>
            <div class="player-info">
                SAMSONOV Vladimir <br> 108246 <br> BLR
            </div>
        </div>

        <div class="player-box">
            <img src="kor.png" class="player-flag">
            <div class="player-name">Player 1</div>
            <div class="player-info">
                JEOUNG Youngsik <br> 104257 <br> KOR
            </div>
        </div>

        <div class="player-box"></div>
        <div class="player-box"></div>

    </div>
</div>

<!-- SERVER + RECEIVER -->
<div class="side-box server">
    <div class="side-icon">S</div>
    <div class="side-label">Server</div>
</div>

<div class="side-box receiver">
    <div class="side-icon">R</div>
    <div class="side-label">Receiver</div>
</div>

<!-- =================== BOTTOM BUTTONS =================== -->
<div class="bottom-bar-wrapper">
    <div class="bottom-bar">
        <button class="btn swap-btn">Swap Sides</button>
        <button class="btn warmup-btn">Start Warm Up</button>
        <button class="btn end-btn">End Match</button>
    </div>
</div>

<script>
// Add JS actions here if needed
</script>

</body>
</html>
