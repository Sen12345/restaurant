<article id='tabs-3' style="margin:auto;width:100%">
     <div class="row">

         <div class="col-lg-12">
             <div class="row">
                 <div class="right-list m-auto ">
                    
                         @foreach($dinner as $dinners)
                         <div class="col-lg-12">
                         <div class="tab-item d-flex ">
                             <img src="storage/dinner/{{ $dinners->image }}"  alt="dinner">
                             <div>
                                 <h4>{{ $dinners->title }}</h4>
                                 <p>{{ $dinners->description }}</p>
                             </div>
                             <div class="price">
                                 <h6>£{{ $dinners->price }}</h6>
                             </div>
                         </div>
                        
                         </div>
                         @endforeach
                    
                 </div>
             </div>
         </div>

     </div>
 </article>