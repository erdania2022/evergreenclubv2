<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverGreen Club Blog Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FDFEFE;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #148F77;
            color: #fff;
            padding: 1em;
        }

        nav {
            background-color: #73C6B6;
            color: #fff;
            padding: 1em;
            display: flex;
            justify-content: space-around;
            font-size: 1.2em;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        nav a.active {
            background-color: #BB8FCE;
        }

        main {
            padding: 2em;
        }

        .post {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 1em;
            margin-bottom: 1em;
            text-align: left;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 2em;
        }

        .gallery img {
            border-radius: 8px;
            margin: 0.5em;
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .nav-btn {
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="margin: 0;">EverGreen Club Blog Admin Dashboard</h1>
    </header>
    <nav>
        <a href="home.php" class="active">Dashboard</a>
        <a href="blogpost.php">Posts</a>
        <a href="members.php">Members</a>
        <a href="activities.php">Upcoming Activities</a>
    </nav>
    <main>
        <h2>Latest Posts</h2>
        <div class="post">
            <h3><b>Conserving Earth</b></h3>
            <p>Earth’s natural resources include air, water, soil, minerals, plants, and animals. Conservation is the practice of caring for these resources so all living things can benefit from them now and in the future. All the things we need to survive, such as food, water, air, and shelter, come from natural resources. Some of these resources, like small plants, can be replaced quickly after they are used. Others, like large trees, take a long time to replace. These are renewable resources.</p>
            <a href="https://education.nationalgeographic.org/resource/conserving-earth/">Read More</a> 
        </div>

        <div class="post">
            <h3><b>Ways To Conserve Water</b></h3>
            <p>Water is a strange thing. Its unusual characteristics are something that science finds utterly weird. For example, it is denser as a liquid than as a solid. Its unusual molecular structure allows it to exist as a liquid at room temperature, where similar materials exists as a gas. Even its molecular formula, good old H2O, may actually be H1.5O (but only in the realm of quantum physics). But despite its weirdness from science’s perspective, it is all too familiar to us both at an individual level and at the level of larger society. Water is a vital component of the human body, making up almost 65-70% of our body weight. It was the life blood of ancient civilizations. The Indus Valley, Chinese, Mesopotamian, and Egyptian civilizations all grew up on the banks of mighty rivers carrying precious water. Where there’s water, there’s life. Where there’s no water, life – especially of the human kind – struggles.</p>
            <a href="https://isha.sadhguru.org/en/blog/article/6-easy-ways-to-conserve-water?gad_source=1&gclid=Cj0KCQiA5fetBhC9ARIsAP1UMgHD2KQZG4ReABOACX2bnzYLU0EIKzLxFkB5qZOOfEkvH9fK9HeC638aAsjKEALw_wcB">Read More</a> 
        </div>
        <a class="nav-btn" href="blogpost.php">
        <button class="btn btn-success">More Blogposts</button>
    </a>

        <h2>Activities Gallery</h2>
        <div class="gallery">
            <img src="assets/images/activity1.jpg" height="500" width="500" alt="Bamboo Planting For Flood Mitigation River Rehabilitation in Perak Malaysia, Kampung Sahom with Green Earth Movement Society of Malaysia and Sahom Community">
            <img src="assets/images/activity2.jpg" height="500" width="500" alt="Tree planting event at Pangkor">
            <img src="assets/images/activity3.jpg" height="500" width="500" alt="Tree planting event at Pangkor">
        </div>
    </main>

    <script>
        // Get the current page URL
        var currentPage = window.location.href;

        // Get all navigation links
        var navLinks = document.querySelectorAll('nav a');

        // Loop through each link and check if its href matches the current page
        navLinks.forEach(function(link) {
            if (link.href === currentPage) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>
