<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table 01 - Match Interface</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #1a1a1a;
            color: white;
            margin: 0;
            overflow-x: hidden;
        }

        /* FULL-WIDTH THIN NAVBAR LIKE YOUR SCREENSHOT */
        .header-bar {
            background: #2b2b2b;
            height: 70px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 5px solid #4caf50;
            position: relative;
        }

        .logo-circle {
            position: absolute;
            left: 20px;
            top: -5px;
            width: 85px;
            height: 85px;
            background: white;
            border-radius: 50%;
            border: 3px solid #8cc65c;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        .date-time-box {
            font-weight: 800;
            font-size: 16px;
            display: flex;
            gap: 60px;
            color: white;
        }

        .right-icons {
            position: absolute;
            right: 20px;
            display: flex;
            gap: 20px;
            font-size: 22px;
        }

        .table-tab {
            background-color: #ff8c00;
            font-weight: 800;
            padding: 8px 60px;
            border-radius: 8px;
            font-size: 1.4rem;
            margin: 10px auto;
            color: white;
            display: flex;
            justify-content: center;
            width: fit-content;
        }

        .action-bar { display:flex; justify-content:center; padding-top:10px; }
        .best-of-badge { background:#ff8c00; color:#000; font-weight:bold; padding:5px 25px; border-radius:5px; font-size:0.9rem; }

        .court-area { display:flex; justify-content:center; align-items:center; margin-top:15px; }

        .side-controls { display:flex; flex-direction:column; align-items:center; gap:30px; width:180px; }
        .btn-swap-green {
            background:#00703c; color:white; font-weight:600; padding:10px 15px;
            border-radius:5px; border:none; width:100%; box-shadow:0 2px 5px rgba(0,0,0,0.3);
        }

        .role-circle { width:50px; height:50px; background:white; border-radius:50%; font-size:1.3rem; color:black; display:flex; align-items:center; justify-content:center; }

        .match-table-grid {
            display:grid; grid-template-columns:1fr 1fr; grid-template-rows:1fr 1fr;
            gap:4px; background:white; border:4px solid white; width:900px; box-shadow:0 10px 20px rgba(0,0,0,0.5); position:relative;
        }

        .center-line-overlay { position:absolute; left:50%; top:0; bottom:0; width:4px; background:white; }

        .player-card { background:#006b3f; padding:20px; display:flex; gap:15px; color:white; }
        .flag-img { width:65px; height:65px; border-radius:50%; border:3px solid white; }
        .p-role { color:#a0cbb5; font-size:0.95rem; font-weight:600; }
        .p-name { font-size:1.35rem; font-weight:800; text-transform:uppercase; }
        .p-details { font-weight:700; font-size:0.9rem; }

        .footer-strip { background:#e6e2d3; padding:15px; display:flex; justify-content:center; gap:20px; margin-top:30px; }
        .btn-footer { border:none; padding:12px 40px; font-size:1rem; font-weight:600; border-radius:4px; }
        .btn-teal { background:#17a2b8; }
        .btn-orange { background:#fd7e14; }
        .btn-red { background:#dc3545; }
    </style>
</head>
<body>

    <!-- ====================== NAVBAR (LIKE YOUR SCREENSHOT) ====================== -->
    <div class="header-bar">

        <div class="logo-circle">
            <img src="logo.jpeg" style="width:100%; height:100%;">
        </div>

        <div class="date-time-box">
            <span id="live-date"></span>
            <span id="live-time"></span>
        </div>

        <div class="right-icons">
            <i class="fa-solid fa-power-off" style="color:#ff8c00;"></i>
            <i class="fa-solid fa-user-gear" style="color:white;"></i>
        </div>
    </div>

    <!-- TABLE TAB -->
    <div class="table-tab">Table 01</div>

    <!-- BEST OF -->
    <div class="action-bar"><div class="best-of-badge">Best of 3</div></div>

    <!-- COURT AREA -->
    <div class="court-area">
        <div class="side-controls me-4">
            <button class="btn-swap-green"><i class="fas fa-arrow-down"></i> Swap Players</button>
            <div class="text-center"><div class="role-circle">S</div><div>Server</div></div>
        </div>

        <div class="match-table-grid">
            <div class="center-line-overlay"></div>

            <div class="player-card">
                <img src="https://flagcdn.com/w160/sg.png" class="flag-img">
                <div><div class="p-role">Player 1D</div><div class="p-name">HUANG Kang Kang</div><div class="p-details">103755<br>SGP</div></div>
            </div>

            <div class="player-card">
                <img src="https://flagcdn.com/w160/my.png" class="flag-img">
                <div><div class="p-role">Player 2</div><div class="p-name">HAMIZI Pabil</div><div class="p-details">103396<br>MAS</div></div>
            </div>

            <div class="player-card">
                <img src="https://flagcdn.com/w160/sg.png" class="flag-img">
                <div><div class="p-role">Player 1</div><div class="p-name">HO Kee Keng</div><div class="p-details">103629<br>SGP</div></div>
            </div>

            <div class="player-card">
                <img src="https://flagcdn.com/w160/my.png" class="flag-img">
                <div><div class="p-role">Player 2D</div><div class="p-name">KUEH Wan May</div><div class="p-details">104933<br>MAS</div></div>
            </div>
        </div>

        <div class="side-controls ms-4">
            <button class="btn-swap-green"><i class="fas fa-arrow-down"></i> Swap Players</button>
            <div class="text-center"><div class="role-circle">R</div><div>Receiver</div></div>
        </div>
    </div>

    <!-- FOOTER BUTTONS -->
    <div class="footer-strip">
        <button class="btn-footer btn-teal">Swap Sides</button>
        <button class="btn-footer btn-orange">Start Warm Up</button>
        <button class="btn-footer btn-red">End Match</button>
    </div>

    <!-- LIVE DATE + LIVE TIME SCRIPT -->
    <script>
        function updateDateTime() {
            const now = new Date();

            const date = now.toLocaleDateString("en-US", {
                month: "2-digit",
                day: "2-digit",
                year: "numeric"
            });

            const time = now.toLocaleTimeString("en-US", {
                hour: "2-digit",
                minute: "2-digit",
                hour12: false
            });

            document.getElementById("live-date").textContent = date;
            document.getElementById("live-time").textContent = time;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

</body>
</html>
