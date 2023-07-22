

{{-- HEADER --}}

@section('title','Home PAGE post list')
@section('metaDescription','META DESCRIPTION')
@include('front/layouts/header')

{{-- FIN HEADER --}}

<body>
{{-- CUERPO DE PAGINA --}}
<div class="container mb-4 mx-1 sm:mx-auto">

    <div class="playervideo grid grid-rows-12 grid-cols-8">   
        <div class="titulo col-span-8 row-span-2">
            <h1 class="font-bold text-3xl ">Titutlo del videoTitutlo del videoTitutlo del video</h1>
        </div>
        <div class="player col-span-8 md:col-span-8 lg:col-span-6 row-span-10">
            <iframe src="https://www.xvideos.com/embedframe/77597717" frameborder=0 width=auto height=auto scrolling=no allowfullscreen=allowfullscreen></iframe>
      
            <div class="info p-5">


                {{-- TABS --}}
                    @include('front/layouts/tabs')
                {{-- FIN TABS --}}           
            </div>  
        </div>
        
        <div class="lateral_ads mx-2 md:mx-6">
            <!-- JuicyAds v3.0 -->
            <script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
            <ins id="894774" data-width="300" data-height="262"></ins>
            <script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':894774});</script>
            <!--JuicyAds END-->
            <div class="mt-2 hidden sm:block lateral_2">
                <!-- JuicyAds v3.0 -->
                <script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
                <ins id="894774" data-width="300" data-height="262"></ins>
                <script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':894774});</script>
                <!--JuicyAds END-->
            </div>
        </div>
       
    </div>
    {{-- RELATED VIDEOS --}}
    @include('front/layouts/randomvideos')
</div>
{{-- FIN DE CUERPO DE PAGINA --}}
</body>


{{-- FOOTER  --}}
@include('front/layouts/footer')

