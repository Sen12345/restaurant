  <!-- ***** Menu Area Starts ***** -->
  <section class="section pt-5" id="menu" >
    <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our most popular dishes</h6>
                    <h2>A selection of quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12 ">
            <div class="owl-menu-item owl-carousel ">
             @foreach($food as $value)
                <form action="{{ url('/addtocart', $value->id) }}" method="post" style="margin:auto"> 
                @csrf
                <div class="item ">
                    <div class='card' style="height:400px;background-image: url('storage/image/{{ $value->image }}')">
                        <div class="price"><h6>{{ $value->price }}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{ $value->title }}</h1>
                          <p class='description'>{{ $value->description }}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                  <div><input class="py-0"  type="number" name="quantity" min="1" value="1" style="width:60px;border:none;border:none;background:#fff"><input class="ml-1" style="width:100px;border:none;background:#fff" type="submit" value="Add to Cart"></div>
                </div>
                </form>
                @endforeach
               
            </div>
        </div>
    </div>

</section>
<!-- ***** Menu Area Ends ***** -->