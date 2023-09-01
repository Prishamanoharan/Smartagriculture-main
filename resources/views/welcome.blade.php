

@extends('layouts.app')

@section('content')
<style>
  @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Satisfy&display=swap');
</style>
    <style>
        .upper-content{
            position:absolute;
            top:20px;
            bottom:0;
        }
        .front-img img{ 
            transform: scaleX(-1);
            width:80%;
        }
.title h3{
    font-family: 'PT Serif', serif;
    text-shadow: 5px 3px 10px rgba(94, 94, 94, 1);
}
    </style>


           <div class="content position-relative">
            <div class="img-bg overflow-hidden">
                <img src="/images/agri-blur-background.jpg" alt="">
            </div>
            <div class="upper-content d-flex justify-content-between">
            <div class="front-img col-md-6 d-flex justify-content-end align-items-end">
                <img src="images/front-img.png"  alt="">
            </div>
                <div class="title d-flex flex-column justify-content-center">
                  <h3 class="fw-bold display-6 text-center text-white text-shadow"> Smart Agriculture System </h3>
                  <p class="text-center text-white text-shadow" style="font-family: 'Satisfy', cursive;font-size:25px;text-shadow: 5px 3px 10px rgba(94, 94, 94, 1);">
                  "Empowering fields with intelligence, sowing innovation into every seed. Welcome to the harvest of tomorrow with Smart Agriculture at its heart."
                  </p>
                </div>
            </div>
           
                
            </div>
      
@endsection
           
      
 