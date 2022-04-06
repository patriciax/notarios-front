@extends("layouts.main")

@section("content")
<main class="bg-light no_height about-bg" data-barba="container" data-barba-namespace="contact-section">

    <div class="contacto">
        <div class="contacto-item">
            <p> JUAN PABLO BERNAL</p>
            <p>CO FUNDER / CEO</p>
            <p><a href="tel:+57 321 4520060">+57 321 4520060</a></p>
            <p><a href="mailto:JUANPABLO@LOSNOTARIOS.TV">JUANPABLO@LOSNOTARIOS.TV</a></p>
        </div>
        <div class="contacto-item">
            <p> ADRIANA DOLMEN</p>
            <p>EXECUTIVE PRODUCER</p>
            <p><a href="tel:+57 320 4575157">+57 320 4575157</a></p>
            <p><a href="mailto:ADRIANA@LOSNOTARIOS.TV">
ADRIANA@LOSNOTARIOS.TV</a></p>
        </div>
        <div class="contacto-item">
            <p> ADELAIDA CANO</p>
            <p>EXECUTIVE PRODUCER</p>
            <p><a href="tel:+57 321 4929905">+57 321 4929905

</a></p>
            <p><a href="mailto:ADELAIDA@LOSNOTARIOS.TV">ADELAIDA@LOSNOTARIOS.TV</a></p>
        </div>
        <div class="contacto-item">
            <p> CESAR AMADO</p>
            <p>EXECUTIVE PRODUCER
</p>
            <p><a href="tel:+57 313 4135812">+57 313 4135812
</a></p>
            <p><a href="mailto:CESAR@LOSNOTARIOS.TV">CESAR@LOSNOTARIOS.TV</a></p>
        </div>
        <div class="contacto-item">
            <p> JOHN MORALES
</p>
            <p>PRODUCTION COORDINATOR</p>
            <p><a href="tel:+57 321 9046465">
</a></p>
            <p><a href="mailto:JOHN@LOSNOTARIOS.TV">JOHN@LOSNOTARIOS.TV</a></p>
        </div>
        <div class="contacto-item">
            <p> FRANCI MELOL</p>
            <p>ADMINISTRATIVE</p>
            <p><a href="tel:+57 320 2732455">+57 320 2732455
</a></p>
            <p><a href="mailto:FRANCI@LOSNOTARIOS.TV">FRANCI@LOSNOTARIOS.TV</a></p>
        </div>
    </div>



</main>
<style>

    footer .copy, .main-logo img {
display: none;
    }
    footer{
        position: fixed;
    right: 0;
    }
    @media only screen and (max-width: 600px) {
        footer .copy, .main-logo img {
display: block;
    }
        footer {
    position: inherit;

}
    }
    .menu li:nth-child(6) {

border-bottom: 1px solid #121212!important;

}
.bg-light {
 
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}
</style>

@push("scripts")

@endpush





@endsection
