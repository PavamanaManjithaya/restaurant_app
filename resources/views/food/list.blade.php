@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($categories as $category)
            
        
        <div class="col-md-12">
            <h2 class="display-4" style="color:rgb(67, 67, 168);">{{$category->name}}</h2>
            <div class="jumbotron">
                <div class="row">
                    @foreach (App\Models\Food::where('category_id',$category->id)->get() as $food)
                        
                    
                    <div class="col-md-3">
                        <img src="{{asset('images')}}/{{$food->image}}" alt="" width="200" height="155">
                        <strong><h4><p class="text-center">{{$food->name}}
                        <span class="text-center">${{$food->price}}</span></strong>


                         </p></h4>
                         <p class="text-center"><a href="{{route('food.view',[$food->id])}}">View</a></p>
                       

                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection        