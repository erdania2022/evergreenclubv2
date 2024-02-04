<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverGreen Club Blogpost - Add Post</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
        }

        main {
            padding: 2em;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }

        input, textarea {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .post {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 1em;
            margin-bottom: 1em;
            text-align: left;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Club Blog - Edit/Add Post</h1>
    </header>
    <main>
        <!-- Add Post Form -->
        <form id="addPostForm">
            <h2>Add New Post</h2>
            <label for="addPostTitle">Post Title:</label>
            <input type="text" id="addPostTitle" name="addPostTitle" placeholder="Enter Post Title" required>

            <label for="addPostContent">Post Content:</label>
            <textarea id="addPostContent" name="addPostContent" rows="6" placeholder="Enter post content..." required></textarea>

            <button type="submit" onclick="addNewPost()">Add Post</button>
        </form>

        <!-- Display Latest Post -->
        <div id="latestPost" class="post" style="display: none;">
            <h3 id="latestPostTitle"></h3>
            <p id="latestPostContent"></p>
        </div>
    </main>

    <script>
        function addNewPost() {
            // Get values from the form
            var newPostTitle = document.getElementById("addPostTitle").value;
            var newPostContent = document.getElementById("addPostContent").value;

            // Display the latest post
            document.getElementById("latestPostTitle").innerText = newPostTitle;
            document.getElementById("latestPostContent").innerText = newPostContent;
            document.getElementById("latestPost").style.display = "block";

            // You can also send this data to your server for storage or further processing
        }
    </script>
</body>
</html>
