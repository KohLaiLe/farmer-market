@extends('layout.template')

@section('about')
<div class="about-container">
    <div class="about-desc">
        <h1>About Us</h1>
        @for($i = 0; $i < 7; $i++)
        <img src="{{ $icon }}" alt="medicare-icon" />
        @endfor
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At sed veniam est cum dicta inventore modi iste nihil molestias ipsa obcaecati, itaque illo enim tenetur eligendi quam alias ut dolor quo atque eos beatae explicabo. Ducimus facere quod quae incidunt consectetur earum voluptates. Veritatis excepturi quibusdam aspernatur ducimus atque debitis possimus iusto, dignissimos ea sint maxime temporibus deserunt libero accusantium harum dolores hic? Tempore, repellat similique quasi maxime ipsum nihil non architecto eos eligendi explicabo! In, eaque modi doloribus sed quo laborum accusamus excepturi debitis pariatur similique commodi tempore ex autem repudiandae animi deserunt repellendus quae placeat aliquam! Odit nihil eum optio nobis illum delectus maxime tempore totam nemo esse ipsum, consequatur hic suscipit! Quam praesentium mollitia quia debitis magnam, temporibus alias iusto? Dolorum eaque ipsum, molestias aperiam autem placeat veritatis sapiente et fugit voluptatibus numquam quos illum sit eveniet quod suscipit aspernatur voluptates unde beatae corrupti doloremque consequatur. Pariatur.
        </p>
    </div>
    <div class="about-contact">
        <h3>Contact Us</h3>
        <p>
            Customer Service Hotline: (+62) 081123456789<br />
            Customer Service Email: support@farmermarket.id
        </p>
    </div>
</div>
@endsection