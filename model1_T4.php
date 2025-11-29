<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Match Modal</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
.yellow-box {
    border: 2px solid #f5a623;
    border-radius: 6px;
}
.best-badge {
    box-shadow: 0 2px 4px rgba(0,0,0,0.25);
}
</style>

</head>
<body class="bg-black bg-opacity-60 min-h-screen flex items-center justify-center">

<script>

// FIXED RECTANGLE CONTAINER
const modal = document.createElement("div");
modal.className = "bg-white rounded-xl shadow-xl border overflow-hidden";
modal.style.width = "820px";
modal.style.margin = "auto";

// FULL MODAL CONTENT
modal.innerHTML = `

    <!-- HEADER TITLE -->
    <div class="text-2xl font-bold text-green-700 px-4 py-4">
        You have chosen match KOREA REPUBLIC VS HUNGARY
    </div>

    <!-- GREEN HEADER BAR -->
    <div class="relative bg-[#1f8f00] text-white flex justify-between px-4 py-3 font-bold text-sm">

        <div class="w-20">Order</div>
        <div class="flex-1 text-center">Team 1 - KOREA REPUBLIC</div>
        <div class="flex-1 text-center">Team 2 - HUNGARY</div>

        <div class="absolute left-1/2 -translate-x-1/2 -top-3">
            <span class="bg-orange-400 text-white px-4 py-1 rounded best-badge text-xs">
                Best of 3
            </span>
        </div>

        <div class="absolute right-4 -top-10 bg-orange-500 px-4 py-1 rounded text-white font-bold flex items-center gap-2 text-xs">
            Match Score
            <span class="bg-white text-orange-600 px-2 py-1 rounded">0-0</span>
        </div>
    </div>

    <!-- TABLE SECTION -->
    <div class="border border-gray-300 max-h-56 overflow-y-auto text-sm">
        <table class="w-full text-center border-collapse">
            <tbody>

                <tr class="border-b border-gray-300">
                    <td class="w-16 py-2 border-r font-bold">1</td>
                    <td class="py-2 border-r">AHN Jaehyung</td>
                    <td class="py-2">ACS Pongrac</td>
                </tr>

                <tr class="border-b border-gray-300">
                    <td class="w-16 py-2 border-r font-bold">1</td>
                    <td class="py-2 border-r">HONG Chaok</td>
                    <td class="py-2">AMBRUS Bea</td>
                </tr>

                <tr class="border-b border-gray-300">
                    <td class="w-16 py-2 border-r font-bold">2</td>
                    <td class="py-2 border-r">HONG Soonhwa</td>
                    <td class="py-2">AGARDI Reka</td>
                </tr>

                <tr class="border-b border-gray-300">
                    <td class="w-16 py-2 border-r font-bold">3</td>
                    <td class="py-2 border-r">CHO Eunrae</td>
                    <td class="py-2">DEMETER Lehel</td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- NEXT MATCH -->
    <div class="bg-[#3d3d3d] px-4 py-4">

        <div class="text-green-300 text-lg font-bold mb-2">
            Next Match
        </div>

        <div class="flex items-center bg-white yellow-box text-green-700 font-semibold text-sm">

            <div class="px-3 py-2 w-14 text-center border-r border-gray-300">
                1
            </div>

            <div class="flex-1 px-3 py-2 border-r border-gray-300 text-center">
                AHN J. / HONG C.
            </div>

            <div class="flex-1 px-3 py-2 text-center">
                P. ACS / B. AMBRUS
            </div>

        </div>

        <div class="text-center text-lg font-semibold py-3 text-white">
            Are you sure you want to start?
        </div>

    </div>

    <!-- BUTTONS -->
    <div class="bg-[#e8dfd3] px-4 py-4 flex justify-center gap-8 text-sm">

        <button class="bg-orange-500 text-white font-bold px-10 py-2 rounded hover:bg-orange-600">
            Start
        </button>

        <button class="bg-gray-300 text-black px-10 py-2 rounded hover:bg-gray-400">
            Cancel
        </button>

    </div>

`;

document.body.appendChild(modal);

</script>

</body>
</html>
