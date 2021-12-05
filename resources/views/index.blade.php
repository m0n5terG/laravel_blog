 @extends('layouts.app')

 @section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Pastries anyone?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More                
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/11/28/08/03/brownie-548591_1280.jpg" width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Hoping to share my passion for baking to others
            </h2>
            <p class="py-8 text-gray-500 text-s">
                lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="font-bold text-gray-600 text-s pb-9">
                Reprehenderit aute nostrud sit do voluptate consequat Lorem excepteur laborum ipsum consequat et reprehenderit pariatur. Aute laboris minim in eu officia 
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More            
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>
        <span class="font-extrabold block text-3xl py-1">
            Brownies
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Brownies
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-grey-500">
            Qui et proident exercitation elit mollit ex tempor incididunt dolor enim do sunt excepteur. Id pariatur excepteur duis aliqua eiusmod quis. Officia deserunt nostrud ex in aliquip exercitation elit in esse adipisicing. Nostrud velit ullamco pariatur enim cupidatat. Ex excepteur ea sunt quis do excepteur occaecat.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Latest Creation
                </span>
                <h3 class="text-xl font-bold py-10">
                    Non mollit consectetur pariatur fugiat occaecat occaecat magna ipsum elit ea exercitation veniam nulla magna. Laborum Lorem exercitation cillum quis Lorem excepteur velit excepteur adipisicing minim eiusmod consectetur tempor. Aliqua officia duis ea elit. Lorem magna enim duis mollit minim consectetur amet ea aliqua nisi. Incididunt dolor nisi duis nostrud Lorem sunt.
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2019/02/25/19/27/brownie-4020349_1280.jpg" width="700" alt="">
        </div>
    </div>
 @endsection