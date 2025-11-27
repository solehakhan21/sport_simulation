

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation – Touchpad Application</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .body_container {
        max-width: 50rem;
        margin: 20px auto;
        background: #fff;
        padding-bottom: 20px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
</style>
</head>

<body class="bg-gray-100">


<?php include 'header.php'; ?>
<div class="body_container">        
        <div class="text-center my-6 pt-10">
            <h1 class="text-[#8cc63f] font-bold text-2xl">Welcome UMP</h1>
            <p class="text-gray-700 text-sm">Please select match type and table</p>
        </div>

        <!-- White Card -->
        <div class="bg-white rounded-lg shadow-lg p-10">

            <!-- Radio Buttons -->
            <div class="flex justify-center gap-8 mb-10 text-sm font-bold">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" id="teamradio" name="match" checked>
                    <i class="fa-solid fa-people-group text-teal-600"></i>
                    Team
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="match" id="doubleradio">
                    <i class="fa-solid fa-user-group text-pink-600"></i>
                    Doubles/Individual
                </label>
            </div>

            <!-- TABLE BUTTONS -->
            <div class="max-w-3xl mx-auto" id="teams">

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <button onclick="window.location.href='teamt1.php'" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 1 teams</button>
                    <button onclick="goToTable(2)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 2</button>
                    <button onclick="goToTable(3)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 3</button>
                    <button onclick="goToTable(4)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 4</button>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <button onclick="goToTable(5)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 5</button>
                    <button onclick="goToTable(6)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 6</button>
                </div>

            </div>

             <div class="max-w-3xl mx-auto hidden" id="doubles">

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <button onclick="window.location.href='doublet1.html'" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 1</button>
                    <button onclick="goToTable(2)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 2</button>
                    <button onclick="goToTable(3)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 3</button>
                    <button onclick="goToTable(4)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 4</button>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <button onclick="goToTable(5)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 5</button>
                    <button onclick="goToTable(6)" class="bg-[#115e59] text-white py-3 rounded font-medium">Table 6</button>
                </div>

            </div>

        </div>
</div>

<script>
    // Get query parameter
    const params = new URLSearchParams(window.location.search);
    const mode = params.get("mode");

    const teamRadio = document.getElementById("teamradio");
    const doubleRadio = document.getElementById("doubleradio");
    const teamsDiv = document.getElementById("teams");
    const doublesDiv = document.getElementById("doubles");

    // Default = teams
    if (mode === "doubles") {
        doubleRadio.checked = true;
        teamsDiv.classList.add("hidden");
        doublesDiv.classList.remove("hidden");
    } else {
        teamRadio.checked = true;
        teamsDiv.classList.remove("hidden");
        doublesDiv.classList.add("hidden");
    }

    // Manual switching
    teamRadio.addEventListener("change", () => {
        teamsDiv.classList.remove("hidden");
        doublesDiv.classList.add("hidden");
    });

    doubleRadio.addEventListener("change", () => {
        teamsDiv.classList.add("hidden");
        doublesDiv.classList.remove("hidden");
    });
</script>

</body>
</html>