<x-layout>
    
    {{-- inizio navbar --}}
    <nav class="bg-white flex flex-col items-center">
        <div>
            <img class="w-36" src="/media/logo.png" alt="logo-mountain">
        </div>
        
        <ul class="flex w-7/12 justify-between navlink">
            <li class="hover:font-semibold">Primo link</li>
            <li class="hover:font-semibold">Altro link</li>
            <li class="hover:font-semibold">Terzo link</li>
            <li class="hover:font-semibold">Ultimo link</li>
        </ul>
        
    </nav>
    {{-- fine navbar --}}
    
    {{-- inizio header --}}
    <header class="min-h-screen bg-bgHeader bg-no-repeat bg-center bg-cover flex justify-center items-center relative">
        <h1 id="myHeading" class="text-6xl tracking-tight hover:tracking-[30px] transition:all duration-1000 text-primary z-10" >LOREM</h1>
        
        <img class="absolute bottom-0 w-screen" src="media/mountains2.png" alt="">
    </header>
    {{-- fine header --}}
    
    {{-- inizio sezione paragrafo ed icone --}}
    
    <div class="flex justify-center text-center mt-16">
        <p class="w-1/2 font-semibold text-gray-500 italic">
            <i class="fa-solid fa-quote-left text-primary italic"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ducimus nisi omnis ipsa quaerat ea qui ab culpa. Perspiciatis incidunt odit facilis suscipit molestias sunt excepturi voluptatem nulla iusto atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iusto rerum vel vitae libero accusamus, voluptatum numquam sapiente molestiae eaque voluptatem dolorum qui reprehenderit corporis, veniam excepturi nam blanditiis sed.
            <i class="fa-solid fa-quote-right text-primary italic"></i>
        </p>
    </div>
    <div class="py-44">
        <div class="container flex flex-wrap">
            <div class="w-full md:w-1/4 text-center my-8 transition duration-500 transform hover:scale-125">
                <i class="fa-solid text-primary text-3xl fa-snowflake"></i>
                <p class="my-4">lorem ipsum dolor</p>
                <div class="h-1 bg-primary w-52 mx-auto relative">
                    <div class="before:content-[''] before:rounded-full before:border-primary before:border-2 before:w-5 before:h-5 before:absolute before:bg-secondary before:translate-y-1/2 before:translate-x-[-50%] before:bottom-1/2 hover:before:bg-accent transition-colors duration-300 ease-in-out"></div>
                </div>
            </div>
            <div class="w-full md:w-1/4 text-center my-8 transition duration-500 transform hover:scale-125">
                <i class="fa-solid text-primary text-3xl fa-mountain"></i>
                <p class="my-4">lorem ipsum dolor</p>
                <div class="h-1 bg-primary w-52 mx-auto relative">
                    <div class="before:content-[''] before:rounded-full before:border-primary before:border-2 before:w-5 before:h-5 before:absolute before:bg-secondary before:translate-y-1/2 before:translate-x-[-50%] before:bottom-1/2 hover:before:bg-accent transition-colors duration-300 ease-in-out"></div>
                </div>
            </div>
            <div class="w-full md:w-1/4 text-center my-8 transition duration-500 transform hover:scale-125">
                <i class="fa-solid text-primary text-3xl fa-map"></i>
                <p class="my-4">lorem ipsum dolor</p>
                <div class="h-1 bg-primary w-52 mx-auto relative">
                    <div class="before:content-[''] before:rounded-full before:border-primary before:border-2 before:w-5 before:h-5 before:absolute before:bg-secondary before:translate-y-1/2 before:translate-x-[-50%] before:bottom-1/2 hover:before:bg-accent transition-colors duration-300 ease-in-out"></div>
                </div>
            </div>
            <div class="w-full md:w-1/4 text-center my-8 transition duration-500 transform hover:scale-125">
                <i class="fa-solid text-primary text-3xl fa-campground"></i>
                <p class="my-4">lorem ipsum dolor</p>
                <div class="h-1 bg-primary w-52 mx-auto relative">
                    <div class="before:content-[''] before:rounded-full before:border-primary before:border-2 before:w-5 before:h-5 before:absolute before:bg-secondary before:translate-y-1/2 before:translate-x-[-50%] before:bottom-1/2 hover:before:bg-accent transition-colors duration-300 ease-in-out"></div>
                </div>
            </div>
        </div>
    </div>       
    
    {{-- fine sezione paragrafo ed icone --}}
    
    {{-- inizio sezione paragrafi e bottone --}}
    
    <div class="flex-col md:flex md:flex-row justify-around p-1 md:p-0">
        <div class="w-full md:w-1/3 text-center md:text-start">
            <h2 class="text-2xl text-primary font-semibold">Lorem Ipsum Dolor Sit</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur labore cumque nihil. Distinctio blanditiis pariatur quo nihil, quasi aspernatur iure error ex repellendus commodi odit? Aliquid nemo fugit ab dicta!</p>
            <p class="my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque eaque optio, accusamus ad reiciendis repellendus non minima ab ipsam, maxime maiores beatae tempora, unde iste vel doloribus itaque labore provident.</p>
        </div>
        
        <div class="w-full md:w-1/3 text-center md:text-end">
            <h2 class="text-2xl text-primary font-semibold">Lorem Ipsum Dolor Sit</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur labore cumque nihil. Distinctio blanditiis pariatur quo nihil, quasi aspernatur iure error ex repellendus commodi odit? Aliquid nemo fugit ab dicta!</p>
            <p class="my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque eaque optio, accusamus ad reiciendis repellendus non minima ab ipsam, maxime maiores beatae tempora, unde iste vel doloribus itaque labore provident.</p>
        </div>
    </div>
    
    <div class="h-[600px] bg-bgTrees bg-cover bg-no-repeat flex justify-center">
        <div class="text-center my-40">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-primary to-accent group-hover:from-primary group-hover:to-accent hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-filler dark:focus:ring-filler">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    LOREM IPSUM
                </span>
            </button>
        </div>
    </div>
    {{-- fine sezione paragrafi e bottone --}}
    
    {{-- inizio sezione timeline --}}
    <div class="bg-white pt-10 bg-bgTreesTimeline bg-no-repeat bg-right-bottom">
        <div class="min-h-[700px] w-full md:w-1/2">
            <h2 class="text-2xl text-primary font-semibold mb-10 ml-10">OUR TIMELINE</h2>
            <div class="border-l-4 border-primary ml-10 mx-10 px-3">
                <h3 class="text-primary font-semibold before:content-[''] before:w-4 before:h-4 before:border-2 before:rounded-full before:bg-white before:border-primary before:absolute before:left-[34px] hover:before:bg-accent transition-colors duration-300 ease-in-out mb-2">Lorem ipsum</h3>
                <p class="h-[130px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis natus minima quo laudantium mollitia iste maiores alias iure quasi molestiae aut perferendis eaque a quod reprehenderit, quaerat numquam voluptates quam.</p>
            </div>
            <div class="border-l-4 border-primary ml-10 mx-10 px-3">
                <h3 class="text-primary font-semibold before:content-[''] before:w-4 before:h-4 before:border-2 before:rounded-full before:bg-white before:border-primary before:absolute before:left-[34px] hover:before:bg-accent transition-colors duration-300 ease-in-out mb-2">Lorem ipsum</h3>
                <p class="h-[130px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis natus minima quo laudantium mollitia iste maiores alias iure quasi molestiae aut perferendis eaque a quod reprehenderit, quaerat numquam voluptates quam.</p>
            </div>
            <div class="border-l-4 border-primary ml-10 mx-10 px-3">
                <h3 class="text-primary font-semibold before:content-[''] before:w-4 before:h-4 before:border-2 before:rounded-full before:bg-white before:border-primary before:absolute before:left-[34px] hover:before:bg-accent transition-colors duration-300 ease-in-out mb-2">Lorem ipsum</h3>
                <p class="h-[130px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis natus minima quo laudantium mollitia iste maiores alias iure quasi molestiae aut perferendis eaque a quod reprehenderit, quaerat numquam voluptates quam.</p>
            </div>
            <div class="border-l-4 border-primary ml-10 mx-10 px-3">
                <h3 class="text-primary font-semibold before:content-[''] before:w-4 before:h-4 before:border-2 before:rounded-full before:bg-white before:border-primary before:absolute before:left-[34px] hover:before:bg-accent transition-colors duration-300 ease-in-out">Lorem ipsum</h3>
                <p class="h-[130px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis natus minima quo laudantium mollitia iste maiores alias iure quasi molestiae aut perferendis eaque a quod reprehenderit, quaerat numquam voluptates quam.</p>
            </div>
        </div>
    </div>
    {{-- fine sezione timeline --}}
    
    {{-- inizio sezione our team --}}
    
    <div class="min-h-[500px] mt-20">
        <h2 class="text-primary font-semibold text-2xl ml-10 mb-10">OUR TEAM</h2>
        
        <div class="md:flex md:justify-evenly">
            <div  class="w-full md:w-1/4 text-center mb-4">
                <div class="w-40 h-40 mx-auto p-1 rounded-full ring-2 ring-primary">
                    <img class="rounded-full w-full h-full grayscale hover:grayscale-0 duration-700" src="media/landscape-975091_1920.jpg" alt="Bordered avatar">
                </div>
                <h3 class="text-primary mt-4">Lorem Ipsum</h3>
                <p class="ml-10 mb-4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio reprehenderit doloribus?</p>
                <div class="flex justify-evenly text-primary">
                    <i class="fa-brands fa-instagram transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-linkedin transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-facebook transition duration-500 transform hover:scale-150"></i>
                </div>
            </div>
            <div  class="w-full md:w-1/4 text-center mb-4">
                <div class="w-40 h-40 mx-auto p-1 rounded-full ring-2 ring-primary">
                    <img class="rounded-full w-full h-full grayscale hover:grayscale-0 duration-700" src="media/landscape-975091_1920.jpg" alt="Bordered avatar">
                </div>
                <h3 class="text-primary mt-4">Lorem Ipsum</h3>
                <p class="ml-10 mb-4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio reprehenderit doloribus?</p>
                <div class="flex justify-evenly text-primary">
                    <i class="fa-brands fa-instagram transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-linkedin transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-facebook transition duration-500 transform hover:scale-150"></i>
                </div>
            </div>
            <div  class="w-full md:w-1/4 text-center mb-4">
                <div class="w-40 h-40 mx-auto p-1 rounded-full ring-2 ring-primary">
                    <img class="rounded-full w-full h-full grayscale hover:grayscale-0 duration-700" src="media/landscape-975091_1920.jpg" alt="Bordered avatar">
                </div>
                <h3 class="text-primary mt-4">Lorem Ipsum</h3>
                <p class="ml-10 mb-4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio reprehenderit doloribus?</p>
                <div class="flex justify-evenly text-primary">
                    <i class="fa-brands fa-instagram transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-linkedin transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-facebook transition duration-500 transform hover:scale-150"></i>
                </div>
            </div>  
            <div  class="w-full md:w-1/4 text-center mb-4">
                <div class="w-40 h-40 mx-auto p-1 rounded-full ring-2 ring-primary">
                    <img class="rounded-full w-full h-full grayscale hover:grayscale-0 duration-700" src="media/landscape-975091_1920.jpg" alt="Bordered avatar">
                </div>
                <h3 class="text-primary mt-4">Lorem Ipsum</h3>
                <p class="ml-10 mb-4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio reprehenderit doloribus?</p>
                <div class="flex justify-evenly text-primary">
                    <i class="fa-brands fa-instagram transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-linkedin transition duration-500 transform hover:scale-150"></i>
                    <i class="fa-brands fa-facebook transition duration-500 transform hover:scale-150"></i>
                </div>
            </div>  
            
            
        </div>
    </div>
    
    {{-- fine sezione our team --}}
    
    {{-- inizio sezione our benefit --}}

    <div class="h-[1200px] mt-40 bg-bgTreesRed bg-no-repeat bg-contain bg-bottom">
        <h2 class="text-primary text-2xl font-semibold ml-10 mb-10">OUR BENEFIT</h2>

        <div class="md:flex flex-wrap md:justify-between px-10">
            <div class="w-full md:w-1/2 mt-10">
                <h2 class="text-primary hover:font-semibold md:text-start text-center mb-2">Lorem ipsum dolo</h2>
                <p class="text-center md:text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab inventore laboriosam cum tempora provident rerum id dignissimos culpa veritatis consequuntur labore commodi, nesciunt doloremque perspiciatis dolorum aliquam distinctio mollitia placeat?</p>
            </div>

            <div class="w-full md:w-1/2 flex justify-center mt-8">
               <img class="w-40 h-40 rounded-full p-1 ring-2 ring-primary" src="media/fog.jpg" alt="">
            </div>
        </div>

        <div class="md:flex flex-wrap md:justify-between px-10 mt-40">
            <div class="w-full md:w-1/2 flex justify-center">
                <img class="w-40 h-40 rounded-full p-1 ring-2 ring-primary" src="media/fog.jpg" alt="">
             </div>

            <div class="w-full md:w-1/2 mt-10">
                <h2 class="text-primary hover:font-semibold md:text-start text-center mb-2">Lorem ipsum dolo</h2>
                <p class="text-center md:text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab inventore laboriosam cum tempora provident rerum id dignissimos culpa veritatis consequuntur labore commodi, nesciunt doloremque perspiciatis dolorum aliquam distinctio mollitia placeat?</p>
            </div>
        </div>

           




    </div>

    {{-- fine sezione our benefit --}}


    
    
    
    
    
    
    
    
    
    
    
    <div class="h-40"></div>
    
</x-layout>