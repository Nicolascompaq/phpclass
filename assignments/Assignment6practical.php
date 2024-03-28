<html lang="en">
<head>
    <title>Assignment_6</title>
</head>
<style>
    /* Container for the row */
    .row-container {
        display: flex;
        justify-content: space-between; /* Space between the items */
        align-items: center; /* Align items vertically */
        padding: 20px; /* Padding for the container */
    }

    /* Style for each column */
    .column {
        width: 45%; /* Set the width of each column */
        background-color: #f0f0f0;
        border: 1px solid #ddd;
        padding: 20px;
    }
</style>
<body>
    <h1>checkbox</h1>
    <br>
    <form>
        <input type = "checkbox" name = "maths" value = "on"> Maths
        <input type = "checkbox" name = "physics" value = "on"> Physics
     </form>
    <br>
    <h1>Radio Buttons</h1>
    <br>
    <form>
        <input type = "radio" name = "subject" value = "maths"> Maths
        <input type = "radio" name = "subject" value = "physics"> Physics
     </form>

     <div class="row-container">
        <!-- First column -->
        <div class="column">
            <iframe src="https://www.youtube.com/embed/3C8aIcnkh7M" height="315" width="420" title="Promotional video Shamwari (Full video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></src=>" frameborder="0"></iframe>
        </div>

        <!-- Second column -->
        <div class="column">
            <div class="carousel">
                <div class="carousel-slide">
                    <div class="slide"><img src="image1.jpg" alt="Image 1"></div>
                    <div class="slide"><img src="image2.jpg" alt="Image 2"></div>
                    <div class="slide"><img src="image3.jpg" alt="Image 3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>