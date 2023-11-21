@extends('admin.master')
@section('content')




<section class="section about-section gray-bg" id="about">
    <h2>Location View</h2>
    <div class="container d-flex justify-content-center align-items-center">

        <div class="card">

         <div class="upper">

           <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">

         </div>

         <div class="user text-center">

           <div class="profile">

             <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">

           </div>

         </div>


         <div class="mt-5 text-center">

           <h4 class="mb-0">Benjamin Tims</h4>
           <span class="text-muted d-block mb-2">{$locationval->name}}</span>

           <button class="btn btn-primary btn-sm follow">Follow</button>


           <div class="d-flex justify-content-between align-items-center mt-4 px-4">

             <div class="stats">
               <h6 class="mb-0">{{$locationval->name}}</h6>
               <span>8,797</span>

             </div>


             <div class="stats">
               <h6 class="mb-0">Projects</h6>
               <span>{{$locationval->name}}</span>

             </div>


             <div class="stats">
               <h6 class="mb-0">Ranks</h6>
               <span>129</span>

             </div>

           </div>

         </div>

        </div>

      </div>
</section>

  @endsection
