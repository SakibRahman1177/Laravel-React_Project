@extends('layouts.log')
@include('inc.sidenav')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body>
      <div  class="bg-white">
         <header>
            <div class="container px-6 py-3 mx-auto">
               <div class="flex items-center justify-between">
                  <div class="flex items-center justify-end w-full">
                     <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                     </button>
                  </div>
               </div>
               <nav  class="p-6 mt-4 text-white bg-pink-300 sm:flex sm:justify-center sm:items-center">
               <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                    <span class="font-semibold text-xl tracking-tight">Sanofy Shopping Cart</span>
                </div>
                  <div class="flex flex-col sm:flex-row">
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="/">Home</a>
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('product')}}">Shop</a>
                     <a href="{{ route('cart.list') }}" class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                           <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        {{ Cart::getTotalQuantity()}}
                     </a>
                  </div>
               </nav>
            </div>
         </header>
         <main class="my-8">
            @yield('content')
         </main>
      </div>
   </body>
</html>
<div class="container px-6 mx-auto">
	{{-- <h3 class="text-2xl font-medium text-gray-700">Product List</h3> --}}
	<div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
		@foreach ($products as $product)
		<div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
			{{-- <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60"> --}}
			<div class="flex items-end justify-end w-full bg-cover">
				
			</div>
			<div class="px-5 py-3">
				<h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
				<span class="mt-2 text-gray-500">${{ $product->price }}</span>
				<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ $product->id }}" name="id">
					<input type="hidden" value="{{ $product->name }}" name="name">
					<input type="hidden" value="{{ $product->price }}" name="price">
					<input type="hidden" value="{{ $product->image }}"  name="image">
					<input type="hidden" value="1" name="quantity">
					<button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
				</form>
			</div>
			
		</div>
		@endforeach
	</div>
</div>

@endsection