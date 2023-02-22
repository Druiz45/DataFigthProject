<section class="flex flex-col  justify-center items-center h-screen bg-gray-900">
 <div class="menu-home mr-80">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <div x-data="{ open: false }" class="shadow flex justify-center items-center">
      <div @click="open = !open" class="relative border-b-4 border-transparent py-2" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
        <div class="flex justify-center items-center space-x-1 cursor-pointer">
          <div class="font-semibold text-white text-lg">
            <div class="cursor-pointer">
            <svg class="w-10" clip-rule="evenodd" fill="#fff" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m13 16.75c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm2.195-5.992 2.746 2.999c.142.154.342.243.552.243s.41-.088.553-.242l2.757-2.999c.132-.144.197-.326.197-.507 0-.684-.841-1.008-1.303-.508l-2.202 2.397-2.194-2.396c-.46-.503-1.303-.175-1.303.507 0 .18.065.362.197.506zm-2.195.992c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero"/></svg>
            </div>
          </div>
        </div>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 bg-gray-800 rounded-lg shadow border border-transparent mt-5">
          <ul class="space-y-3 text-white">
            <li class="font-medium">
              <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700 hover-custom">
                <div class="mr-3">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                Perfil
              </a>
            </li>
            <hr class="border-gray-700">
            <li class="font-medium" id="logOut">
              <a class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600 hover-custom">
                <div class="mr-3 text-red-600">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </div>
                Cerrar Session
              </a>
            </li>
          </ul>
        </div>
  </div>
</div>
    </div>
    <div class="flex flex-col items-center">
        <img class="w-1/4" src="../dist/img/analytics.png" alt="logo-DataFight">
        <h2 class="magra-bold text-2xl md:text-4xl flex mb-6 text-white">
            Data Fight
        </h2>
        <div class="grid grid-cols-2 gap-3">
            <a class="source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-purple-400 text-purple-400 hover:text-white hover:bg-purple-500 focus:ring-purple-900">
              Ver mis estadisticas
            </a>
            <a class="source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-sky-500 text-sky-500 hover:text-white hover:bg-sky-600 focus:ring-sky-800">
              Configurar combate
            </a>
            <a class="source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-sky-500 text-sky-500 hover:text-white hover:bg-sky-600 focus:ring-sky-800">
              Creear evento
            </a>
            <a class="source-sans-pro border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-sky-500 text-sky-500 hover:text-white hover:bg-sky-600 focus:ring-sky-800">
               Entrar como control #2
            </a>
        </div>
    </div>    
</section>
<script src="./../src/js/usuarios/logOut.js"></script>