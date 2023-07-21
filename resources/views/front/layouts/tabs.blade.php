{{-- TABS INFO NAV --}}
    <ul
    class="mb-5 flex list-none flex-col flex-wrap pl-0 md:flex-row"
    id="pills-tab"
    role="tablist"
    data-te-nav-ref>
    <li role="presentation">
        <a
        href="#pills-home"
        class="my-2 block rounded bg-neutral-100 px-7 pb-3.5 pt-4 text-l font-bold uppercase leading-tight text-black data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
        id="pills-home-tab"
        data-te-toggle="pill"
        data-te-target="#pills-home"
        data-te-nav-active
        role="tab"
        aria-controls="pills-home"
        aria-selected="true"
        >Info</a
        >
    </li>
    <li role="presentation">
        <a
        href="#pills-profile"
        class="my-2 block rounded bg-neutral-100 px-7 pb-3 font-bold pt-4 text-l font-bold  leading-tight text-black data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
        id="pills-profile-tab"
        data-te-toggle="pill"
        data-te-target="#pills-profile"
        role="tab"
        aria-controls="pills-profile"
        aria-selected="false"
        >PornStars⭐
        </a
        >
    </li>
    </ul>

<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    id="pills-home"
    role="tabpanel"
    aria-labelledby="pills-home-tab"
    data-te-tab-active>
     {{-- TAGS INFO --}}
     <div class="tags mb-2">
        @for ($i = 0; $i < 9;$i++)          
        <div
        class="
         text-xs inline-flex items-center font-bold leading-sm uppercase px-2 py-1 rounded-full bg-white text-black border mt-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16"> <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/> <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/> </svg>
            Tag {{ $i }}
        
        </div> @endfor
    </div>
    {{-- INFO DESCRIPTION --}}
        <span class="ml-1 " itemscope="description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque esse, quibusdam dignissimos, sed voluptas laboriosam excepturi, fuga voluptatibus iure architecto corporis. Quam laboriosam possimus cumque quos error voluptate debitis maxime.
        </span>
       
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    id="pills-profile"
    role="tabpanel"
    aria-labelledby="pills-profile-tab">
    {{-- PORNSTARS --}}
    <div class="grid grid-cols-12">
        @for ($i = 0; $i < 4; $i++)
        <div class="text-center mx-2 col-span-6 mb-2 sm:col-span-2">
            <img
            src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1240w,f_auto,q_auto:best/newscms/2015_02/835681/150106-mia-khalifa-830a.jpg"
            class="mx-auto mb-2 rounded-lg "
            alt="Videos y perfil de Mia Khalifa" />
            <h3 class="mb-1 text-md font-bold leading-tight">Mia Khalifa</h3>
            <span class="bg-gray-300 text-black rounded p-1 font-bold">Ver perfil</span>
        </div>
        @endfor
    </div>    
  </div>
  
</div>