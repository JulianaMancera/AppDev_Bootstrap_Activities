<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghost-Themed Activity Compilation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
            body {
            background-color: #0a0a0a;
            color: #d1d5db;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .ghost-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            gap: 60px;
            max-width: 1080px;
            margin-top: 20px;
        }
        .activity-buttons {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .activity-buttons a {
            width: 300px;
            text-align: center;
            background-color: #1f1f1f;
            color: #e5e7eb;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease-in-out;
            font-size: 1.2rem;
        }
        .activity-buttons a:hover {
            background-color: #3b3b3b;
            color: #ffffff;
            transform: scale(1.05);
        }
        .ghost-gif {
            width: 450px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="text-4xl font-bold mb-5 text-gray-270">Bootstrap Activity Compilation</h1>
        <p class="text-xl mb-3 text-gray-400">CCC311-18 / CCL311-18 Applications Development & Emerging Technologies</p>
        <p class="italic text-gray-500 mb-3">Developed by: Juliana R. Mancera</p>
        
        <div class="ghost-container">
            <img src="download (1).gif" alt="Ghost GIF" class="ghost-gif">
            <div class="activity-buttons">
                <a href="Activity1/">Activity #1</a>
                <a href="Activity%20%232/Activity2.php">Activity #2</a>
                <a href="Activity%20%233/Activity3.php">Activity #3</a>
                <a href="Activity%20%234/Activity4.php">Activity #4</a>
                <a href="Activity%20%235/Activity5.php">Activity #5</a>
                <a href="Activity%20%236/ScrollSpy.php">Activity #6</a>
                <a href="Projects/Portfolio.php">Projects</a>
            </div>
        </div>
    </div>
</body>
</html>
