<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="icon" href="logo.png" type="image/icon type">

<style>
    body{
        margin: 0px;
    }
    .hero{
        width: 100vw;
        height: 100vh;
        background-color: rgb(0,0,0);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    h4{
        color: white;
        font-weight: 200;
    }
    h3 {
        color: orange;
        font-weight: 100;
    }
    .text-uppercase{
        display: flex;
    }
    @media screen and (max-width: 1000px) {
        .text-uppercase{
            text-align: center;
            display: block;
        }
        h4{
            font-size: 3.5em;
            margin-bottom: 70px;
        }
        h3{

            font-size: 4em;
        }
        p{
            font-size: 3em;
        }

    }

</style>
<style>
    .animate {
        opacity: 0;
        transform: translateY(100px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .animate.show {
        opacity: 1;
        transform: translateY(0);
    }

    .animate.hide {
        opacity: 0;
        transform: translateY(-100px);
        transition: opacity 1s ease, transform 1s ease;
    }

    h3 {
        opacity: 0;
        transition: opacity 1s ease;
    }

    h3.show {
        opacity: 1;
    }
    p {
        opacity: 0;
        transition: opacity 1s ease;
    }

    p.show {
        opacity: 1;
        color: rgba(112, 112, 112, 0.4);
    }


</style>

<section class="hero">
    <div class="text-uppercase gap-5 justify-content-center">
        <h4 class="animate">Funkčnosť</h4>
        <h4 class="animate">Spoľahlivosť</h4>
        <h4 class="animate">Kreativita</h4>
    </div>
    <h3>byteminds.sk</h3>
    <p>Stránka je v procese výroby</p>
</section>

<script>
    window.addEventListener('load', function() {
        const elements = document.querySelectorAll('.animate');
        const h3Element = document.querySelector('h3');
        const pElement = document.querySelector('p');
        // Zobrazenie elementov h4
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.classList.add('show');
            }, index * 800); // postupné zobrazenie
        });

        setTimeout(() => {
            elements.forEach((element) => {
                element.classList.remove('show');
                element.classList.add('hide');
            });

            // Po tom, čo sa h4 skryjú, zobrazíme h3
            setTimeout(() => {
                h3Element.classList.add('show');
                pElement.classList.add('show');
            }, 1000); // Zobrazenie h3 po 1 sekunde
        }, 2400);
    });
</script>
