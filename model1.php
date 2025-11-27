<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Modal</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .best-badge {
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .yellow-box {
            border: 2px solid #f5a623;
            border-radius: 8px;
        }
        .table-cell {
            border-right: 1px solid #d1d1d1;
        }
        .table-row {
            border-bottom: 1px solid #dcdcdc;
        }
    </style>
</head>

<body class="bg-black bg-opacity-60 flex items-center justify-center min-h-screen">

<!-- MODAL -->
<div class="bg-white w-[90%] max-w-4xl rounded-xl shadow-xl overflow-hidden border">

    <!-- HEADER TITLE -->
    <div class="text-center text-2xl font-bold text-green-700 py-4">
        You have chosen match SINGAPORE VS MALAYSIA
    </div>

    <!-- GREEN HEADER BAR -->
    <div class="relative bg-[#1f8f00] text-white flex justify-between px-4 py-3 font-bold text-center">

        <div class="w-20">Order</div>

        <div class="flex-1">
            Team 1 - SINGAPORE
        </div>

        <div class="flex-1">
            Team 2 - MALAYSIA
        </div>

        <!-- BEST OF 3 BADGE -->
        <div class="absolute left-1/2 -translate-x-1/2 -top-3">
            <span class="bg-orange-400 text-white px-4 py-1 rounded best-badge text-sm">
                Best of 3
            </span>
        </div>

        <!-- MATCH SCORE BADGE -->
        <div class="absolute right-4 -top-10 bg-orange-500 px-4 py-1 rounded text-white font-bold flex items-center gap-2">
            Match Score
            <span class="bg-white text-orange-600 px-2 py-1 rounded">0-0</span>
        </div>
    </div>

    <!-- TABLE SECTION -->
    <div class="border border-gray-300 max-h-72 overflow-y-auto">

        <table class="w-full text-center border-collapse text-lg">

            <tbody>

                <tr class="table-row">
                    <td class="w-20 py-4 table-cell font-bold">1</td>
                    <td class="py-4 table-cell">HO Kee Keng</td>
                    <td class="py-4">HAMIZI Pabil</td>
                </tr>

                <tr class="table-row">
                    <td class="w-20 py-4 table-cell font-bold">1</td>
                    <td class="py-4 table-cell">HUANG Kang Kang</td>
                    <td class="py-4">KUEH Wan May</td>
                </tr>

                <tr class="table-row">
                    <td class="w-20 py-4 table-cell font-bold">2</td>
                    <td class="py-4 table-cell">HENG Wei Chen</td>
                    <td class="py-4">HO Li Na</td>
                </tr>

                <tr class="table-row">
                    <td class="w-20 py-4 table-cell font-bold">3</td>
                    <td class="py-4 table-cell">HO Jia Ren Jason</td>
                    <td class="py-4">H'NG Kim Shan</td>
                </tr>

            </tbody>
        </table>

    </div>

    <!-- NEXT MATCH -->
    <div class="bg-[#3d3d3d] px-4 py-4">
        <div class="text-green-300 text-xl font-bold mb-2">
            Next Match
        </div>

        <!-- SINGLE COMBINED BOX -->
        <div class="flex items-center bg-white yellow-box text-green-700 font-semibold text-lg">

            <div class="px-4 py-2 w-16 text-center border-r border-gray-300">
                1
            </div>

            <div class="flex-1 px-4 py-2 border-r border-gray-300">
                HO K. / HUANG K.
            </div>

            <div class="flex-1 px-4 py-2">
                HAMIZI P. / KUEH W.
            </div>

        </div>
    </div>

    <!-- CONFIRM TEXT -->
    <div class="text-center text-xl font-semibold py-3">
        Are you sure you want to start?
    </div>

    <!-- BUTTON PANEL -->
    <div class="bg-[#e8dfd3] px-4 py-4 flex justify-center gap-8">

        <button class="bg-orange-500 text-white font-bold px-12 py-2 rounded text-lg hover:bg-orange-600">
            Start
        </button>

        <button class="bg-gray-300 text-black px-12 py-2 rounded text-lg hover:bg-gray-400">
            Cancel
        </button>

    </div>

</div>

</body>
</html>
