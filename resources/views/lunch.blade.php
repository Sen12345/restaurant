<article id='tabs-2' style="margin:auto;width:100%">
     <div class="row">

         <div class="col-lg-12">
             <div class="row">
                 <div class="right-list m-auto ">
                    
                         @foreach($lunch as $lunches)
                         <div class="col-lg-12">
                         <div class="tab-item d-flex ">
                             <img src="storage/lunch/{{ $lunches->image }}"  alt="Lunch">
                             <div>
                                 <h4>{{ $lunches->title }}</h4>
                                 <p>{{ $lunches->description }}</p>
                             </div>
                             <div class="price">
                                 <h6>£{{ $lunches->price }}</h6>
                             </div>
                            
                         </div>
                       
                         </div>
                         @endforeach
                    
                 </div>
             </div>
         </div>

     </div>
 </article>