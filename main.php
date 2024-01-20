<!-- /**
 * This is the main PHP file for the portfolio page.
 * It contains the HTML markup for displaying the portfolio information.
 * The file includes a section with a typed animation effect for displaying different job titles.
 *
 * @author Samir Shaikh
 * @version 1.0
 */ -->

<main>
    <section class="firstsection">
        <div class="leftsection">
            Hii ,My Name is 
            <span class="highlighted-text" id="name">
                'Samir Shaikh'
            </span>
            <br>
            And I am a passionate <br>
            <span class="highlighted-text" id="element"> </span>
            <!-- Load library from the CDN -->
            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

            <!-- Setup and start animation! -->
            <script>
            var typed = new Typed('#element', {
                strings: ['Web Developer', ' Web Designer ', ' Freelancer' , ' IT Student '],
                typeSpeed: 80,
                loop : true
            });
            </script>
        </div>

        <div class="rightsection">
            <img src="portfolio.png" alt="Portfolio Image" width="75%" class="portfolio-image">
        </div>
    </section>
</main>
<hr>