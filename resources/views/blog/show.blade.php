@extends('layouts.app')

@section('content')


<div class="text-center pt-16 md:pt-32">
    <p class="text-sm md:text-base text-green-500 font-bold">Created on {{ date('jS M Y', strtotime($post->updated_at)) }}<span class="text-gray-900">/</span>BY {{ $post->user->name }}</p>
    <h1 class="font-bold break-normal text-3xl md:text-5xl">  {{ $post->title }}</h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" > <img style="width:1000px, height:630px"src="{{ asset('images/' . $post->image_path) }}" alt=""></div>

<!--Container-->
<div class="container max-w-5xl mx-auto -mt-32">
    
    <div class="mx-0 sm:mx-6">
        
        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
            
            <!--Post Content-->
            

            <!--Lead Para-->
          
            <p class="py-6" style="margin-top: 5%"> {{ $post->description }}</p>				
        
           

                                            
            <!--/ Post Content-->
                    
        </div>
        
        
      


</div>







    </div>

@endsection 