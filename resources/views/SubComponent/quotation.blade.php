@include('components.Divider')

<div class="quotation">
    @if ($Img ?? "")
    <div class="bgCover"> <img  src={{ $Img }} alt="web design services"  /> </div>
    @endif
        <div class="container" >
        <h2 class='h2 '  data-aos="fade-up">{{ $title1 ?? '' }}</h2>
        <div class='h3 ' data-aos="fade-up">{{ $desc1 }}</div>
    </div>
</div>