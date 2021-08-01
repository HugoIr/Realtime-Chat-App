@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto font-header">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-semibold text-shadow-md pb-14 tracking-wider">
                    Do you want to become a hacker?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 
                py-2 px-4 font-bold text-x1 uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b
     border-gray-200">
        <div>
            <img class="rounded-lg" src="https://cdn.pixabay.com/photo/2018/06/17/08/40/hacker-3480124_960_720.jpg" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block pt-6 sm:pt-0">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a professional hacker?
            </h2>
    
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Vero quibusdam explicabo qui nulla dolores sunt exercitationem, 
                maiores possimus praesentium ullam laudantium, quod consequatur.
            </p>
    
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Vero quibusdam explicabo qui nulla dolores sunt exercitationem, 
                maiores possimus praesentium ullam laudantium, quod consequatur.
            </p>
    
            <a href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s
                font-extrabold py-3 px-8 rounder-3xl">
                Find Out More
            </a>
    
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Developer
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-800">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            perspiciatis aliquid incidunt nulla sed omnis quidem vel 
            quos ab pariatur suscipit!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto bg-black-100">
        <div class="flex bg-yellow-700 text-gray-100 pt-10 rounded-t-lg sm:rounded-l-lg sm:rounded-br-2xl sm:rounded-tr-none xl:rounded-br-none xl:rounded-tr-none">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-l">
                    PHP
                </span>

                <h3 class="text-xl font-semibold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quod.
                    Reiciendis tenetur modi omnis, nam ad maxime dolore mollitia eius,
                    voluptates eos optio ut ducimus totam quisquam assumenda molestias
                    temporibus!
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2
                    border-gray-100 text-gray-100 text-xs font-extrabold
                    py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>

        <div>
            <img class=" xl:rounded-r-lg" src="https://cdn.pixabay.com/photo/2016/08/13/16/49/computer-1591018_960_720.jpg" alt="">
        </div>

    </div>



@endsection