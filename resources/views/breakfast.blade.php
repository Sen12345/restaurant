 <article id='tabs-1' style="margin:auto;width:100%">
     <div class="row">

         <div class="col-lg-12">
             <div class="row">
                 <div class="right-list m-auto ">
                    
                         @foreach($breakfast as $breakfasts)
                         <div class="col-lg-12">
                         <div class="tab-item d-flex ">
                             <img src="storage/breakfast/{{ $breakfasts->image }}"  alt="Breakfast">
                             <div>
                                 <h4>{{ $breakfasts->title }}</h4>
                                 <p>{{ $breakfasts->description }}</p>
                             </div>
                             <div class="price">
                                 <h6>£{{ $breakfasts->price }}</h6>
                             </div>
                         </div>
                         </div>
                         @endforeach
                    
                 </div>
             </div>
         </div>

     </div>
 </article>