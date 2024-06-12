<div class="services_section layout_padding">
         <div class="catalogblock">
                        <h1 class="services_taital">BIRDNEST DELIGHTS</h1>
                        <p class="services_text">"With delicious flavors and perfect presentation, We bring you an unforgettable culinary experience"</p>
         </div>
         
         <section id="catalog">
            <div class="container">
               <div class="services_section_2">
                  <div class="row">
                     @foreach($post as $post)
                     <div class="col-md-4 mb-5">


                        <h2 class="services_taital">{{$post->title}}</h2>
                        <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                        <div class="services_desblock">
                           <h3 class="services_descrip">{{$post->description}}<h3>
                        </div>
                     </div>
                     
                     @endforeach
            
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>