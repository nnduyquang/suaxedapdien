<style>
    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides2 {
        display: block;
        height: auto;
        overflow: hidden;
        background-image: url(http://expert-themes.com/html/motor-expert/images/background/5.jpg);
    }

    img {
        vertical-align: middle;
        width: 100%;
        height: auto;
    }

    /* Slideshow container */
    .slideshow-container {
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {

        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        color: white;
        padding:16px 13px;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(255, 255, 255, 0.8);
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next, .text {
            font-size: 11px
        }
    }

</style>

<div class="container-fluid p-0">
    <div class="slideshow-container">
        <div class="mySlides2">
            <img src="http://expert-themes.com/html/motor-expert/images/main-slider/image-1.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

</div>

<script>
</script>




