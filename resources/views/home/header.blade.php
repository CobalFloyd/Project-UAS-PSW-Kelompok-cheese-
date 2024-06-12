<header class="one">      
               <div class="top-header">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xl-6">
                        <div class="d-flex align-items-center">
                           <div class="content-header me-5">
                              <i>
                                 <svg
                                    height="512"
                                    viewBox="0 0 32 32"
                                    width="512"
                                    xmlns="http://www.w3.org/2000/svg"
                                 >
                                    <g id="_16-Smartphone" data-name="16-Smartphone">
                                       <path
                                       d="m23 2h-14a3 3 0 0 0 -3 3v22a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-22a3 3 0 0 0 -3-3zm-5.39 2-.33 1h-2.56l-.33-1zm6.39 23a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1-1v-22a1 1 0 0 1 1-1h3.28l.54 1.63a2 2 0 0 0 1.9 1.37h2.56a2 2 0 0 0 1.9-1.37l.54-1.63h3.28a1 1 0 0 1 1 1z"
                                       />
                                       <path d="m17 24h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2z" />
                                    </g>
                                 </svg>
                              </i>
                              <h4>
                              Phone:<a href="https://api.whatsapp.com/send?phone=6285105293888">0851-0529-3888</a>
                              </h4>
                           </div>
                           <div class="content-header">
                              <i>
                              <svg
                                 height="512"
                                 viewBox="0 0 32 32"
                                 width="512"
                                 xmlns="http://www.w3.org/2000/svg"
                              >
                                 <g id="_01-Email" data-name="01-Email">
                                    <path
                                    d="m29.61 12.21-13-10a1 1 0 0 0 -1.22 0l-13 10a1 1 0 0 0 -.39.79v14a3 3 0 0 0 3 3h22a3 3 0 0 0 3-3v-14a1 1 0 0 0 -.39-.79zm-13.61-7.95 11.36 8.74-11.36 8.74-11.36-8.74zm11 23.74h-22a1 1 0 0 1 -1-1v-12l11.39 8.76a1 1 0 0 0 1.22 0l11.39-8.76v12a1 1 0 0 1 -1 1z"
                                    />
                                 </g>
                              </svg>
                              </i>
                              <h4>
                              Email:<a href="mailto:@gmail.com">batamnest@gmail.com</a>
                              </h4>
                           </div>
                        </div>
                        </div>
                        <div class="col-xl-6">
                        <div class="d-flex align-items-center login">
                           <div class="header-social-media">
                              <a href="https://www.instagram.com/21_batamnest/"> Instagram </a>
                              <a href="https://www.facebook.com/batambirdnestfactory/?locale=hr_HR"> Facebook </a>
                        </div>
                        </div>
                     </div>
                  </div>
               </div> 
</header>

<div class="header_main">
         <div class="container-fluid">
               <div class="menu_main">
                  <ul>
                     @if(Auth::check() && Auth::user()->isAdmin())
                        
                     <li class="active"><a href="{{route('home')}}">Admin Page</a></li>
                        @else
                           <li class="active"><a href="{{route('home')}}">Home</a></li>
                     @endif

                     <li><a href="#catalog">Catalog</a></li>
                     <li><a href="#about1">About</a></li>

                     @if (Route::has('login'))
                
                     @auth
                     <li> 
                     <x-app-layout>
                     </x-app-layout> 
                     </li>
                     
                        @else
                           <li><a href="{{route('login')}}">Login</a></li>
                           <li><a href="{{route('register')}}">Register</a></li>
                        
                     @endauth
                     @endif

                     
                  </ul>
               </div>
            </div>
         </div>