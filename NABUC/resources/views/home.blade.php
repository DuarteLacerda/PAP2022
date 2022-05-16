@extends('layouts.outer')

@section('content')
    <div class="banner">
        <div class="img owl-four owl-carousel" itemprop="image">
            <img class="image" src="images/logoHorisontal.png" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>Bem Vindo(a) <i class="fa-regular fa-compass"></i></h1>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
    <!-- Banner Close -->
    <section id="#gallery" class="page-heading">
        <div class="container">
            <h2>galeria</h2>
        </div>
    </section>
    <section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
        <div class="gallery-img-wrap">
            <a href="images/gallery-img1.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img1.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img2.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img2.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img3.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img3.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img4.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img4.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img5.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img5.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img6.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img6.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img7.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img7.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img8.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img8.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img9.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img9.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img10.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img10.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img11.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img11.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img12.jpg" data-lightbox="example-set"
                data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img12.jpg" alt="gallery-images">
            </a>
        </div>
    </section>
    <!-- End of gallery Images -->
    <section class="page-heading">
        <div class="container">
            <h2></h2>
        </div>
    </section>
@endsection
