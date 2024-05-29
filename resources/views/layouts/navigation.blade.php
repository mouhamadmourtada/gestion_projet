<div class="h-full bg-white overflow-x-hidden overflow-y-hidden flex flex-col px-3 justify-start">
    <!-- l'image logo -->
    <div class="flex justify-end">
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="isOpen = !isOpen" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
                </path>
            </svg>
        </button>

    </div>

    <div class="flex justify-center my-6">
        <img class="h-20 w-20 rounded-full" src="logo.jpg" alt="" srcset="">
    </div>
    <!-- les elements du sidebar -->
    <hr>
    <nav class="mt-10">
        <div>
            {{-- tableau de bord --}}
            <a class="element_sidebar {{ request()->is('dashboard*') ? 'element_sidebar_acitf' : '' }}" href="/dashboard">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Tableau de bord
                </span>
            </a>

            {{-- Gestion des catégories --}}
            {{-- <a class="element_sidebar {{ request()->is('categories*') ? 'element_sidebar_acitf' : '' }}" href="/categories">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des catégories
                </span>
            </a> --}}


            {{-- Gestion des produits --}}
            {{-- <a class="element_sidebar {{ request()->is('produits*') ? 'element_sidebar_acitf' : '' }}" href="/produits">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des produits
                </span>
            </a> --}}

            {{-- Gestion des utilisateurs --}}
            <a class="element_sidebar {{ request()->is('admin/users*') ? 'element_sidebar_acitf' : '' }}" href="/admin/users">
                <span class="text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des utilisateurs
                </span>
            </a>

            {{-- Gestion des recettes --}}
            {{-- <a class="element_sidebar {{ request()->is('admin/users*') ? 'element_sidebar_acitf' : '' }}" href="#">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des recettes
                </span>
            </a> --}}

        </div>
    </nav>

    <div class=" mt-auto w-full flex items-center justify-start text-maquette-gris hover:bg-secondaire hover:text-white px-2 rounded-md">
       
    </div>
    <div class="mb-10 w-full flex items-center justify-start text-maquette-gris hover:bg-secondaire hover:text-white px-2 rounded-md">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M6.56515 10.0583C6.56515 9.71663 6.84849 9.43329 7.19015 9.43329H11.7568V2.38329C11.7485 1.98329 11.4318 1.66663 11.0318 1.66663C6.12349 1.66663 2.69849 5.09163 2.69849 9.99996C2.69849 14.9083 6.12349 18.3333 11.0318 18.3333C11.4235 18.3333 11.7485 18.0166 11.7485 17.6166V10.675H7.19015C6.84015 10.6833 6.56515 10.4 6.56515 10.0583Z" fill="#929EAE" />
            <path d="M17.1179 9.6168L14.7512 7.24177C14.5096 7.0001 14.1096 7.0001 13.8679 7.24177C13.6262 7.48343 13.6262 7.88343 13.8679 8.1251L15.1679 9.42513H11.7512V10.6751H15.1596L13.8596 11.9751C13.6179 12.2168 13.6179 12.6168 13.8596 12.8585C13.9846 12.9835 14.1429 13.0418 14.3012 13.0418C14.4596 13.0418 14.6179 12.9835 14.7429 12.8585L17.1096 10.4835C17.3596 10.2501 17.3596 9.85847 17.1179 9.6168Z" fill="#929EAE" />
        </svg>

        <span class="mx-4 text-sm font-bold p-2">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Se déconnecter
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </span>
    </div>
    
</div>

