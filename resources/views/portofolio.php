<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Nadila Fitri Noviardhana</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #e0f7fa; 
            color: #333; 
        }

        section {
            border: 2px solid #00bcd4; 
            border-radius: 8px; 
            padding: 20px;
            margin-bottom: 20px;
        }

        h1 {
            color: #051413;
            text-align: center;
            background-color: #00bcd4; 
            padding: 10px;
            border-radius: 8px; 
        }

        h2 {
            color: #20b2aa; 
        }

        p {
            color: #555; 
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .project {
            margin-bottom: 30px;
        }

        .project img {
            max-width: 100%;
            height: auto;
            border-radius: 8px; 
            margin-top: 10px;
        }

        /* Styling untuk iframe */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Aspect Ratio 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin: 20px auto; /* Center the container */
            width: 80%; /* Adjust width as needed */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Centering all iframes */
        .video-container-wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .video-container-wrapper .video-container {
            margin: 10px;
        }
    </style>
</head>

<body>
    <section>
        <h1>Portofolio</h1>

        <p>Saya tengah mempelajari skill mengenai pemrograman web dan juga bahasa Python. Kumpulan project saya bisa diakses di link GitHub ini ya!</p>

        <h2>Link GitHub:</h2>
        <p><a href="https://github.com/Nadilaftr" target="_blank">https://github.com/Nadilaftr</a></p>
    </section>

    <section class="project">
        <h2>Saya juga suka bernyanyi!</h2>
        <div class="video-container-wrapper">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/s3EKQStPpM0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/y21Dy_dXSUs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/gL8ze9E45YQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/KTfTGHEyOVI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <form action="/fact/" method="get">
        <button type="submit">Next</button>
    </form>
</body>

</html>
